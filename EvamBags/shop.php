<?php 

session_start();
include 'Includes/autoload.inc.php'

?>

<!DOCTYPE html>
<html>
<head>
    <title>New items</title>
<link rel="stylesheet" type="text/css" href="Styles/Style.css">
</head>
<body>
    <?php include 'Login-bar.php'?>
    <?php include 'NavBar.html'; ?>
    <?php
				$view = new View();
                $result = $view->showProducts();
				
			    foreach($result as $row)
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
				
			?>

<?php include 'ContactInfo.php'?>
    </body>    
<footer>HTML and CSS for website written by Aleksandar Nasev and David Horvath.</footer>
</html>