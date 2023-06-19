<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration-bd";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
    die("connection failed");
} else {
     "Соединение установлено";
}