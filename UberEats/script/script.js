//Появление корзины

function basketDrop() {
    document.getElementById("myDropdown").classList.toggle("show");
}

window.onclick = function(event) {
    if (!event.target.matches(".basket") && !event.target.matches(".dropdown-basket")
        && !event.target.matches(".clean_or_order>button")
        && !event.target.matches(".dropdown-basket>h3")
        && !event.target.matches(".dropdown-basket>ul>li")) {
        let dropdown = document.getElementById("myDropdown");
        if (dropdown.classList.contains('show')) {
            dropdown.classList.remove('show');
        }
    }
}

//Добавление продукта в корзину

function addToOrder(text, num){
    let basket = document.getElementById("elem_in_order");
    let curr_el = document.createElement('li');
    curr_el.innerHTML = text;
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

