<?php

// to add/ update in the database
class UsersController extends Users {

    public function createUser($email, $firstname, $lastname, $pass) {
        $this->setUser($email, $firstname, $lastname, $pass);
    }
    
}