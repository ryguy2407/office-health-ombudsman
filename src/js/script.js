jQuery(document).ready(function(){
    $('.accordionTrigger').on('click', function(){
        $(this).toggleClass('open');
        if($(this).hasClass('open')) {
            $(this).attr('aria-expanded', true);
        } else {
            $(this).attr('aria-expanded', false);
        }
        $(this).find('img').toggleClass('rotate-90');
        $(this).next('.panel').slideToggle();
    });

    $('.hamburger').on('click', function(){
        $(this).toggleClass('is-active');

        $('.mobileNav').slideToggle();
    });
});