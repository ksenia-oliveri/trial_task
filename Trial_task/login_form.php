<?php
require_once('header.php');?>
    <div class="container">
        <h1>Авторизация</h1>
        <form action="login.php" method="post">
            <input type="text" name="toLogin" placeholder="Введите номер телефона или почтовый адрес"><br>
            <input type="password" name="pass" placeholder="Введите пароль"><br>
            <button type="submit">Войти</button>
        </form>
    </div>
</body>
</html>