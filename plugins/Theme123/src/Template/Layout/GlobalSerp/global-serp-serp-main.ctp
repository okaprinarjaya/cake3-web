<?php
$this->assign('title', 'SERP | Rumah123.com');

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
                        echo $this->cell('GlobalSerp.SerpMainPagination', [['rows_per_page' => 6]])->render();
                        ?>
                    </div>
                    <!-- PAGINATOR END -->


                    <!-- ROW BANNER -->
                    <?php
                    echo $this->element('GlobalSerp.SerpMain/banner-properti-alert');
                    ?>

                </div>
            </div>

            
            <!-- SIDEBAR START -->
            <div class="col-md-4">
                <div class="sidebar serp-sidebar">

                    <!-- SIDEBAR - AREA SPECIALIST START -->
                    <?php
                    echo $this->cell('GlobalSerp.SerpMainSidebarAreaSpecialist')->render();
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
                    echo $this->cell('GlobalSerp.SerpMainSidebarLocalInfo')->render();
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
                    echo $this->cell('GlobalSerp.SerpMainSidebarLatestNews')->render();
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
                    echo $this->cell('GlobalSerp.SerpMainSidebarNewestProperty')->render();
                    ?>

                </div>
            </div>
            <!-- SIDEBAR END -->

        </div>
    </div>
</div>
<!-- MAIN CONTENT (LISTINGS) WRAP BOX END -->

<?php
$this->append(
    'footer-additional-elements-block',
    $this->element('SerpMain/mini-bottom-inquiry-listing-bar')
);

$this->append(
    'footer-additional-elements-block',
    $this->element('SerpMain/modalbox-contact-agent')
);

$this->Html->script(
    [
        '/vendors/rumah123/rumah123',
        '/vendors/jquery-lazyload/jquery.lazyload.min',
        '/vendors/select2/select2.min',
        'GlobalSerp.global-serp-serp-main'
    ],
    ['block' => 'scriptBottom']
);
?>

<?php
echo $this->LayoutPartsHlp->createLayoutFooter();
?>
