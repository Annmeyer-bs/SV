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
        <div class="container__login sub_w">
        <!-- action="auth.php" -->
            <form id="formlog"  method="POST">
                <div class="form__input">
                    <p>Login</p>
                    <input class="input"  name="login"  minlength="3" maxlength="25"   type="text" placeholder="Введите логин" required>
                </div>
                <div class="form__input">
                    <p>Pass</p>
                    <input class="input" id="pass" name="password" type="password" placeholder="Введите пароль" minlength="6" maxlength="25" required>
                    <span class="icon-pass" id="icon-pass">&#128064;</span>
                </div>
                <button >Submit</button><br>
                
                
                <?php
                if($_SESSION['Message']){
                    echo    ' <p  class="msg">'   .  $_SESSION['Message']    .'</p> ';
                }
                unset($_SESSION['Message']);
                ?>
                
            </form>
        </div>
    </div>
    <script src="js/eye.js"></script>
</body>
</html>