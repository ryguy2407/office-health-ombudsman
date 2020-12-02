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

    $('a#expandall').on('click', function(e){
        e.preventDefault();

        var expandText = $(this).find('span.text').html();

        console.log(expandText);

        if(expandText === 'Expand all +') {
            $(this).children('span.text').text('Collapse all -');
        } else {
            $(this).children('span.text').text('Expand all +');
        }

        $('div.accordion').children('.accordionTrigger').each(function(){
            $(this).trigger('click');
        });
    });

    $('.hamburger').on('click', function(){
        $(this).toggleClass('is-active');

        $('.mobileNav').slideToggle();
    });
});