<?php

$host = "localhost";
$username = "root";
$password = "";


$link = mysqli_connect($host, $username, $password);

if(!$link) die("unable to connect. Error: " . mysqli_connect_error());
echo "connection to database successful<br>";


$database = "CREATE DATABASE register";

if (mysqli_query($link, $database)){
    echo "<br>database successfully created";
}else {
    echo "<br>database not created" . mysqli_error($link);
}

mysqli_close($link);

?>