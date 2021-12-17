<?php
session_start();
require_once	'connect.php';
	
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$adress=$_POST['adress'];
$links=$_POST['links'];
$education=$_POST['education'];
$skills=$_POST['skills'];
$profile=$_POST['profile'];
$proexp=$_POST['proexp'];



$photot='photo/'	.	time()	.	$_FILES['photo']['name'];
if(move_uploaded_file($_FILES['photo']['tmp_name'],	$photot)){
	$_SESSION['Message']='Загрузка	фото	неудалась';
	header('Location:	edit.php');	
}

$id=$_SESSION['user']['id'];
$res=mysqli_query($connect,"UPDATE `user` SET	`name`='$name',`email`='$email',`adress`='$adress',`links`='$links', `education`='$education',`skills`='$skills',`profile`='$profile', `proexp`='$proexp', `photo`='$photot'	WHERE	`id`='$id'");

$_SESSION['Message']='Изменения	прошли	успешно';
header('Location:	edit.php');

?>