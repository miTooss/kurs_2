<?php
function good()
{
    global $id;
    $connect = mysqli_connect('localhost', 'mitos', 'D6i2no5tQk0CvKEh', 'betakurs');
    $goods = mysqli_query($connect, "SELECT * FROM `goods` where `idg`='$id'");
    $infgood = mysqli_fetch_assoc($goods); ?>


    <div class="good">
        <a href='pageofgood.php? id=<?= $id ?>'>
            <img src="<?= $infgood[photo] ?>" width="100%" height="100%">
            <div class="goodinfo">
                <div style=" text-align:center; padding:10%;">
                    <?= $infgood[name] ?>
                </div>
                <div style="">
                    <?= $infgood[price] ?> Руб.
                </div>
            </div>
        </a>
    </div>
<?
}
?>