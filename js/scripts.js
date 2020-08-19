import "../css/main.css"
console.log('działa');

//menu navigation mobile
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

//sideabar

const sidebarYear = document.querySelector('.sidebar__title--year');
const sidebarMonths = document.querySelectorAll('.sidebar__title--month');
const sidebarTitles = document.querySelectorAll('.sidebar__title--post');

console.log(sidebarYear, sidebarMonths, sidebarTitles);

sidebarYear.addEventListener('click', () => {
    console.log('year2020');
    sidebarMonths.forEach((sidebarMonth)=>{
        sidebarMonth.classList.toggle('sidebar__none');
    })
    // if(sidebarTitle.className!='sidebar__none'){
    //     console.log('title');
    //     sidebarTitle.classList.add('sidebar__none');
    // }
})
sidebarMonths.forEach((sidebarMonth)=>{
    sidebarMonth.addEventListener('click', () => {
        console.log(sidebarMonth.textContent);
        sidebarTitles.forEach((sidebarTitle)=>{
            sidebarTitle.classList.toggle('sidebar__none');
            console.log(sidebarTitle.textContent);
        })
    })
});
