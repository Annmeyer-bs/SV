<?php
session_start();
require_once	'connect.php';
if(!$_SESSION['user']){
    (header('Location:  index.php'));
}
$sql = mysqli_query($connect, "SELECT * FROM `user`  WHERE `id`={$_SESSION['user']['id']}");
$up = mysqli_fetch_array($sql);
?>
<!DOCTYPE html>
<html>
<head>
<title></title>
<meta charset="utf-8">
<link href="css/style.css" rel="stylesheet">
</head>
<body>
<?php
	require	"menu.php";
?>
    <div class="wrapper">
    <aside class="sidebar">
        <div class="sidebar__wrapper">
            <div class="photos" alt="your">
            <img src="<?=$up['photo']?>" width="150px" alt="">

                <h3 class="your">Your</h3>
            </div>
            <section class="contact">
                <h3>Contact</h3>
                <p><?= $up['phone']?> <br><?= $up['email']?><br><?= $up['adress']?><br> <?= $up['links']?></p>
            </section>
            <section class="education">
                <h3>Education</h3>
                <div class="education"><?= $up['education']?></div>
                <div class="education2"><?= $up['education2']?></div>
            </section>
            <section class="skills">
                <h3>Skills</h3>
                <ul class="list"><?= $up['skill']?>
                  <li>php</li>
                    <li>html</li>
                    <li>css</li>
                </ul>
            </section>
        </div>
    </aside>
    <div class="main">
        <div class="conteiner">
            <div class="conteiner__wrapper">
                <h1><?= $up['name']?></h1>
                <h3>web developer</h3>
            </div>
        </div>
        <section class="profile">
            <h3 class="hist">Profile</h3>
            <p><?= $up['profile']?></p>
        </section>
        <section class="proexp">
            <h3 class="hist">Professional experiance</h3>
            <p><?= $up['proexp']?></p>
        </section>
    </div>
</div>