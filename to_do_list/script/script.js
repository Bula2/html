const toDoItems =  document.getElementsByClassName("to-do-items")[0];
const input = document.getElementById("input");

input.addEventListener("keydown", function (event){
    if(event.key === "Enter"){
        addItem();
    }
})

function addItem(){
    let divParent = document.createElement("div");
    let divChild = document.createElement("div");
    let checkIcon = document.createElement("i");
    let trashIcon = document.createElement("i");

    divParent.className= "item";
    divParent.innerHTML = "<div>"+input.value+"</div>";

    checkIcon.className = "fa-solid fa-circle-check";
    checkIcon.style.color = "lightgrey";
    checkIcon.addEventListener("click", function (){
        if (checkIcon.style.color === "limegreen") {
            checkIcon.style.color = "lightgrey";
            divParent.childNodes[0].style.color = "#121313";
        }
        else {
            checkIcon.style.color = "limegreen";
            divParent.childNodes[0].style.color = "limegreen";
        }
    })

    divChild.appendChild(checkIcon);

    trashIcon.className = "fa-solid fa-trash";
    checkIcon.style.color ="darkgrey";
    trashIcon.addEventListener("click", function (){
        divParent.remove();
    })

    divChild.appendChild(trashIcon);
    divParent.appendChild(divChild);
    toDoItems.appendChild(divParent);

    input.value="";
}