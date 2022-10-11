// Burger menu
const burgermenu = document.getElementById('burgerMenu');
const displayBurgerMenu = document.querySelector('.burger');
const displayCrossMenu = document.querySelector('.cross');


const userActuality = document.querySelector('.user-actuality');


burgermenu.addEventListener('click', () => {
    userActuality.classList.toggle('categoriesDisplay');
    displayBurgerMenu.classList.toggle('displayBurgerMenu');
    displayCrossMenu.classList.toggle('displayCrossMenu');
});
