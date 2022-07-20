<?php
session_start();
?>
<html>
    <head>
    <link rel="stylesheet" href="assets/good.css">
        <meta charset="UTF-8">
    </head>
    <body>
        <?

            include 'header.php';
            include 'vendor/connect.php';

            $idel=$_GET['id'];
            $idel=htmlspecialchars($idel);
            $idu=$_SESSION['user']['id']
        ?>

        <div>
        idu:  <?=$_SESSION['user']['id']." "?>
        </div>
        <div>
        idg:  <?=$idel?>
        </div>
        <?
        $sql= "SELECT users.idu FROM `users` JOIN `backet` ON `users.idu` = `backet.idu`";
        $carp = mysqli_query($connect,$sql);
    
        print_r($result);


    ?>
    </body>
</html>