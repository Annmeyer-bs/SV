<?php
session_start();
require_once	'connect.php';
	
$login=$_POST['login'];
$password=md5(trim($_POST['password']));

$check_user=mysqli_query($connect,"SELECT	*	FROM	`user`	WHERE	`login`='$login'	AND	`password`='$password'");

if(mysqli_num_rows($check_user)>0){
$user=mysqli_fetch_assoc($check_user);
$_SESSION['user']=[
	"id"	=>	$user['id'],
	"name"	=>	$user['name'],
	"photo"	=>	$user['photo'],
	"email"	=>	$user['email'],
	"phone"	=>	$user['phone']];

	header('Location:	edit.php');
}
else{
$_SESSION['Message']='Неверный	логин	или	пароль';
header('Location:	index.php');}
	?>
