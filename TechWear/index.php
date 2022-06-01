<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TechWear</title>
    <link rel="stylesheet" href="style/main.css">
    <link rel="stylesheet" href="style/main-page.css">
    <meta name="description" content="секрет">
    <meta name="keywords" content="секрет, тайна, сайт">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="img/1.png" rel="shortcut icon" type="image/x-icon">
    <link rel="stylesheet" href="style/all.min.css">
</head>
<body>

    <div id="wrapper">
        <div id="content">
            <header>
                <div id="logo">
                    <a href="index.php" title="На главную">
                        <img src="img/1.png" alt="TW" title="Making the future comfortable">
                        <span id="logo_span_1">TechWear<span>
                    </a>
                </div>
                <div id="about">
                    <a href="" title="Узнать подробнее">Уникальный дизайн</a>
                    <a href="" title="Написать нам">Обратная связь</a>
                </div>
                <div id="reg_auth">
                    <a href="" title="Войти">
                        <div class="btn">
                            Вход
                        </div>
                    </a>
                    <a href="" title="Зарегестрироваться">
                        <div class="btn">
                            Регистрация
                        </div>
                    </a>
                </div>
            </header>

            <nav>
                <div id="menu-show">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </div>
                <div id="menu-hide">
                    <a href="#">Новинки</a>
                    <a href="#">Классика жанра</a>
                    <a href="#">Уникальный дизайн</a>
                    <a href="#">Отзывы покупателей</a>
                    <a href="#">Просто тык</a>
                </div>
                <div class="search">
                    <span>Поиск</span>
                    <i class="fa fa-search" aria-hidden="true"></i>
                </div>

                <div id="mobile-menu">
                    <a href="#">Новинки</a><br>
                    <a href="#">Классика жанра</a><br>
                    <a href="#">Уникальный дизайн</a><br>
                    <a href="#">Отзывы покупателей</a><br>
                    <a href="#">Просто тык</a><br>
                    <hr>
                    <a href="#">Регистрация</a><br>
                    <a href="#">Войти</a><br>
                </div>
            </nav>

            <div id="main">
                <div id="news">
                    <h2 class="heading">Новости</h2>
                    <div style="clear: both"><br></div>

                    <!--Статья-->

                    <?php
                        for($i=0; $i<6; $i++)
                            echo'<div class="article">
                                    <img src="img/style.jpg" alt="style" title="style">
                                    <span>Techwear – это одежда будущего для повседневной жизни</span>
                                </div>'
                    ?>
                    <a href="" title="Посмотреть больше">
                        <div class="btn">
                            Посмотреть больше
                        </div>
                    </a>
                </div>
            </div>
            <aside>
                <div id="products">
                    <h2 class="heading">Ассортимент</h2>
                    <div style="clear: both"><br></div>

                    <!--Ассортимент-->

                    <?php
                    for($i=0; $i<3; $i++)
                        echo'<div class="product">
                                        <img src="img/coat.png" alt="style" title="style">
                                        <span>Куртка Dark Blue XS/S/M/L/XL/XXL 600$</span>
                                    </div><div style="clear: both"><br></div>'
                    ?>
                    <a href="" title="Посмотреть больше">
                        <div class="btn">
                            Посмотреть больше
                        </div>
                    </a>
                </div>
                <div id="one_product">
                    <h2 class="heading">Заказать уникальный дизайн</h2>
                    <div style="clear: both"><br></div>
                    <img src="img/order.jpg" alt="style" title="style">
                </div>
            </aside>
            <div style="clear: both"><br></div>
        </div>


        <footer>
            <div id="site_name">
                <a href="#">Making the future comfortable</a>
            </div>
            <div id="clear">
            <div id="footer_menu">
                <a href="" title="Заказать уникальный дизан">Твой выбор</a>
                <a href="" title="Оставить отзыв">Обратная связь</a>
            </div>
            <div id="rights">
                <a href="">Все права защищены &copy; <?php echo date("Y"); ?></a>
            </div>
            <div>
                <a href="" title="Vk"><i class="fa-brands fa-vk"></i></a>
                <a href="" title="Telegram"><i class="fa-brands fa-telegram"></i></a>
                <a href="" title="Instagram"><i class="fa-brands fa-instagram"></i></a>
            </div>
            </div>
        </footer>
    </div>
    <!--jQuerry-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script>
        $("#menu-show").click (function (){
            if ($("#mobile-menu").is(":visible"))
                $("#mobile-menu").hide();
            else
                $("#mobile-menu").show();
        });

        $(document).scroll (function (){ // Временно не работает
            if($(document).width () > 785) {
                if ($(document).scrollTop() > $("header").height () + 10)
                    $('nav').addClass('fixed');
                else
                    $('nav').removeClass('fixed');
            }
        });

        window.onresize = function (event){
            $("#mobile-menu").hide();
        }
    </script>
</body>
</html>
