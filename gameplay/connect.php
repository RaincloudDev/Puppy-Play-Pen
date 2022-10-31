<?php

$servername="localhost";
$dbusername="root";
$dbpassword="";
$dbname= "puppy play pen";

$conn=mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

if (!$conn) {
    die("Connection Failed: ".mysqli_connect_error());
    
}