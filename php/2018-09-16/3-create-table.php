<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbv = "xuanvienphp";
$conn = mysqli_connect($serverName, $userName, $password, $dbv);
if (!$conn)
{
die("Connection failed : " . mysqli_connect_error());
}
$sql = "CREATE TABLE tasks (
    uId int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    uLastName varchar(255),
    uFirstName varchar(255),
    uEmail varchar(255) NOT NULL UNIQUE,
    uPassword  int NOT NULL DEFAULT 2,
    uRole int NOT NULL DEFAULT 2,
    uState int NOT NULL DEFAULT 1,
    uCreatedDate datetime NOT NULL DEFAULT NOW(),
    uModifiedDate datetime
    )";
    if ($conn->query($sql) === true) {
        echo "Table User created successfully";
        } else {
        echo "Error creating table : " . $conn->error;
        }
        
        $conn->close();
?>