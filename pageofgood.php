<html>
    <head>
    <link rel="stylesheet" href="assets/good.css">
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
        include 'header.php';
        $idel=$_GET['id'];
        $idel=htmlspecialchars($idel);

        $connect = mysqli_connect('localhost', 'root', '', 'betakurs');
        $goods = mysqli_query($connect, "SELECT * FROM `goods` where `idg`='$idel'");
        $infgood = mysqli_fetch_assoc($goods);?>

        <div class="goodpage">
            <div class= "goodimg">
                <img src = "<?=$infgood[photo]?>" style ="width:100%; height:100%;">
            </div>

            <div class="goodinf">
                <div>
                    <div style=" font-size:200%; font-weight:700; text-align:center;">
                    <?=$infgood['name'] ?>
                    </div>
                    <div style="font-size:150%; font-weight:600; text-align:center;">
                    <?=$infgood['mark']?>
                    </div>
                    <div style="margin-top:25%;">
                    Материал:  <?=$infgood['material']?>
                    </div>
                    <div style="">
                    Вид:  <?=$infgood['type_of_goods']?>
                    </div>

                    <div style="">
                    Цена:  <?=$infgood['price']?>  Руб.
                    </div>
                    <div style="">
                    Размер:  <?=$infgood['size']?>  EU
                    </div >
                    <a href="bascket.php? id=<?=$idel?>">
                    <div class="butbas">
                        <input type="button" class="button" value="Добавить в корзину">
                    </div>
                    </a>
                </div>
            </div>

        </div>


        
       
        
</body>
</html>