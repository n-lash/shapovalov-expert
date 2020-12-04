const burgerMenu = document.getElementById('burgerMenu');
const mobileMenuList = document.getElementById('mobileMenuList');

burgerMenu.addEventListener('click', () => {
    burgerMenu.classList.toggle('active');
    mobileMenuList.classList.toggle('active');
});
