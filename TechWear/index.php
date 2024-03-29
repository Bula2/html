<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TechWear</title>
    <link rel="stylesheet" href="style/main.css">
    <link rel="stylesheet" href="style/main-page.css">
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
                <h2 class="heading">Новости</h2>
                <div style="clear: both"><br></div>

                <!--Статья-->

                <?php
                for ($i = 0; $i < 6; $i++)
                    echo '<div class="article">
                                    <img src="img/style.jpg" alt="style" title="style">
                                    <span>Techwear – это одежда будущего для повседневной жизни</span>
                                </div>'
                ?>
                <a href="" title="Посмотреть больше">
                    <div class="btn_body">
                        Посмотреть больше
                    </div>
                </a>
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
