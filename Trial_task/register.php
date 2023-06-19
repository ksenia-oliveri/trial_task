<?php 
require_once('db.php');
$login = $_POST['login'];
$phone = $_POST['phoneNum'];
$email = $_POST['email'];
$pass1 = $_POST['pass'];
$pass2 = $_POST['repeatpass'];

// Тут я пыталась выполнить проверку наличия логина, почты и телефона в бд, но у меня не получилось 
// $loginBD = $conn -> query("SELECT * FROM `users` WHERE `login` = '$login'");

// $emailBD = $conn -> query("SELECT * FROM `users` WHERE `email` = '$email'");
// $phoneBD = $conn -> query("SELECT * FROM `users` WHERE `phoneNum` = '$phone'");


if(empty($login) || empty($phone) || empty($email) || empty($pass1) || empty($pass2)) 
{
    echo "Заполните все поля";
// } else if (($login == $loginBD) || ($email == $emailBD || $phone == $phoneBD))
// {
//     echo "Такой пользователь уже существует";
} else if($pass1 !== $pass2) {
        echo "Пароли не совпадают";
    } else {
        $sql = "INSERT INTO `users` (`login`, `email`, `phoneNum`, `password`) VALUES ('$login', '$email', '$phone', '$pass1')";
        $conn -> query($sql);
        header('Location: mypage.php');
    }











