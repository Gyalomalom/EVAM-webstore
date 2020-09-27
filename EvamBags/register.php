<html>
<head>
    <title>This is the title</title>
<link rel="stylesheet" type="text/css" href="Styles/Style.css">
</head>
<body>
    <?php include 'Login-bar.php'?>
    <div class = logo><a href = "index.php">This is a logo</a></div>
    <?php include 'NavBar.html'; ?>
<form action="Handlers/register.php" method = "post">
	<div class="container">
		<h1>Create account</h1>
		<p>Please fill in this form to create an account.</p>
		<hr>
		<label for="firstname"><b>First name</b></label>
		<input type="text" placeholder="Enter fitst name" name="firstname" id="fname" required>
		
		<label for="lastname"><b>Last name</b></label>
		<input type="text" placeholder="Enter last name" name="lastname" id="lname" required>

		<label for="email"><b>Email</b></label>
		<input type="text" placeholder="Enter Email" name="email" id="email" required>

		<label for="psw"><b>Password</b></label>
		<input type="password" placeholder="Enter Password" name="password" id="psw" required>

		<p>By creating an account you agree to our <a href="#">Terms & Privacy"</a>.</p>
		<input type="submit" value = "register" name = "submit"/>
        
	</div>

	<div class="container signin">
    <p>Returning customer? <a href="#">Sign in</a>.</p>
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
            Ajtósi Dürer sor 21.
            <br>
            </p>
        </div>   
    </div>
</body>
<footer>HTML and CSS for website written by Aleksandar Nasev and David Horvath.</footer>
</html>