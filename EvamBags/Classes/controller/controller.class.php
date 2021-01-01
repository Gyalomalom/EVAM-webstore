<?php

class Controller extends Model {

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
        return $this->createUser($email, $firstname, $lastname, $pass);
    }
}