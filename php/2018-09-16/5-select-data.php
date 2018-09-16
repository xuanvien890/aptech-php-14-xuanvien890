<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
  </head>
  <body>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
    <table class="table table-striped ">
  <thead >
    <tr>
      <th scope="col">uLastName</th>
    <th scope="col">uFirstName</th>
      <th scope="col">uEmail</th>
      <th scope="col">uPassword</th>
      <th scope="col">uRole</th>
         </tr>
  </thead>
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
$sql = "SELECT * FROM tasks limit 6";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
while ($row = $result->fetch_assoc()) {
    echo '<tr>';
    echo "<th>$row[uLastName]</td>";
    echo "<td>$row[uFirstName]</td>";
    echo "<td>$row[uEmail]</td>";
    echo "<td>$row[uPassword]</td>";
    echo "<td>$row[uRole]</td>";
echo '</tr>';
}
} else {
echo "0 results";
}
$conn->close();
?>