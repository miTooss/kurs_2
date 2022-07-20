<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Страница с товарами </title>
    <link rel="stylesheet" href="assets/main1.css">
</head>
<body>
    <form action = "fgood.php" method = "post" enctype="multipart/form-data">
        <label>Наименование товара</label>
        <input type="text" name="name" placeholder="Введите наименование товара">
        <label>Цвет</label>
        <input type="text" name="color" placeholder="Введите цвет">
        <label>Изображение товара</label>
        <input type="file" name="avatar">
        <label>Размер</label>
        <input type="text" name="size" placeholder="Введите рамер">
        <label>Цена</label>
        <input type="text" name="price" placeholder="Введите цену">
        <button type="submit">Войти</button> 
</form>

</body>
<hyml>