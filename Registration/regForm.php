<?php

$host = "localhost";
$username = "root";
$password = "";

$link = mysqli_connect($host, $username, $password, "register");

if(!$link) die("unable to connect. Error: " . mysqli_connect_error());
//echo "connection to database successful<br>";

if(isset($_REQUEST["submit"])) {

    $uname = stripslashes($_REQUEST["uname"]);
    $uname = mysqli_real_escape_string($link, $uname);
    $email = stripslashes($_REQUEST["email"]);
    $email = mysqli_real_escape_string($link, $email);
    $pass = stripslashes($_REQUEST["pass"]);
    $pass = mysqli_real_escape_string($link, $pass);
    $trn_date = date("Y-m-d H:i:s");
 

    //echo "username: " . $uname ."$email , $pass, $trn_date";

 
    $database = "INSERT into users (username, email, password, trn_date)
    VALUES ('$uname', '$email', '".md5($pass)."', '$trn_date')";

    $result = mysqli_query($link, $database);

    #proble
    if ($result){
        echo "<h3>You Registered Successsfully</h3> 
        <br>Click here to <a href='login.html'>Login</a></div>";
    }else {
        header("LOCATION: reg.html");
    }
 
}else{
    echo "no values present";
}

mysqli_close($link);

?>
