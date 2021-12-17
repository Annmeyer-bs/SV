<nav>
    <div class="main_page">
        <a href="main.php">Main Page</a>
    </div>
    <?php
        //Проверяем авторизован ли пользователь
        if(!$_SESSION['user']){
            // если нет, то выводим блок с ссылками на страницу регистрации и авторизации
    ?>
    <div class="login_page">
        <a href="index.php">Login</a>
    </div>
    <div class="register_page">
        <a href="regist.php">Register</a>
    </div>
    <?php
        }else{
        //Если пользователь авторизован, то выводим 
    ?> 
    <div class="edit_page">
        <a href="edit.php">Edit</a>
    </div>
    <div class="logout_page">
        <a href="exit.php">Logout</a>
    </div>
    <?php
        }
    ?>
</nav>