<?php
    include "dbconnection.php";
    $id       = $_GET['id'];    
    $query    = "DELETE FROM registrationappp WHERE id = '$id'";
    $data     = mysqli_query($conn,$query);
    if ($data) {
        echo "<script>alert('Entry deleted')</script>";
?>
<meta http-equiv = "refresh" content="0; url = http://localhost/projects/php/home.php"/>
<?php
    }else {
        echo "<script>alert('Entry not deleted')</script>";
    }
?>