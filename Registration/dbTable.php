<?php


$host = "localhost";
$username = "root";
$password = "";

$link = mysqli_connect($host, $username, $password, "register");

if(!$link) die("unable to connect. Error: " . mysqli_connect_error());
echo "connection to database successful<br>";


$database = "CREATE TABLE IF NOT EXISTS users(
    id int(11) NOT NULL AUTO_INCREMENT,
    username varchar(50) NOT NULL,
    email varchar(50) NOT NULL,
    password varchar(50) NOT NULL,
    trn_date datetime NOT NULL,
    PRIMARY KEY (id)
)";

if (mysqli_query($link, $database)) {
    # code...
    echo "Table successfully created";
}else {
    echo "Table not created. ERROR: " . mysqli_error($database);
}

mysqli_close($link);

?>