function googleTranslateElementInit() {
    new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'es,zh-CN,hr,tl,de,el,hi,it,mk,pl,sr,tr,vi'}, 'google_translate_element');
}

jQuery(document).ready(function($){
    $('.triggerSearch').on('click', function(e){
        e.preventDefault();
        $('.searchContainer').stop().slideToggle();
    });
    $('.closeSearch').on('click', function() {
        $('.searchContainer').slideUp();
    })
});