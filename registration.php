<html>
    <head>
        <title>Registration form</title>
        <link rel="stylesheet" href="css/registration.css"/>
    </head>
    <body>
        <form action="insertdata.php" method="POST">
            <h3>REGISTRATION FORM</h3>
            <span>&times;</span>
            <span id="b"></span>
            <input type="text" name="uname" placeholder="Full Name" autocomplete="off" required/><br>
            <input type="text" name="ftname" placeholder="Father Name" autocomplete="off" required/><br>
            <input type="email" name="emailid" placeholder="Email" autocomplete="off" required/><br>
            <input type="phone" name="contact" placeholder="Mobile" autocomplete="off" required/><br>
            <input type="text" name="username" minlength="8" placeholder="Username" autocomplete="off" required/><br>
            <input type="password" name="userpass" minlength="8" id="password" placeholder="Password" autocomplete="off" required/>
            <select name="subject" required>
                <option>---Select Your Course---</option>
                <option>HTML</option>
                <option>CSS</option>
                <option>JS</option>
                <option>JQUERY</option>
                <option>PHP</option>
            </select><br>
            <select name="gender" required>
                <option>---Select Your Gender---</option>
                <option>Male</option>
                <option>Female</option>
                <option>Other</option>
            </select><br>
            <textarea name="address" cols="21" rows="2" placeholder="Address" autocomplete="off" required></textarea><br>
            <input type="submit" value="Submit"/>
            <p id="login-line">Already have an account? <a href="login.php">Login here.</a></p>
        </form>
    </body>
</html>