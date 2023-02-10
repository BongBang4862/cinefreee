const toggle = document.querySelector('.toggle');
const menu_dashboard = document.querySelector('.menu-dashboard');
const icono_menu = document.querySelector('i');
const enlacesMenu = document.querySelectorAll('.enlace');

toggle.addEventListener('click', function () {
    menu_dashboard.classList.toggle("open");

    if (icono_menu.classList.contains('fa-toggle-on')) {
        icono_menu.classList.replace('fa-toggle-on','fa-toggle-off')
    }else{
        icono_menu.classList.replace('fa-toggle-off','fa-toggle-on')
    }
})


enlacesMenu.forEach(enlacesMenu => {
    enlacesMenu.addEventListener('click',()=>{
        menu_dashboard.classList.add('open')
    })
})