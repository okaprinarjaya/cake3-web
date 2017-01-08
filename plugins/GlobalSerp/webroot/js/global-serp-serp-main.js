$(window).load(function() {
    
    $("img.lazy").lazyload();
    
    $(".carousel-container").show();

    $(".gts-listing .carousel-container").jCarouselLite({
        btnNext: ".gts-listing .carousel-paging .right-trigger",
        btnPrev: ".gts-listing .carousel-paging .left-trigger",
        visible: 1
    });

    $(".newlaunch-listing-1 .carousel-container").jCarouselLite({
        btnNext: ".newlaunch-listing-1 .carousel-paging .right-trigger",
        btnPrev: ".newlaunch-listing-1 .carousel-paging .left-trigger",
        visible: 1
    });

    $(".newlaunch-listing-2 .carousel-container").jCarouselLite({
        btnNext: ".newlaunch-listing-2 .carousel-paging .right-trigger",
        btnPrev: ".newlaunch-listing-2 .carousel-paging .left-trigger",
        visible: 1
    });

    $(".area-specialist-widget .carousel-container").jCarouselLite({
        btnNext: ".area-specialist-widget .carousel-paging .right-trigger",
        btnPrev: ".area-specialist-widget .carousel-paging .left-trigger",
        visible: 1
    });

    if ($(window).width() <= 767) {
        $('.main-filter div.form-group').removeClass('pull-right'); 
        $('.main-filter div.form-group:last').addClass('text-right');

    } else {
        $('.main-filter div.form-group').removeClass('text-right');
        $('.main-filter div.form-group:last').addClass('pull-right');
    }


});

$(window).resize(function() {
    if ($(window).width() <= 767) {
        $('.main-filter div.form-group').removeClass('pull-right');
        $('.main-filter div.form-group:last').addClass('text-right');

    } else {
        $('.main-filter div.form-group').removeClass('text-right');
        $('.main-filter div.form-group:last').addClass('pull-right');
    }
});

$(window).scroll(function () {
    scrOfY = 0;

    if (typeof(window.pageYOffset ) == "number") {
        scrOfY = window.pageYOffset;

    } else if(document.body && ( document.body.scrollLeft || document.body.scrollTop ) ) {
        scrOfY = document.body.scrollTop;

    } else if(document.documentElement && ( document.documentElement.scrollLeft || document.documentElement.scrollTop)) {
        scrOfY = document.documentElement.scrollTop;
    }

    if (scrOfY >= $('.property-news-widget').offset().top) {
        $('.scrollToTop').fadeIn();

    } else {
        $('.scrollToTop').fadeOut();
    }
});


var format = function(num) {
    var str = num.toString(), parts = null, output = [], i = 1, formatted = null, len = 0;

    if (str.indexOf(".") > 0) {
        var parts = str.split(".");
        str = parts[0];
    }

    str = str.split("").reverse();

    for(var j = 0, len = str.length; j < len; j++) {
        if (str[j] != ",") {
            output.push(str[j]);
            
            if (i%3 == 0 && j < (len - 1)) {
                output.push(",");
            }

            i++;
        }
    }

    var formatted = output.reverse().join("");
    return(formatted + ((parts) ? "." + parts[1].substr(0, 2) : ""));
};

