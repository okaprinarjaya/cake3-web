<?php
$this->assign('title', 'SERP | Rumah123.com');
?>

<?php
echo $this->LayoutPartsHlp->createMetaDataHeader();
echo $this->LayoutPartsHlp->createLayoutHeader();
?>

<!-- BREADCRUMB START -->
<?php
echo $this->cell('GlobalSerp.SerpMainBreadcrumb')->render();
?>
<!-- BREADCRRUMB END -->


<div class="topleaderboard-banner" style="width: 100%;max-width: 728px;margin: 15px auto;">
    <a href="">
        <img class="img-responsive" src="http://images.id.ippstatic.com/assets/image/wangsarajasa.png" alt="">
    </a>
</div>


<!-- SEARCH FILTER START -->
<?php
echo $this->Form->create('Filter', array('type' => 'get'));
?>

    <!-- BASIC SEARCH BOX START -->
    <?php
    echo $this->cell('GlobalSerp.SerpMainBasicSearch')->render();
    ?>
    <!-- BASIC SEARCH END -->


    <!-- LOCATION TREE START -->
    <?php
    echo $this->cell('GlobalSerp.SerpMainLocationTree')->render();
    ?>
    <!-- LOCATION TREE END -->


    <!-- ADVANCED SEARCH BOX START -->
    <?php
    echo $this->cell('GlobalSerp.SerpMainAdvancedSearch')->render();
    ?>
    <!-- ADVANCED SEARCH BOX END -->

<?php
echo $this->Form->end();
?>
<!-- SEARCH FILTER END -->


<!-- MAIN CONTENT (LISTINGS) WRAP BOX START -->
<div class="content-wrapper">
    <div class="container">
        
        <div class="fixed-banner"></div>

        <div class="row">
            
            <div class="col-md-8">
                <div class="content serp-content">
                    <div class="content-bordered-box">

                        
                        <!-- LISTINGS SORTER START -->
                        <?php
                        echo $this->cell('GlobalSerp.SerpMainListingsSorter')->render();
                        ?>
                        <!-- LISTINGS SORTER END -->


                        <!-- LISTINGS ITEM START -->
                        <div id="listings-container" class="serp-listing list-view">
                            <?php
                            echo $this->fetch('content');
                            ?>
                        </div>
                        <!-- LISTINGS ITEM END -->


                    </div>

                    
                    <!-- PAGINATOR START -->
                    <div id="paginator-container">
                        <?php
                        echo $this->fetch('paginator');
                        ?>
                    </div>
                    <!-- PAGINATOR END -->


                    <!-- ROW BANNER -->
                    <?php
                    // echo $this->element('banner-properti-alert');
                    ?>

                </div>
            </div>

            
            <!-- SIDEBAR START -->
            <div class="col-md-4">
                <div class="sidebar serp-sidebar">

                    <!-- SIDEBAR - AREA SPECIALIST START -->
                    <?php
                    echo $this->fetch('sidebar-area-specialist');
                    ?>
                    <!-- SIDEBAR - AREA SPECIALIST END -->


                    <div class="row">
                        <div class="col-md-12 col-sm-4">
                            <?php
                            echo $this->fetch('serp-old-mrb1');
                            ?>
                        </div>
                    </div>


                    <!-- SIDEBAR - INFO LOKAL START -->
                    <?php
                    echo $this->fetch('sidebar-local-info');
                    ?>
                    <!-- SIDEBAR - INFO LOKAL END -->

                    <div class="row">
                        <div class="col-md-12 col-sm-4">
                            <?php
                            echo $this->fetch('serp-old-mrb2');
                            ?>
                        </div>
                    </div>


                    <!-- SIDEBAR - LATEST NEWS START -->
                    <?php
                    echo $this->fetch('sidebar-latest-news');
                    ?>
                    <!-- SIDEBAR - LATEST NEWS END -->


                    <div class="row">
                        <div class="col-md-12 col-sm-4">
                            <?php
                            echo $this->fetch('serp-old-mrb3');
                            ?>
                        </div>
                    </div>

                    <?php
                    echo $this->fetch('sidebar-newest-property');
                    ?>

                </div>
            </div>
            <!-- SIDEBAR END -->

        </div>
    </div>
</div>
<!-- MAIN CONTENT (LISTINGS) WRAP BOX END -->


<!-- FOOTER START -->
<?php
echo $this->cell('GlobalSerp.Footer')->render();
?>
<!-- FOOTER END -->


<?php
// echo $this->element('mini-bottom-bar');
?>

<?php
echo $this->fetch('modalbox-contact-agent');

// echo $this->element('modalbox-contact-multiple-agent');

// echo $this->element('modalbox-multiple-inquiry');
?>

<?php
// echo $this->element('modalbox-banner');
?>

<?php
// echo $this->element('modalbox-login-agent');
?>

<?php
// echo $this->element('modalbox-cigna');
?>

<?php
echo $this->Html->script(
    array(
        '/vendors/bootstrap/bootstrap.min',
        '/vendors/rumah123/rumah123',
        '/vendors/jquery-lazyload/jquery.lazyload.min',
        '/vendors/select2/select2.min'
    )
);
?>

<script type="text/javascript">
<?php
echo 'var __base_url = "' . $this->Url->build('/', true) . '";' . "\n"; 
?>
</script>

<script type="text/javascript">
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
</script>

<?php
echo $this->fetch('scriptBottom');
?>

</body>
</html>