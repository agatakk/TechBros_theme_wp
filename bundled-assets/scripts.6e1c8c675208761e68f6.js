!function(e){var t={};function n(o){if(t[o])return t[o].exports;var r=t[o]={i:o,l:!1,exports:{}};return e[o].call(r.exports,r,r.exports,n),r.l=!0,r.exports}n.m=e,n.c=t,n.d=function(e,t,o){n.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:o})},n.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},n.t=function(e,t){if(1&t&&(e=n(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var o=Object.create(null);if(n.r(o),Object.defineProperty(o,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var r in e)n.d(o,r,function(t){return e[t]}.bind(null,r));return o},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p="/wp-content/themes/TechBros-theme/bundled-assets/",n(n.s=0)}([function(e,t,n){"use strict";n.r(t);n(1);console.log("działa");const o=document.querySelector(".menu-hamburger"),r=document.querySelector(".main-menu"),l=document.querySelectorAll(".main-menu__menu-item"),c=document.querySelectorAll(".menu-hamburger div");document.querySelector(".main-nav .menu-hamburger__line:first-child.toggle");console.log(c);o.addEventListener("click",(function(){r.classList.toggle("nav-active"),console.log("click"),l.forEach((e,t)=>{e.style.animation?e.style.animation="":e.style.animation=`navLinksFade .3s ease forwards ${t/7+.3}s`}),c.forEach(e=>{e.classList.toggle("toggle")})}));const a=document.querySelectorAll(".sidebar__year"),i=document.querySelectorAll(".sidebar__archlist>li:not(.sidebar__year)");i.forEach(e=>e.classList.add("sidebar__none")),a.forEach(e=>{e.addEventListener("click",()=>{i.forEach(e=>{console.log(e),e.classList.toggle("sidebar__none")})})});const u=document.querySelector("h3.sd-title");console.log(u.textContent),u.innerHTML='<i class="fas fa-share-alt"></i>'},function(e,t,n){}]);