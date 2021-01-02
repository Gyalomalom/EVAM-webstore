<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
<link rel="stylesheet" type="text/css" href="Styles/Style.css">
<meta name="viewport" content="width=device-width,initial-scale=1">
</head>
<body>
    
    <form id = regform action="Handlers/register.php" method="post" >

    <div class="containerRegister">
	<div id="announce"><?php include 'Login-bar.php'; ?></div>
    <nav><?php include 'NavBar.html'; ?> </nav>
    <div class="containerreginfo">
        
    <label for="FirstName"><b>Enter your first name:</b></label>
    <input type="text" placeholder="First name..." name="firstname" required id = fn >
        
    <label for="LastName"><b>Enter your last name:</b></label>
    <input type="text" placeholder="Last name..." name="lastname" required id = ln>
        
    <label for="email"><b>Enter your e-mail address:</b></label>
    <input type="text" placeholder="E-mail..." name="email" required id = mail>

    <label for="psw"><b>Enter your password:</b></label>
    <input type="password" placeholder="Password..." name="password" required id = pw>

    <input id = regbtn type="submit" value = "Register" disabled />
    <label>
    
    <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
    <span class="psw"><a href="login.php">Already have an account? Click here to log in!</a></span>
	</div>
    
        
    <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src = "FormValidation/FormValidationRegister.js"></script>

    <footer><?php include 'footer.html'; ?></footer>

    </div>
</form>
</body>
</html>