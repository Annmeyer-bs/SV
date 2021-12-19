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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="../js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery.maskedinput@1.4.1/src/jquery.maskedinput.min.js" type="text/javascript"></script>
    <title>Document</title>
</head>
<body>
<?php
	require	"menu.php";
?>
<div class="wrapper">
        <form id="formedit" action="editup.php" method="post" enctype="multipart/form-data">
            <aside class="sidebar">
                <div class="sidebar__wrapper">
                    <div class="photos" alt="your">
                        
                        <img src="<?=$up['photo']?>" width="150px" alt="">
                        <input class="photo" id="ifile" name="photo" type="file" accept=".jpg, .jpeg, .png, .svg" <?= $up['photo']?> ><br>
                        <label class="co" for="ifile"></label>
                        <label class="in" for="ifile">File input here</label>
                    </div>
                    <section class="contact">
                        <h3>Contact</h3>
                        <input class="mask-phone input" name="phone" type="tell" placeholder="  +380" value="<?= $up['phone']?>"><br>
                        <input class="input" name="email" type="email" placeholder="  test@gmail.com" value="<?= $up['email']?>"><br>
                        <input class="input" name="adress" type="text" placeholder="  Country, City, District" value="<?= $up['adress']?>"><br>
                        <input class="input" name="links" type="text" placeholder="  linkedin.com/username" value="<?= $up['links']?>"><br>
                    </section>
                    <section class="educations">
                        <h3>Education</h3>
                    
                            <textarea class="textarea" name="education" type="text" wrap="soft" ><?= $up['education']?></textarea>
                        
                    </section>
                    <section class="skills">
                        <h3>Skills</h3>
                        <textarea class="textarea" name="skills" wrap="soft" ><?= $up['skills']?> 
                        </textarea>
                    </section>
                </div>
            </aside>
            <div class="main">
                <div class="conteiner">
                    <div class="conteiner__wrapper">
                        <input class="input" name="name" type="text" placeholder=" Your Name" value="<?= $up['name']?>"><br>

                        <h3>web developer</h3>
                                    
            <button>Сохранить	изменения</button><br>
                    </div>
                    
                </div>
                <section class="p">
                    <h3 class="hist">Profile</h3>
                    <textarea class="textarea" name="profile" wrap="soft"><?= $up['profile']?>
                    </textarea>
                </section>
                <section class="p">
                    <h3 class="hist">Professional experiance</h3>
                    <textarea class="textarea" name="proexp" wrap="soft"><?= $up['proexp']?>
                    </textarea>
                </section>
            </div>
            <script>
                $('.mask-phone').mask('+38 (099) 999-99-99'); 
            </script>
            <?php
        if($_SESSION['Message']){
            echo    ' <p  class="msg">'   .  $_SESSION['Message']    .'</p> ';
        }
        unset($_SESSION['Message']);
        ?> 
        </form>
</div>
</body>
</html>