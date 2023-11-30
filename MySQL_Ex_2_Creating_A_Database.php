<?php
$servername = "localhost";
$username = "root";
$password = "";

// I am creating a connection here with MySQL.

$conn = mysqli_connect($servername, $username, $password);

// I am Checking connection here.
if(!$conn){
    die("Connection failed: ". mysqli_connect_error());
}
// SQL query to Creating a database in MYSQL.
$sql = "CREATE DATABASE xyz";

if(mysqli_query($conn, $sql)){
    echo "Database created successfully";
}else{ 
    echo "Error! creating database: ". mysqli_error($conn);
}
mysqli_close($conn);
?>