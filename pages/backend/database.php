<?php
$connection = mysqli_connect('localhost','root','','download_db');
if(! $connection){
    die('Could not connect to the server');
}