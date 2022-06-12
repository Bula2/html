<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Обратная связь / TechWear</title>
    <link rel="stylesheet" href="style/main.css">
    <link rel="stylesheet" href="style/aside.css">
    <link rel="stylesheet" href="style/form.css">
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
                <h2 class="heading">Обратная связь</h2>
                <div style="clear: both"><br></div>
                <div class="feedback">
                    <strong>Чтобы отправить нам сообщение, заполните форму ниже:</strong>
                    <form>
                        <div>
                            <input type="text" id="name" placeholder="Имя" onclick="$(this).css('border-color', '#171616')">
                            <input type="email" id="email" placeholder="Электронная почта" onclick="$(this).css('border-color', '#171616')">
                        </div>
                        <div>
                            <textarea id="message" placeholder="Сообщение" onclick="$(this).css('border-color', '#171616')"></textarea>
                        </div>
                        <input type="button" class="order-button" id="send" value="Отправить">
                    </form>
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
<script src="js/form.js"></script>
</body>
</html>
