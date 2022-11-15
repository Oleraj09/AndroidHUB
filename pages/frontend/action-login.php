<?php
include "database.php";
$user = $_POST['email'];
$passw = $_POST['pass'];
$sql = "SELECT * FROM user WHERE email='$user' AND pass='$passw'";
$result = $connection->query($sql);
if(! $row = $result->fetch_assoc()){
    echo "Incorrect User Email Or Password!";
}
else{
    header('Location: ../../action.php?pages=admin');
}