<?php
    include "dbconnection.php";
    $id       = $_GET['id'];    
    $query    = "SELECT * FROM registrationappp WHERE id = '$id'";
    $data     = mysqli_query($conn,$query);
    $row      = mysqli_fetch_assoc($data);
?>
<html>
    <head>
        <title>Update form</title>
        <link rel="stylesheet" href="css/update.css">
    </head>
    <body>
        <form action="insertdata.php" method="POST">
            <h3>UPDATE DETAILS</h3>
            <span>&times;</span>
            <span id="b"></span>
            <input type="text" value="<?php echo $row['name']; ?>" name="uname" placeholder="Full Name" autocomplete="off" required/><br>
            <input type="text" value="<?php echo $row['fname']; ?>" name="ftname" placeholder="Father Name" autocomplete="off" required/><br>
            <input type="email" value="<?php echo $row['email']; ?>" name="emailid" placeholder="Email" autocomplete="off" required/><br>
            <input type="phone" value="<?php echo $row['mobile']; ?>" name="contact" placeholder="Mobile" autocomplete="off" required/><br>
            <input type="text" value="<?php echo $row['user']; ?>" name="username" minlength="8" placeholder="Username" autocomplete="off" required/><br>
            <input type="password" value="<?php echo $row['pass']; ?>" name="userpass" minlength="8" id="password" placeholder="Password" autocomplete="off" required/>
            <select name="subject" required>
                <option>---Select Your Course---</option>
                <option
                    <?php
                        if($row['course'] == 'HTML') {
                            echo "selected";
                        }                    
                    ?>
                >
                HTML</option>
                <option
                    <?php
                        if($row['course'] == 'CSS') {
                            echo "selected";
                        }                    
                    ?>
                >
                CSS</option>
                <option
                    <?php
                        if($row['course'] == 'JS') {
                            echo "selected";
                        }                    
                    ?>
                >
                JS</option>
                <option
                    <?php
                        if($row['course'] == 'JQUERY') {
                            echo "selected";
                        }                    
                    ?>
                >
                JQUERY</option>
                <option
                    <?php
                        if($row['course'] == 'PHP') {
                            echo "selected";
                        }                    
                    ?>
                >
                PHP</option>
            </select><br>
            <select name="gender" required>
                <option>---Select Your Gender---</option>
                <option
                    <?php
                        if($row['gender'] == 'Male') {
                            echo "selected";
                        }						
                    ?>
                >
                Male</option>
                <option
                    <?php
                        if($row['gender'] == 'Female') {
                            echo "selected";
                        }                    
                    ?>
                >
                Female</option>
                <option
                    <?php
                        if($row['gender'] == 'Other') {
                            echo "selected";
                        }                    
                    ?>
                >
                Other</option>
            </select><br>
            <textarea name="address" cols="21" rows="2" placeholder="Address" autocomplete="off" required><?php echo $row['address']; ?></textarea><br>
            <input type="submit" value="Update"/>
            <p id="login-line">Create a new account? <a href="Registration.php">Sign Up here.</a></p>
        </form>
    </body>
</html>