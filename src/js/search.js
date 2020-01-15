var element = document.getElementById('js-searchContainer');
var trigger = document.getElementById('js-searchIcon'); // or whatever triggers the toggle
var close = document.getElementById('js-searchClose'); // or whatever triggers the toggle

trigger.addEventListener('click', function (e) {
    e.preventDefault();
    element.classList.toggle('h-screen');
    document.getElementById('search').focus();
});

close.addEventListener('click', function (e) {
    e.preventDefault();
    element.classList.toggle('h-screen');
});