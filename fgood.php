<?php
    $name=$_POST['name'];
    $color=$_POST['color'];
    $avatar=$_POST['avatar'];
    $size=$_POST['size'];
    $price=$_POST['price'];

    var_dump ($_POST);

    require_once 'vendor/connect.php';
    $sql= "INSERT INTO `goods` (good, color, size, photo, price) VALUES
    ('$name','$color','$size','$avatar','$price') ";

    $result = mysqli_query($connect , $sql) or die("Ошибка " . mysqli_error($connect)); 
    if($result)
    {
        echo "<span style='color:blue;'>Данные добавлены</span>";
    }
    // закрываем подключение
    mysqli_close($connect);

?>