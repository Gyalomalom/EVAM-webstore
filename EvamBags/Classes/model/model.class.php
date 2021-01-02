<?php 

// for database interaction
class Model extends Dbh {

    protected  function getUser($name) {

      if (empty($name))
      {
        $result = "Name cannot be empty.";
                
      }
      else
      {
        $sql = "SELECT * FROM users WHERE lastname = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name]);

        

        $result =  $stmt->fetchAll();

        return $result;

      }

        
    }


    protected  function setUser($email, $firstname, $lastname, $pass) {
        $sql = "INSERT INTO users(email, firstname, lastname, pass) VALUES (?,?,?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$email, $firstname, $lastname, $pass]);

    }

    protected function loginUser($email, $pass){

      $Err = array();    
            if (empty($pass))
            {
              $Err[] = "Password required";
                
            }

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
            {
              $Err[] = "Email format was incorrect.";
            }

            if (empty($Err))
            {
              $sql = "SELECT * FROM users WHERE email = ? AND pass = ?";
              $stmt = $this->connect()->prepare($sql);
              $stmt->execute([$email, $pass]);
        
              $result = $stmt->fetch();
        
              if ($stmt->rowCount() > 0) {
                
                $result = true;
                
              } else {
        
                $result = false;
              }
            
              return $result;
            }
        
        return $Err;
    }

    protected function getProducts(){

      $sql = "SELECT * FROM items ORDER BY ID";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute();

      return $stmt->fetchAll();

      
    }

    protected function getProduct($id){

      if (empty($id) && $id < 0)
      {
        $result = "Wrong id.";
                
      }
      else
      {

      $sql = "SELECT * FROM items WHERE ID = ?";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute([$id]);

      return $stmt->fetch();
      }

      
    }

    protected function removeProduct($id){

      if(is_numeric($id) && $id >= 0 ){

      $sql = "DELETE FROM items WHERE ID =?";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute([$id]);

      }
      else
      {
        $result = "Incorrect product ID.";

      }

    }

    protected function updateProduct($id, $name, $price, $collection){

      

      $Err = array();    
            if (empty($name) && empty($collection))
            {
              $Err[] = "Collection and name cannot be empty.";
                
            }

            if (!is_numeric($price) && !is_numeric($id)) 
            {
              $Err[] = "Price and id has to be numerals.";
            }

            if ($id < 0) 
            {
              $Err[] = "ID cannot be negative";
            }

            if (empty($Err))
            {
              $sql = "UPDATE items SET itemname = ?, price = ?, collection = ? WHERE ID = ?";
              $stmt = $this->connect()->prepare($sql);
              $stmt->execute([$name, $price, $collection, $id]);
            }
        
        return $Err;

    }

    protected function uploadProduct($name, $price, $collection, $file, $fileName, $fileTmpName, $fileSize, $fileError, $fileType){

     
      $amount = 1;    

      $fileExt = explode('.', $fileName);
      $fileActualExt = strtolower(end($fileExt));

      $allowed = array ('jpg', 'jpeg', 'png');

      if (in_array($fileActualExt, $allowed)){
        if ($fileError===0){
            if ($fileSize < 10000000){
            $fileNameNew = uniqid('', true).".".$fileActualExt;
            $fileDestination = '../Uploads/'.$fileNameNew;
            move_uploaded_file($fileTmpName, $fileDestination);

            $sql = "INSERT INTO items (itemname, price, collection, imagename, amount) VALUES (?, ?, ?, ?, ?)";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$name, $price, $collection, $fileNameNew, $amount]);
            
            
                
            } 
            else 
            {
                echo "Your file exceeded the size limit.";
            }
    
        }
        else
        {
        echo "There was an error with uploading your file.";
        }
    
      }
      else
      {
      echo "You cannot upload files of this type. Please upload a different type of file";
      }
    
    
    }

    protected function createUser($email, $firstname, $lastname, $pass)
    {
        
        $Err = array();    
            if ((!preg_match("/^[a-zA-Z-' ]*$/",$firstname)) or (!preg_match("/^[a-zA-Z-' ]*$/",$lastname)))
            {
              $Err[] = "Only letters and white space allowed";
                
            }

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
            {
              $Err[] = "Email format was incorrect.";
            }

            if (empty($Err))
            {
            $this->setUser($email, $firstname, $lastname, $pass);
            }
        
        return $Err;
        
    }

}

?>

