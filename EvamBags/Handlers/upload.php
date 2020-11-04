<?php
include_once ('../Includes/dbh.inc.php');

if (isset($_POST['submit'])){
$file = $_FILES['file'];

$fileName = $_FILES['file']['name'];
$fileTmpName = $_FILES['file']['tmp_name'];
$fileSize = $_FILES['file']['size'];
$fileError = $_FILES['file']['error'];
$fileType = $_FILES['file']['type'];

$itemname = $_POST['itemname'];
$iprice = $_POST['price'];
$icol = $_POST['collection'];

$fileExt = explode('.', $fileName);
$fileActualExt = strtolower(end($fileExt));

$allowed = array ('jpg', 'jpeg', 'png');

if (in_array($fileActualExt, $allowed)){
    if ($fileError===0){
        if ($fileSize < 10000000){
        $fileNameNew = uniqid('', true).".".$fileActualExt;
        $fileDestination = '../Uploads/'.$fileNameNew;
        move_uploaded_file($fileTmpName, $fileDestination);
        
        /*following segment of code uses prepared statements which are essential for security reasons, please don't forget to use them whenever you're parsing user inputed information as SQL statemetns*/
                    //create a template
                    $sql = "INSERT INTO items (itemname, price, collection, imagename) VALUES (?, ?, ?, ?);";
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
                            mysqli_stmt_bind_param($stmt, "ssss", $itemname, $iprice, $icol, $fileNameNew); //"s" is a type indicator for string, one 'letter' is required per variable/questionmark you have in your template. For some reason only accepts variables and can't call the getters from the user class...
                        //after mapping the data to our SQL statement, run the parameters inside the database
                            mysqli_stmt_execute($stmt);
                            $result = mysqli_stmt_get_result($stmt);//get the result from the query

                        echo "File was successfully uploaded.";
                    }
            
        } else {
            echo "Your file exceeded the size limit.";
        }

    }
    else{
        echo "There was an error with uploading your file.";
        }

    }
else
{
echo "You cannot upload files of this type. Please upload a different type of file";
}


}
?>