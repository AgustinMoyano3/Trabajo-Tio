"use strict";


let itemsNav = document.querySelector(".itemsNav");
let btnMenu = document.querySelector('#btnMenu');

btnMenu.addEventListener("click", function(){
    itemsNav.classList.toggle("show");
})