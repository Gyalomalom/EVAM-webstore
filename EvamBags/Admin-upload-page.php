<?php include 'session.php'?>
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
        <form action="Handlers/upload.php" method="post" enctype="multipart/form-data">
            <input type = "file" name = "file">

            <label for="itemname"><b>Item name:</b></label>    
            <input type = "text" name = "itemname">

            <label for="itemprice"><b>Item price:</b></label>    
            <input type = "text" name = "price">

            <label for="collection"><b>Which collection does the item belong to:</b></label>    
            <input type = "text" name = "collection">

            <button type = "submit" name = "submit">Upload file...</button>
        </form>
    </div>
    <?php include 'ContactInfo.php'?>
</body>
<footer>HTML and CSS for website written by Aleksandar Nasev and David Horvath.</footer>
</html>