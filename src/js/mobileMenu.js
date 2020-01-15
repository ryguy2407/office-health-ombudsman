var menu = document.getElementById('js-mobileMenu');
var menuTrigger = document.getElementById('js-mobileMenuTrigger'); // or whatever triggers the toggle

menuTrigger.addEventListener('click', function (e) {
  e.preventDefault();
  menu.classList.toggle('block');
  menu.classList.toggle('hidden'); // or whatever your active class is
});