

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
$user->set_firstname($_GET["firstmame"]);
$user->set_lastname($_GET["lastname"]);
$user->set_email($_GET["email"])
$user->set_pass($_GET["password"]



?>

Welcome <?php echo $_GET["name"]; ?><br>
Your email address is: <?php echo $_GET["email"]; ?>

