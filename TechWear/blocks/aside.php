<aside>
    <div id="products">
        <h2 class="heading">Ассортимент</h2>
        <div style="clear: both"><br></div>

        <!--Ассортимент-->

        <?php
        for ($i = 0; $i < 3; $i++)
            echo '<div class="product">
                                        <img src="img/coat.png" alt="style" title="style">
                                        <span>Куртка Dark Blue XS/S/M/L/XL/XXL 600$</span>
                                    </div><div style="clear: both"><br></div>'
        ?>
        <a href="" title="Посмотреть больше">
            <div class="btn_body">
                Посмотреть больше
            </div>
        </a>
    </div>
    <div id="one_product">
        <h2 class="heading">Заказать уникальный дизайн</h2>
        <div style="clear: both"><br></div>
        <img src="img/order.jpg" alt="style" title="style">
        <input type="button" class="order-button" value="Заказать">
    </div>
</aside>
