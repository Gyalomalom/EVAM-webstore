<?php include 'sessionadmin.php'?>


<!DOCTYPE html>
<html>
<head>
    <title>Upload or edit a file</title>
<link rel="stylesheet" type="text/css" href="Styles/Style.css">
<meta name="viewport" content="width=device-width,initial-scale=1">
</head>
<body>

    <div class=containeradmin>
    <div id="announce"><?php include 'Login-bar.php'; ?></div>
    <nav><?php include 'NavBar.html'; ?> </nav>

    <div class = containeradd>
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
    </div>
    <div class = containerremove>

		<label><b>Remove product</b></label>
		<form action="Handlers/remove.php" method="post" enctype="multipart/form-data">
		

            <label for="productid"><p>Product ID:</p></label>    
            <input type = "text" name = "productid">
			
			<button type = "submit" name = "submit">Remove product</button>
        </form>
    </div>
    <div class = containerupdate>

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
        

    </div> 
    <div id = logout>
    <form action = "logout.php" method = post enctype = "multipart/form-data">
    <button type = "submit" name = "logout" id="logout">Log out</button>
    </form>
    </div>
    <footer><?php include 'footer.html'; ?></footer>
    </div>
    	
</body>
</html>