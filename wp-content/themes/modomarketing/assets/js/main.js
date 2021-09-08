var buttonOpenMenu = document.getElementById('mm-open-menu')
var buttonCloseMenu = document.getElementById('mm-close-menu')
var menu = document.getElementById('mm-mobile-menu')

buttonOpenMenu.addEventListener("click", function () {
    menu.style.display = "block"
})

buttonCloseMenu.addEventListener("click", function () {
    menu.style.display = "none"
})

