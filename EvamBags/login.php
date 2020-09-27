<html>
<head>
    <title>This is the title</title>
<link rel="stylesheet" type="text/css" href="Styles/Style.css">
</head>
<body>
    <?php include 'Login-bar.php'?>
    <div class = logo><a href = "index.php">This is a logo</a></div>
    <?php include 'NavBar.html'; ?>
<form action="Handlers/login.php" method="post">

	<div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <button type="submit">Login</button>
    <label>
    <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
	</div>

	<div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw"><a href="#">Forgot password?</a></span>
	</div>
</form>
    <div class = imageparagraph id = p3>
        <div class = inlinePic><img src = "Images/placeholder%207x7.png" id = pi3></div>
        <div class = text><p>
            Our studio
            <br>
            1146
            <br>
            Budapest
            <br>
            Ajtosi Durer sor 21.
            <br>
            </p>
        </div>   
    </div>
</body>
<footer>HTML and CSS for website written by Aleksandar Nasev and David Horvath.</footer>
</html>