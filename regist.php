<?php
session_start();
if($_SESSION['user']){
    (header('Location:  edit.php'));
}
?>
<!DOCTYPE html>
<html>
<head>
<title></title>
<meta charset="utf-8">
<link href="css/style.css" rel="stylesheet">
<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
  <script src="js/script.js"></script>
</head>
<body>
   
    <div class="container">
    <?php
    require_once	'menu.php';
    ?>
        <div class="container__login">
<!-- action="check.php" -->
            <form id="form" method="POST" onsubmit="return checkRiting()">
                <div class="form__input">
                    <p>E-mail</p>
                    <input class="input"  name="email"    type="email"   placeholder="Введите email" minlength="6" maxlength="25" pattern="[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?" required>
                </div>
                <div class="form__input">
                    <p>Login</p>
                    <input class="input"  name="login"    type="text" placeholder="Введите логин" minlength="3" maxlength="20" pattern="[a-zA-ZА][a-zA-ZА0-9]{0,19}" required>
                </div>
                <div class="form__input">
                    <p>Pass</p>
                    <input class="input" id="NPassword" name="password" type="password" placeholder="Введите пароль" minlength="6" maxlength="20" pattern="[a-zA-ZА0-9]{0,19}" required><br>
                </div>
                <div class="form__input">
                    <p>Pass</p>
                    <input class="input" id="CPassword" name="password2" type="password" placeholder="Введите пароль" minlength="6" maxlength="20" pattern="[a-zA-ZА0-9]{0,19}" required><br>
                </div>
                <button type="submit">Submit</button><br>

            </form>

            <div id="zatemnenie">
                <div id="okno">
                    Всплывающее окошко!<br>
                    <a href="#" class="close">Закрыть окно</a>
                </div>
            </div>
            <div class="regsus">
                    <p>Регистрация прошла успешно</p>
                    <div class="regsusclose"></div>
                </div>
        </div>
    </div>

</body>
</html>
