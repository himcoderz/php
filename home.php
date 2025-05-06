<?php
    include "dbconnection.php";    
    $query    = "SELECT * FROM registrationappp";
    $data     = mysqli_query($conn, $query);
    if (mysqli_num_rows($data) > 0) {}
?>
<html>
    <head>
        <title>Home</title>
        <link rel="stylesheet" href="css/home.css">
    </head>
    <body>
        <h1>Users Database</h1>
        <a id="logout" href="logout.php"><input type="submit" value="Log Out" onclick="logOut()"/></a>
        <table align="center" cellspacing="0">
            <tr>
                <th>I'D</th>
                <th>Name</th>
                <th>Father Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>User</th>
                <th>Password</th>
                <th>Gender</th>
                <th>Course</th>
                <th>Address</th>
                <th>Edit</th>
            </tr>
            <?php
                while ($row = mysqli_fetch_assoc($data)) {
                    echo "
                        <tr>
                            <td>$row[id]</td>
                            <td>$row[name]</td>
                            <td>$row[fname]</td>
                            <td>$row[email]</td>
                            <td>$row[mobile]</td>
                            <td>$row[user]</td>
                            <td>$row[pass]</td>
                            <td>$row[gender]</td>
                            <td>$row[course]</td>
                            <td>$row[address]</td>
                            <td><a id='updatelink' href='update.php?id=$row[id]'>Update</a><a id='deletelink' href='delete.php?id=$row[id]' onclick='return checkdelete()'>Delete</a></td>
                        </tr>
                    ";
                }
            ?>
        </table>
    </body>
    <script>
        function checkdelete() {
            return confirm('Are you sure your want to delete this record');
        }
        function logOut() {
            alert("Are You Sure!");
        }
    </script>
</html>