jQuery(document).ready(function(){
    $('div.accordionTrigger').on('click', function(){
        $(this).find('img').toggleClass('rotate-90');
        $(this).next('.panel').slideToggle();
    });
});