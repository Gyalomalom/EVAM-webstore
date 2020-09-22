<?php

class User {
  private $email;
  private $firstname;
  private $lastname;
  private $password;
  
  function set_firstname($firstname) {
    $this->firstname = $firstname;
  }
  function set_lastname($lastname) {
    $this->lastname = $lastname;
  }
  function set_email($email) {
    $this->email = $email;
  }
  function set_pass($password) {
    $this->password = $password;
  }
  function get_firstname() {
    return $this->firstname;
  }
  function get_lastname() {
    return $this->lastname;
  }
  function get_email() {
    return $this->email;
  }
  function get_pass() {
    return $this->password;
  }
}
$user = new User();
$user->set_firstname($_GET["John"]);
$user->set_lastname($_GET["Doe"]);
$user->set_email($_GET["johndoe@gmail.com"])
$user->set_pass($_GET["WhoamI88"]

$user1 = new User();
$user1->set_firstname($_GET["Miranada"]);
$user1->set_lastname($_GET["Keyes"]);
$user1->set_email($_GET["mkeyes@gmail.com"])
$user1->set_pass($_GET["WeJustGettinStarted"]

$user2 = new User();
$user2->set_firstname($_GET["Mazo"]);
$user2->set_lastname($_GET["Chris"]);
$user2->set_email($_GET["kriszomazo@gmail.com"])
$user2->set_pass($_GET["Nyalomalom"]


?>