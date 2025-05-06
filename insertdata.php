<?php
    include "dbconnection.php";	
    $username        = $_POST["uname"];
    $userfather      = $_POST["ftname"];
    $useremail       = $_POST["emailid"];
    $usermob         = $_POST["contact"];
    $userv           = $_POST["username"];
    $userpassword    = $_POST["userpass"];
    $usergender      = $_POST["gender"];
    $usercourse      = $_POST["subject"];
    $useraddress     = $_POST["address"];
    $sql             = "insert into registrationappp(name,fname,email,mobile,user,pass,gender,course,address) values('$username','$userfather','$useremail','$usermob','$userv','$userpassword','$usergender','$usercourse','$useraddress')";
    if(mysqli_query($conn,$sql)) {
        echo "<script>alert('Data Successfully Submitted');</script>";
    }else {
        echo "<script>alert('Data Not Submitted');</script>";
    }
    mysqli_close($conn);
?>