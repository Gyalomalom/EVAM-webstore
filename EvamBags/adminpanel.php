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
        <label><b>Add new product</b></label>
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
		<label><b>Remove product</b></label>
		<form action="Handlers/remove.php" method="post" enctype="multipart/form-data">
		

            <label for="productid"><p>Product ID:</p></label>    
            <input type = "text" name = "productid">
			
			<button type = "submit" name = "submit">Remove product</button>
        </form>
        <label><b>Update existing product:</b></label>
		<form action="Handlers/update.php" method="post" enctype="multipart/form-data">
		

            <label for="productid"><p>Product ID:</p></label>    
            <input type = "text" name = "productid">
            
            <label for="itemname"><p>Item name:</p></label>    
            <input type = "text" name = "itemname">

            <label for="itemprice"><p>Item price:</p></label>    
            <input type = "text" name = "price">

            <label for="collection"><p>Item collection:</p></label>    
            <input type = "text" name = "collection">
			
			<button type = "submit" name = "submit">Update product</button>
        </form>
        <form action = "logout.php" method = post enctype = "multipart/form-data">
        		<button type = "submit" name = "logout">Log out</button>
        </form>

    </div>  
    	
    <?php include 'ContactInfo.php'?>
</body>
<footer>HTML and CSS for website written by Aleksandar Nasev and David Horvath.</footer>
</html>