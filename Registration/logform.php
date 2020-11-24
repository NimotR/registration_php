<?php
$host = "localhost";
$username = "root";
$password = "";

$link = mysqli_connect($host, $username, $password, "register");

if(!$link) die("unable to connect. Error: " . mysqli_connect_error());
//echo "connection to database successful<br>";

session_start();

if(isset($_REQUEST["submit"])) {

    $uname = stripslashes($_REQUEST["uname"]);
    $uname = mysqli_real_escape_string($link, $uname);
    $pass = stripslashes($_REQUEST["pass"]);
    $pass = mysqli_real_escape_string($link, $pass);
 

    //echo "username: " . $uname ."$email , $pass, $trn_date";

 
    $database = "SELECT * FROM users WHERE username='$uname' AND 
    password = '".md5($pass)."'";

    //echo "username: $uname, password: $pass";
    $result = mysqli_query($link, $database) or die("this is an error: " . mysqli_connect_error());
    $rows = mysqli_num_rows($result);
    
    #proble
    if ($rows==1){
        $_SESSION['username'] = $username;
        echo $_SESSION['username'];
        //header("LOCATION: index.php");
    }else {
        header("LOCATION: reg.html");
    }
 
}else{
    echo "no values present";
}

mysqli_close($link);
?>