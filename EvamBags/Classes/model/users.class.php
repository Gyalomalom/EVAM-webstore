<?php 

// for database interaction
class Users extends Dbh {

    protected  function getUser($name) {
        $sql = "SELECT * FROM users WHERE lastname = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name]);

        

        $result =  $stmt->fetchAll();

        if ($stmt->rowCount() > 0) {
            
          } else {
             echo 'nothing';
          }
        
        return $result;
    }


    protected  function setUser($email, $firstname, $lastname, $pass) {
        $sql = "INSERT INTO users(email, firstname, lastname, pass) VALUES (?,?,?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$email, $firstname, $lastname, $pass]);

     }

}

