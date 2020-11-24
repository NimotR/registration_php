<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: login.html");
exit(); }

$host = "localhost";
$username = "root";
$password = "";
$link = mysqli_connect($host, $username, $password, "register");

if(!$link) die("unable to connect. Error: " . mysqli_connect_error());

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="form">
        <p>Welcome 
            <?php
            $uname = "SELECT * FROM users WHERE username='$uname'";

            $_SESSION['username'] = $uname;
            echo $_SESSION['username'];
            ?>!</p>
        <p>This is secure area.</p>
        <p><a href="dashboard.php">Dashboard</a></p>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>