const menuIconEl = document.querySelector('.menu-icon');
const sidenavEl = document.querySelector('.sidenav');
const sidenavCloseEl = document.querySelector('.sidenav__close-icon');


// Open the side nav on click
menuIconEl.addEventListener('click', function () {
  sidenavEl.classList.add('active');

});
sidenavCloseEl.addEventListener('click', function () {
  sidenavEl.classList.remove('active');
});
