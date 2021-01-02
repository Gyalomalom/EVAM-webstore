<?php 

session_start();
include 'Includes/autoload.inc.php'

?>

<!DOCTYPE html>
<html>
<head>
    <title>New items</title>
<link rel="stylesheet" type="text/css" href="Styles/Style.css">
<meta name="viewport" content="width=device-width,initial-scale=1">
</head>
<body>
    <?php include 'Login-bar.php'?>
    <?php include 'NavBar.html'; ?>
    <?php
				$view = new View();
                $result = $view->showProducts();
				
    
    if (!empty($result))
			    foreach($result as $row)
                {
				?>
    
  
 <div class = wrapper>
            <div class = inlinePic>
                <img src = "Uploads/<?php echo $row["imagename"]; ?>" id = pi1>
            </div>
            <div class = descriptionText>
                    <p>
                    <?php echo $row["itemname"]; ?>
                    <br>
                    <?php echo $row["collection"]; ?>
                    <br>
                    <?php echo $row["price"]; ?>
                    <br>
                    </p>
            </div>
</div>
	<?php
    }
    else echo "No results could be returned from the database at this time.";
?>


</body>    
<footer><?php include 'footer.html'; ?></footer>
</html>