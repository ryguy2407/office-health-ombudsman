jQuery(document).ready(function(){
    $('div.accordionTrigger').on('click', function(){
        $(this).find('img').toggleClass('rotate-90');
        $(this).next('.panel').slideToggle();
    });

    $('.hamburger').on('click', function(){
        $(this).toggleClass('is-active');

        $('.mobileNav').slideToggle();
    });
});