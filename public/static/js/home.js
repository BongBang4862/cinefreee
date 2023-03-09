let header = document.querySelector('header');
let navbar = document.querySelector('.navbar');
let menu = document.querySelector('#menu-icon');

window.addEventListener('scroll', ()=>{
  header.classList.toggle('shadow', window.scrollY > 0);
});

menu.onclick = ()=>{
  menu.classList.toggle('bx-x')
  navbar.classList.toggle('active')
}

window.onscroll = ()=>{
  menu.classList.remove('bx-x')
  navbar.classList.remove('active')
} 
var swiper = new Swiper(".home", {
      spaceBetween: 30,
      centeredSlides: true,
      autoplay: {
        delay: 5000,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      
    });

var swiper = new Swiper(".comming-container", {
  spaceBetween: 10,
  autoplay: {
    delay: 5000,
    disableOnInteraction: false,
  },
  breakpoints: {
    640: {
      slidesPerView: 2,
    },
    768: {
      slidesPerView: 4,
    },
    1024: {
      slidesPerView: 5,
    },
  },
});