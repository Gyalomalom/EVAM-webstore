<?php

class Controller extends Model {

    public function createUser($email, $firstname, $lastname, $pass) {
        $this->setUser($email, $firstname, $lastname, $pass);
    }

    public function deleteProduct($id){
        $this->removeProduct($id);
    }
    
    public function updateInfo($id, $name, $price, $collection){
        $this->updateProduct($id, $name, $price, $collection);
    }

    public function addProduct($name, $price, $collection, $file, $fileName, $fileTmpName, $fileSize, $fileError, $fileType){
        $this->uploadProduct($name, $price, $collection, $file, $fileName, $fileTmpName, $fileSize, $fileError, $fileType);
    }

    public function registerUser($email, $firstname, $lastname, $pass){
        $this->createUser($email, $firstname, $lastname, $pass);
    }
}