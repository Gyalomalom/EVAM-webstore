<?php 

// for database interaction
class Model extends Dbh {

    protected  function getUser($name) {
        $sql = "SELECT * FROM users WHERE lastname = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name]);

        

        $result =  $stmt->fetchAll();

        
    }


    protected  function setUser($email, $firstname, $lastname, $pass) {
        $sql = "INSERT INTO users(email, firstname, lastname, pass) VALUES (?,?,?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$email, $firstname, $lastname, $pass]);

    }

    protected function loginUser($email, $pass){

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

    protected function getProducts(){

      $sql = "SELECT * FROM items ORDER BY ID";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute();

      return $stmt->fetchAll();

      
    }

    protected function removeProduct($id){

      $sql = "DELETE FROM items WHERE ID =?";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute([$id]);

    }

    protected function updateProduct($id, $name, $price, $collection){

      $sql = "UPDATE items SET itemname = ?, price = ?, collection = ? WHERE ID = ?";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute([$name, $price, $collection, $id]);

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

    protected function createUser($email, $firstname, $lastname, $pass){


      $sql = "INSERT INTO users (email, firstname, lastname, pass) VALUES (?, ?, ?, ?);";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute([$email, $firstname, $lastname, $pass]);

      echo "Welcome" . " " . $firstname . " " . $lastname. ", you've successfully completed your registration!";

    }

            
    

}

?>

