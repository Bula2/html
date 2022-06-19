//Появление корзины

function basketDrop() {
    document.getElementById("myDropdown").classList.toggle("show");
}

window.onclick = function(event) {
    if (!event.target.matches(".not-close-basket")) {
        let dropdown = document.getElementById("myDropdown");
        if (dropdown.classList.contains('show')) {
            dropdown.classList.remove('show');
        }
    }
}

//Добавление продукта в корзину

function addToOrder(text, num){
    let basket = document.getElementById("elem_in_order");
    // Удаление текущего элемента из корзины
    basket.onclick = function (event){
        let target = event.target;
        if (target.tagName === "BUTTON"){
           target.parentNode.parentNode.remove();
        }
    }

    let order_div = document.createElement("div"); //div внутри li
    let curr_el = document.createElement("li"); // заказ добавленный в корзину
    let del_cur_order = document.createElement("button"); // кнопка удаления текущего элемента в заказе (внутри div)
    order_div.innerHTML=text;
    del_cur_order.innerHTML = "Убрать";
    curr_el.classList.add("curr_el", "not-close-basket");
    del_cur_order.classList.add("del_cur_order", "not-close-basket");
    order_div.classList.add("not-close-basket");
    order_div.insertAdjacentElement('beforeend', del_cur_order);
    order_div.style ="display: inline-block";
    curr_el.insertAdjacentElement('beforeend', order_div);
    basket.append(curr_el);
    let addSuccess = document.getElementsByClassName('addSuccess');
    addSuccess[num].style = "display: block";
    setTimeout(function () {
        addSuccess[num].style = "display: none";
    }, 2000);
}


//Удаление/Заказ блюд из корзины

function basketClean(){
    let basket = document.getElementById("elem_in_order");
    basket.innerText = '';
}

function basketOrder(){
    let basket = document.getElementById("elem_in_order");
    let curr_el = document.createElement('p');
    curr_el.innerHTML = "Ваш заказ создан. Спасибо!";
    curr_el.style = "margin: auto";
    basket.innerHTML = "";
    basket.insertAdjacentElement('afterbegin', curr_el);
    setTimeout(function (){
        basket.innerHTML="";
    }, 2000);
}

//Прокрутка вверх
function toTop(){
    let scrolled = window.pageYOffset;
    let timer;
    scrollToTop();
    function scrollToTop() {
        if (scrolled > 0) {
            window.scrollTo(0, scrolled);
            scrolled = scrolled - 100;
            timer = setTimeout(scrollToTop, 40);
        }
        else{
            clearTimeout(timer);
            window.scrollTo(0,0);
        }
    }
}

