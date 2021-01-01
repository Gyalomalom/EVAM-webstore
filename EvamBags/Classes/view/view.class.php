<?php

class View extends Model {

    public function showUser($name) {

        $result = $this->getUser($name);
        echo "Name: " . $result[0]["pass"];
        
    }

    public function loginAdmin($email, $pass){

        $result = $this->loginUser($email, $pass);

        if($result == true){

            echo "User logged in.";
            $_SESSION['userid'] = $email;
            header("Location: ../adminpanel.php");
        }
        else
        {
            header("Location: ../login.php");

        }
    }

    public function showProducts(){

        return $this->getProducts();
        
    }
    
}
    

?>