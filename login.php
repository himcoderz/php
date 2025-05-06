<?php
    include "dbconnection.php";
	if(isset($_POST['login'])) {
		$useremail   = $_POST["email"];
		$userpass    = $_POST["password"];
		$query       = "SELECT * FROM registrationappp WHERE email = '$useremail' && pass = '$userpass'";
		$data        = mysqli_query($conn,$query);
		$total       = mysqli_num_rows($data);		
		if($total == 1) {
			header('location:home.php');
		}else {
			echo "<script>alert('Email or Password not Valid');</script>";
		}
    }
?>
<html>
    <head>
        <title>Login form</title>
        <link rel="stylesheet" href="css/login.css"/>
    </head>
    <body>
        <form action="#" method="POST">
            <h3>LOGIN FORM</h3>
            <span>&times;</span>
            <span id="b"></span>
            <input type="email" name="email" placeholder="Please Enter your Email" autocomplete="off" required/><br>
            <input type="password" name="password" placeholder="Please Enter your Password" id="password" autocomplete="off" required/>
            <input type="submit" name="login" value="Login"/>
            <p id="login-line">Create a new account? <a href="Registration.php">Sign Up here.</a></p>
        </form>
    </body>
</html>