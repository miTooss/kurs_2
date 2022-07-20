<?php
session_start();

?>

<!doctype html>
<html>
    <head>
    <meta charset="UTF-8">
    <title>Главная страница</title>
    <link rel="stylesheet" href="assets/main1.css">
    </head>
    <body>


    <header class="header">
        <div class="login">
            <div class="log">
                <a href="reg.php" style ="color:white;">
                    <?=$_SESSION['user']['login']?>
                </a>
            </div>
            <div class="reg">
                <a href="reg.php">
                    <img src ="uploads/note.svg" width ="27px" height="27px">
                </a>
            </div>
        </div>  
        <div class="top_header">

            <div class="inffaq">
                <div class="faq">
                    <img src ="uploads/pin.svg" width ="6%" height="30%">
                    <a>Адрес: Москва </a>
                </div>
                <a href ="index.php">
                <div class="logo">
                    wont.t.b.
                </div>
                </a>
                <div class ="faq">
                    <img src ="uploads/phone-call.svg" width ="6%" height="30%">
                    <a>Тел:8-939-492-76-37</a>
                </div>
            </div>
        </div>
        <div class="faqhead">
            <div class="faqic">
                <div class="nav">
                    <img src= "uploads/tik-tok.svg" width="6%" height="27px">
                    <img src= "uploads/instagram.svg" width="6%" height="27px">
                    <img src= "uploads/vk.svg" width="6%" height="27px">
                    <img src= "uploads/twitter.svg" width="6%" height="27px">
                </div>
                <div class="nav">
                    <div id="about">about</div>
                    <img src= "uploads/faq.svg" width="25%" height="27px">
                </div>
                <?
                        if ($_SESSION['user']['role']==1){
                            $adm = '<img src= "uploads/settings.svg" width="100%" height="27px">';?>
                            <a href="formgood.php"><div class="setting"><?echo $adm;?></div></a><?
                        }else{

                        }
                    ?>
            </div> 
        </div>
        <div class="men">
            <a href ="#">Коллекции</a>
            <a href ="#">Футболки</a>
            <a href ="#">Наклейки</a>
            <a href ="#">Кружки</a>
            <a href ="#">Аксессуары</a>
        </div> 
    </header>
    <div class="gogo">
        <?include_once 'goods.php';?>
    </div>
    
    <div class="footer">
        <div class ="botfaq">
            <div class ="logotip">
            <a href ="index.php">
                <div class="logo" >
                    wont.t.b.
                </div>
                    </a>
                <div style = "color:white; font-size:110%; margin-left: 10%;">
                    wont.t.b.©
                </div>
            </div>
            <div class="botfaq2">
                <a href ="#">О нас</a>
                <a href ="#">Контакты</a>
                <a href ="#">Адрес</a>
                <a href ="#">Новости</a>
                <a href ="#">Главная</a>
            </div>
        </div>
    </div>

    </body>
</html>