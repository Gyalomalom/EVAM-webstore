<?php include 'sessionadmin.php'?>
<?php include_once 'Includes/dbh.inc.php'?>
<!DOCTYPE html>
<html>
<head>
    <title>Upload or edit a file</title>
<link rel="stylesheet" type="text/css" href="Styles/Style.css">
</head>
<body>
    <?php include 'Login-bar.php'?>
    <?php include 'NavBar.html'; ?>

    <div class = container>
        <b>Add new product</b>
        <form action="Handlers/upload.php" method="post" enctype="multipart/form-data">
            <input type = "file" name = "file">

            <label for="itemname"><p>Item name:</p></label>    
            <input type = "text" name = "itemname">

            <label for="itemprice"><p>Item price:</p></label>    
            <input type = "text" name = "price">

            <label for="collection"><p>Item collection:</p></label>    
            <input type = "text" name = "collection">

            <button type = "submit" name = "submit">Add product</button>
        </form>
		<b>Remove product</b>
		<form action="Handlers/remove.php" method="post" enctype="multipart/form-data">
		

            <label for="productid"><p>Product ID:</b></label>    
            <input type = "text" name = "productid">
			
			<button type = "submit" name = "submit">Remove product</button>
        </form>
		<button type = "submit" name = "submit"><a href = "logout.php" id = logout>Log out</a></button>
    </div>  
    	
    <?php include 'ContactInfo.php'?>
</body>
<footer>HTML and CSS for website written by Aleksandar Nasev and David Horvath.</footer>
</html>