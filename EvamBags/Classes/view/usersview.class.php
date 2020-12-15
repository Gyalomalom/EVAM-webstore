<?php

// to view the users
class UsersView extends Users {

    public function showUser($name) {

        $result = $this->getUser($name);
        echo "Name: " . $result['email'];
        echo "Email: " . $result['firstname'];
    }

}