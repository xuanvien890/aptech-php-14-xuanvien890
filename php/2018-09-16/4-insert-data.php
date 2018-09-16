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
$sql = "INSERT INTO tasks (uLastName,uFirstName,uEmail,uPassword,uRole)
VALUES
( 'vien', 'tran', 'vien.xd@gmail.com',12345, 1),
( 'chang', 'nguyen', 'chang.ng@hotmail.com',44444, 2),
( 'Henry', 'Tran', 'trang@gmail.com',33333, 2),
('hien', 'ly', 'ly@gmail.com',22222, 1),
( 'vy', 'Nguyen', 'vy@gmail.com',11111, 2)";

if ($conn->query($sql) === true) {
echo "Table User created successfully";
} else {
echo "Error creating table : " . $conn->error;
}

$conn->close();