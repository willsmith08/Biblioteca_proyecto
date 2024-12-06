const menu = document.querySelector('.menuaLogoUsuario');
const boton = document.querySelector('.logoUsuario');


boton.addEventListener('click', function () {

    if (getComputedStyle(menu).display === "flex") {
        menu.style.cssText = "display: none";
    } else {
        menu.style.cssText = "top: 90px; display: flex";
    }

});


document.addEventListener('click', function (event) {

    if (!menu.contains(event.target) && !boton.contains(event.target)) {
        menu.style.cssText = "display: none"; 
    }
    
});
