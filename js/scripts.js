import "../css/main.css"

//menu navigation mobile
const burger = document.querySelector('.menu-hamburger');
const navList = document.querySelector('.main-menu');
const menuItems = document.querySelectorAll('.main-menu__menu-item');
const lines = document.querySelectorAll('.menu-hamburger div')

const line1 = document.querySelector(".main-nav .menu-hamburger__line:first-child.toggle");


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


//sideabar
const sidebarYears = document.querySelectorAll('.sidebar__year');
const sidebarMonths = document.querySelectorAll('.sidebar__archlist>li:not(.sidebar__year)');

// sidebarMonths.forEach((month)=>{
//     console.log(month);
// })
sidebarMonths.forEach(month=>month.classList.add('sidebar__none'));
sidebarYears.forEach((year)=>{
    year.addEventListener('click', ()=>{
        sidebarMonths.forEach((month)=>{
            console.log(month);
            month.classList.toggle('sidebar__none');
        });
    })
})

//share icons 

const shareIcon = document.querySelector('h3.sd-title');

shareIcon.innerHTML = '<i class="fas fa-share-alt"></i>';