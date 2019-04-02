<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testDB";

$conn = mysqli_connect($servername, $username, $password,$dbname);

/*if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}*/

/*$sql = "CREATE DATABASE testDB";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}*/

/*$sql = "CREATE TABLE Worker (
id INT(6) UNSIGNED,
name VARCHAR(30) NOT NULL,
description VARCHAR(50) NOT NULL,
wage INT(11) NOT NULL
)";

if (mysqli_query($conn, $sql)) {
    echo "Table Worker created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}*/

//mysqli_close($conn);
?>