<?php
require_once('db.php');
$toLogin = $_POST['toLogin'];
$pass1 = $_POST['pass'];

if(empty($toLogin) || empty($pass1)) 
{
        echo "Заполните все поля";
} else {
    $sql = "SELECT * FROM `users` WHERE `email` = '$toLogin' || `phoneNum` = '$toLogin' AND `password` = '$pass1'";
$result = $conn -> query($sql);

    if($result->num_rows > 0 ) 
    {
        while($row = $result->fetch_assoc()) {
            echo "Добро пожаловать";
            header('Location: mypage.php');
        } 
    } else {
        echo "Такого пользователя не существует";
    }
}




