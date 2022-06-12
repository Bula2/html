<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Уникальный дизайн / TechWear</title>
    <link rel="stylesheet" href="style/main.css">
    <link rel="stylesheet" href="style/aside.css">
    <meta name="description" content="одежда">
    <meta name="keywords" content="одежда, техвир, techwear">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="img/1.png" rel="shortcut icon" type="image/x-icon">
    <link rel="stylesheet" href="style/all.min.css">
</head>
<body>

<div id="wrapper">
    <div id="content">
        <?
        require_once "blocks/header.php"
        ?>

        <div id="main">
            <div id="news">
                <h2 class="heading">Уникальный дизайн</h2>
                <div style="clear: both"><br></div>
                <div class="uniq-block">
                    <strong>Создай своё будущее сам</strong>
                    <div style="clear: both"><br></div>
                    <ul>
                        <li><span>Выбери свой аксессуар или одежду</span></li>
                        <li><span>Задай ей свой цвет и уникальный образ</span></li>
                        <li><span>Выбери нужные тебе тех-добавки</span></li>
                        <li><span>Не забудь подобрать размер</span></li>
                    </ul>
                    <input class="order-button" type="button" value="Заказать">
                </div>
            </div>
        </div>

        <?
        require_once "blocks/aside.php"
        ?>

        <div style="clear: both"><br></div>
        <div class="end-main"><img src="img/end_main.png" alt="end"></div>

    </div>


    <?
    require_once "blocks/footer.php"
    ?>
</div>
<!--jQuerry-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
