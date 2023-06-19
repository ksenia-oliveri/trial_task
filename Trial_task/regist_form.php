<?php 
$title = "Форма регистрации";
require_once('header.php');
?>
    <div class = "form">
        <h1>Регистрация</h1>
        <form action="register.php" method="post">
            <input type="text" name = "login" placeholder="Введите логин"><br>
            <input type="tel" name="phoneNum" placeholder="Введите номер телефона"><br>
            <input type="email" name="email" placeholder="Введите почтовый адрес"><br>
            <input type="password" name="pass" placeholder="Введите пароль"><br>
            <input type="password" name="repeatpass" placeholder="Повторите пароль"><br>
            <button type="submit">Зарегистрироваться</button>
        </form>
        <h3>Есть аккаунт?<a href="login_form.php">Войти</a></h3>
    </div>
</body>
</html>
