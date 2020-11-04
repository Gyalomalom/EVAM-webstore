<?php
require_once('../Classes/User.php');
include_once ('../Includes/dbh.inc.php');

$nameErr = "";
$emailErr = "";
if ((!preg_match("/^[a-zA-Z-' ]*$/",$_POST["firstname"])) or (!preg_match("/^[a-zA-Z-' ]*$/",$_POST["lastname"]))) {
  $nameErr = "Only letters and white space are allowed for the name fields.";
}
else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Invalid email format. Please enter a valid email.";
}
      
?>

<html>
<head><link rel="stylesheet" type="text/css" href="../Styles/Style.css"></head>
<body>
    <?php include '../Login-bar.php'; ?>
<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
  
<?php 
    if (!(empty($nameErr)))
                {
                    echo $nameErr;
                }
    elseif (!(empty($emailErr)))
                {
                    echo $emailErr;
                }
    else
                {   
                    $user = new User();
                    $user->set_firstname($_POST["firstname"]);
                    $user->set_lastname($_POST["lastname"]);
                    $user->set_email($_POST["email"]);
                    $user->set_pass($_POST["password"]);
                    
                    $mail = $user->get_email();
                    $fname = $user->get_firstname();
                    $lname = $user->get_lastname();
                    $pass = $user->get_pass();
                    
                    /*following segment of code uses prepared statements which are essential for security reasons, please don't forget to use them whenever you're parsing user inputed information as SQL statemetns*/
                    //create a template
                    $sql = "INSERT INTO users (email, firstname, lastname, pass) VALUES (?, ?, ?, ?);";
                    //instantiate a new object of type prepared statement
                    $stmt = mysqli_stmt_init($conn); //uses whichever connection variable was used to connect to the db
                    //prepare the prepared statement, or rather try to parse the empty placeholder code first
                    if (!mysqli_stmt_prepare($stmt, $sql)) //check for errors with placeholder before binding values to it
                    {
                       echo "SQL statement failed.";
                    }
                    else
                    {
                        //bind parameters to placeholder, aka add your actual data in the 'template'
                            mysqli_stmt_bind_param($stmt, "ssss", $mail, $fname, $lname, $pass); //"s" is a type indicator for string, one 'letter' is required per variable/questionmark you have in your template. For some reason only accepts variables and can't call the getters from the user class...
                        //after mapping the data to our SQL statement, run the parameters inside the database
                            mysqli_stmt_execute($stmt);
                            $result = mysqli_stmt_get_result($stmt);//get the result from the query

                        echo "Welcome" . " " . $user->get_firstname() . " " . $user->get_lastname(). ", you've successfully completed your registration!";
                    }
                }
?>
    <form action="../Collection-genome.php">
        <input type="submit" value="Click here to go back to browsing." />
    </form>
</div>

</body>
</html>

