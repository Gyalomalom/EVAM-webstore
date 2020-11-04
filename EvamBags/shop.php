<?php 
require_once('Classes/Bags.php');
include_once ('Includes/dbh.inc.php');

?>

<!DOCTYPE html>
<html>
<head>
    <title>This is the title</title>
<link rel="stylesheet" type="text/css" href="Styles/Style.css">
</head>
<body>
    <?php include 'Login-bar.php'?>
    <?php include 'NavBar.html'; ?>
	<?php
				$query = "SELECT * FROM items ORDER BY ID ASC";
				$result = mysqli_query($conn, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
    
    <div class = wrapper>
        <div class = itemimage id = c1>
            <div class = inlinePic><img src = "Uploads/<?php echo $row["imagename"]; ?>" id = pi1></div>
            <div class = descriptionText><p>
            <?php echo $row["itemname"]; ?>
            <br>
            <?php echo $row["collection"]; ?>
            <br>
            <?php echo $row["price"]; ?>
            <br>
            </p></div>
        </div>
        
    </div>
	<?php
					}
				}
			?>

<?php include 'ContactInfo.php'?>
    </body>    
<footer>HTML and CSS for website written by Aleksandar Nasev and David Horvath.</footer>
</html>