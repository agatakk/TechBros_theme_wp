import "../css/main.css"
console.log('działa');
const burger = document.querySelector('.menu-hamburger');
const navList = document.querySelector('.main-menu');
const menuItems = document.querySelectorAll('.main-menu__menu-item');
const lines = document.querySelectorAll('.menu-hamburger div')

const line1 = document.querySelector(".main-nav .menu-hamburger__line:first-child.toggle");



console.log(lines);


const navSlideIn = function(){
    navList.classList.toggle('nav-active');
    console.log('click');
    menuItems.forEach((link, index)=>{
        if(link.style.animation){
            link.style.animation = '';
        }else{
            link.style.animation = `navLinksFade .3s ease forwards ${index / 7 + 0.3}s`;

        }
    })
    lines.forEach(line=>{
        line.classList.toggle('toggle');
    })
}

burger.addEventListener('click', navSlideIn);
console.log(line1);