<?php
var_dump($_POST);
$sql = "SELECT * FROM tasks WHERE Email = " . $_POST['uEmail']. " and Password = " . $_POST['uPassword'];
var_dump($sql);
?>