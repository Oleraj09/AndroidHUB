<?php
include "database.php";
$user = $_POST['email'];
$passw = $_POST['pass'];
$sql = "INSERT INTO `users`(`email`, `pass`) VALUES ('$user','$passw')";
$result = $connection->query($sql);
header('Location: ../../action.php?pages=login');