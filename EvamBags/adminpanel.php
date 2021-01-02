<?php include 'sessionadmin.php';
include 'Includes/autoload.inc.php'?>


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
    
    <div class = containertable id = cnttbl>
        <h2>Please select a product from the database.</h2>

        <form action=""> 
          <select name="customers" onchange="showCustomer(this.value)">
            <option value="">Select a product:</option>
                <?php
				$view = new View();
                $result = $view->showProducts();
				
    
                if (!empty($result))
			    foreach($result as $row)
                {
				?>            
              <option value="<?php echo $row["ID"]; ?>"> <?php echo $row["itemname"]; ?></option>
          <?php }; ?>  
          </select>
        </form>
        <br>
        <div id="txtHint">Product info will be listed here...</div>
    </div>
    <div class = containeradd id = cntadd>
        <label><b>Add new product</b></label>
        <form action="Handlers/upload.php" method="post" enctype="multipart/form-data">
            <input type = "file" name = "file" id = addfile>

            <label for="itemname"><p>Item name:</p></label>    
            <input type = "text" name = "itemname" id = additemname>

            <label for="itemprice"><p>Item price:</p></label>    
            <input type = "text" name = "price" id = addprice>

            <label for="collection"><p>Item collection:</p></label>    
            <input type = "text" name = "collection" id = addcollection>

            <input id = addsubmit type = "submit" name = "submit" value = "Add product" disabled>
        </form>
    </div>
    <div class = containerremove id = cntrmv>

		<label><b>Remove product</b></label>
		<form action="Handlers/remove.php" method="post" enctype="multipart/form-data">
		

            <label for="productid"><p>Product ID:</p></label>    
            <input type = "text" name = "productid" id = removeID>
			
			<input id = btnremove type = "submit" name = "submit" value = "Remove product" disabled>
        </form>
    </div>
    <div class = containerupdate id = cntupt>

        <label><b>Update existing product:</b></label>
		<form action="Handlers/update.php" method="post" enctype="multipart/form-data">
		

            <label for="productid"><p>Product ID:</p></label>    
            <input type = "text" name = "productid" id = updateID>
            
            <label for="itemname"><p>Item name:</p></label>    
            <input type = "text" name = "itemname" id = updatename>

            <label for="itemprice"><p>Item price:</p></label>    
            <input type = "text" name = "price" id = updateprice>

            <label for="collection"><p>Item collection:</p></label>    
            <input type = "text" name = "collection" id = updatecollection>
			
			<input id = btnupdate type = "submit" name = "submit" value = "Update product" disabled>
        </form>
        

    </div> 
    <div id = logout>
    <form action = "logout.php" method = post enctype = "multipart/form-data">
    <button type = "submit" name = "logout" id="logout">Log out</button>
    </form>
    </div>
    <footer><?php include 'footer.html'; ?></footer>
    </div>
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src = "additionalJS/producttable.js"></script>
    <script src = "FormValidation/FormValidationAdmin.js"></script>
</body>
</html>