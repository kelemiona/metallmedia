// 'use strict';

// document.addEventListener('DOMContentLoaded', () => { 

//     const leftMenu = document.querySelector('.left-menu');
//     const products =[...document.getElementsByClassName('product-card')];

//     leftMenu.addEventListener('click', (event) => {
//         for (let i=0; i<products.length; i++) {
//             if (event.target.classList.contains('all-products')) {
//                 products.forEach((item,index,array )=>{
//                     item.style.display = 'block';
//                 })
//             }
//             if (products[i].classList.contains(event.target.classList[0])) {
//                 products[i].style.display = 'block';
//             } else {
//                 products[i].style.display = 'none';
//             }
//         }
//     });
// })