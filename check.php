<?php
session_start();
require_once	'connect.php';
$email=$_POST['email'];
$login=$_POST['login'];
$password_1 = $_POST['password'];
$password_2 =  $_POST['password2'];
  if ($password_2 == "") {
  echo  "Пароль не подтвержден. Пожалуйста, повторите ввод пароля";
  }
  else {
  if ($password_1 != $password_2) {
  echo "В полях 'Пароль' комбинации символов не совпадают";
  }
  else{
    $password=md5(trim($password_1)); 
        
    mysqli_query($connect,"INSERT INTO `user`( `email`,`login`, `password`) VALUES('$email','$login','$password')");
    $_SESSION['Message']='Регистрация	прошла	успешна';
    header('Location:	index.php');
  }
  }  

?>