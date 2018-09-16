<?php
$serverName = "localhost";
$userName = "root";
$password = "";

$conn = mysqli_connect($serverName, $userName, $password);
if (!$conn)
{
die("Connection failed : " . mysqli_connect_error());
}
$sql = "CREATE DATABASE xuanvienphp";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);
?>