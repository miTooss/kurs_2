
        <?php
        $id = 0;
        include_once 'pagesscript.php';
        $connect = mysqli_connect('localhost', 'mitos', 'D6i2no5tQk0CvKEh', 'betakurs');
        require_once('vendor/connect.php');
        $count = mysqli_query($connect, "SELECT MAX(idg) FROM `goods`");
        $countgoods = mysqli_fetch_assoc($count); ?>
            <?
            while ($id <= $countgoods["MAX(idg)"]) {
                $prov = mysqli_query($connect, "SELECT `idg` from `goods` where exists(select `idg` from `goods` where `idg`='$id' )");
                $provarr = mysqli_fetch_assoc($prov);
                if ($provarr["idg"] == 1) {
            ?><? good(); ?><?
                                    $id = $id + 1;
                                } else {
                                    $id = $id + 1;
                                }
                            }
                                    ?>
        
 