$(document).ready(function(){

    $('.scrollToTop').hide();

    $('.scrollToTop').click(function() {
        $('html, body').animate({scrollTop : 0},800);
        return false;
    });

    /* Keyup for input */
    $(".minimum-landsize").keyup(function(e) {
        $(this).val(format($(this).val()));
        $('.label-clear-landsize').hide();
        $('.label-max-landsize').text(" - " + $('.maximum-landsize').val()).css('display','inline');
        $('.label-min-landsize').text($(this).val()).css('display','inline');
    });

    $(".maximum-landsize").keyup(function(e){
        $(this).val(format($(this).val()));
        $('.label-clear-landsize').hide();
        $('.label-min-landsize').text($('.minimum-landsize').val()).css('display','inline');
        $('.label-max-landsize').text(" - " + $(this).val()).css('display','inline');
    });

    /* Keyup for input */
    $(".minimum-buidlingsize").keyup(function(e){
        $(this).val(format($(this).val()));
        $('.label-clear-buidlingsize').hide();
        $('.label-max-buidlingsize').text(" - " + $('.maximum-buidlingsize').val()).css('display','inline');
        $('.label-min-buidlingsize').text($(this).val()).css('display','inline');
    });

    $(".maximum-landsize").keyup(function(e){
        $(this).val(format($(this).val()));
        $('.label-clear-landsize').hide();
        $('.label-min-landsize').text($('.minimum-landsize').val()).css('display','inline');
        $('.label-max-landsize').text(" - " + $(this).val()).css('display','inline');
    });

    /* Keyup for input */
    $(".minimum-price").keyup(function(e) {
        $(this).val(format($(this).val()));
        $('.label-clear-price').hide();
        $('.label-max-price').text(" - " + $('.maximum-price').val()).css('display','inline');
        $('.label-min-price').text($(this).val()).css('display','inline');
    });

    $(".maximum-price").keyup(function(e) {
        $(this).val(format($(this).val()));
        $('.label-clear-price').hide();
        $('.label-min-price').text($('.minimum-price').val()).css('display','inline');
        $('.label-max-price').text(" - " + $(this).val()).css('display','inline');
    });

    /* on focus input*/
    $(".custom-input-container .minimum-price").focus(function() {
        $(".custom-input-suggestion").css('text-align', 'left');
        $(".custom-input-suggestion ul.for-minimum-price").css('display','block');
        $(".custom-input-suggestion ul.for-maximum-price").css('display','none');
    });

    $(".custom-input-container .maximum-price").focus(function(){
        $(".custom-input-suggestion").css('text-align', 'right');
        $(".custom-input-suggestion ul.for-maximum-price").css('display','block');
        $(".custom-input-suggestion ul.for-minimum-price").css('display','none');    
    });

    /* on click for suggestion */
    $('.custom-input-suggestion ul.for-minimum-price li a').click(function(){
        $('.label-clear-price').hide();
        $('.custom-input-container .minimum-price').val($(this).text());
        $('.label-max-price').text(" - " + $('.maximum-price').val()).css('display','inline');
        $('.label-min-price').text($(this).text()).css('display','inline');    

        return false;
    });

    $('.custom-input-suggestion ul.for-maximum-price li a').click(function(){
        $('.label-clear-price').hide();
        $('.custom-input-container .maximum-price').val($(this).text());
        $('.label-min-price').text($('.minimum-price').val()).css('display','inline');
        $('.label-max-price').text(" - " + $(this).text()).css('display','inline');

        return false;
    });

    $('.dropdown-menu input, form#login-Form > .checkbox, .custom-input a, .select-pretty select').click(function(event) {
        event.stopPropagation();
    });

    $('#show-filter-btn').click(function() {
        $('.optional-filter').toggleClass('hide');
        ($(this).find('span').text() === "Tampilkan Semua Filter") ? $(this).find('span').text("Sembunyikan Filter") : $(this).find('span').text("Tampilkan Semua Filter");

        return false;
    });

    $('.ask-option').click(function(){
        $('.listing-mini-bar').css('display','block');
    });

    $('.cancel-btn').click(function(){
        $('.listing-mini-bar').css('display','none');
    });

    $('.minimize-btn').click(function(){
        $('.listing-mini-bar .wrapper').toggleClass('hide');
        ($(this).text() === "Hide") ? $(this).text("Show") : $(this).text("Hide");
    });  

    $(".select-pretty select").change(function(){
        $(this).parent().find(".select-label").text( $(this).find("option:selected").text() );
    });

    $('.excerpt-toggle').click(function(){
        $(this).parent().find('.excerpt-content').toggleClass('show');
        ($(this).text() === "Show More") ? $(this).text("Show Less") : $(this).text("Show More");
    });

    $('.show-mobile-search').click(function() {
        $('.search-wrapper .form-inline, .filter-wrapper').toggleClass('hide-mobile');
        ($(this).text() === "Tampilkan Pencarian & Filter") ? $(this).text("Sembunyikan Pencarian & Filter") : $(this).text("Tampilkan Pencarian & Filter");
    });

    $('.menu-btn').click(function() {
        $('#bottom-bar').toggleClass('hide-mobile');
    });

    $('.topbarmenu-btn').click(function() {
        $('#top-bar').toggleClass('hide-mobile');    
    });

    $('#forgotPassword').click(function() {
        $('.modal','.modal-backdrop').remove();
        return false;
    });

    $("#tagSelect").select2({ maximumSelectionLength: 1 });  
});
