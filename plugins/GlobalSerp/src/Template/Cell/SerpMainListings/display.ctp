<?php
$html = $this->Html;

$listing_item_non_premiere = function ($listing) use ($html) {
    
    $img_cover_thumb = $html->image('listings/' . $listing->get('img_src'), array('class' => 'img-responsive lazy'));
    $data_title = $listing->get('data_title');
    $trx_type_icon = $listing->get('trx_type') == 'S' ? 'listing-sell' : 'listing-rent';
    $trx_type_label = $listing->get('trx_type') == 'S' ? 'Dijual' : 'Disewa';

    $item = <<<EOT
    <!-- NON-PREMIER -->
    <div class="listing gts-listing">
        <div class="row">
            
            <div class="col-sm-4">
                <div class="photo-container">
                    <a href="">
                        $img_cover_thumb                       
                        <span class="photo-count"><i class="fa fa-camera"> 10</i></span>
                    </a>
                </div>
            </div>

            <div class="col-sm-8">
                <div class="info-listing">
                    <div class="row top-row">
                        <div class="col-sm-6">
                            <div class="left-info">
                                <h2 class="listing-title">
                                    <a href="">$data_title</a>
                                </h2>

                                <div class="listing-type $trx_type_icon">
                                    Rumah $trx_type_label
                                </div>
                                
                                <div class="listing-badges">
                                    <span class="featured"><i class="fa fa-star"></i> Featured</span>
                                    <span class="exclusive">Exclusive</span>
                                    <span class="new">Baru</span>
                                </div>

                                <div class="listing-location">Lebak Bulus, Jakarta Selatan</div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="right-info">
                                <div class="price-info">~ IDR 4.000.000.000</div>
                                <div class="price-indicator">per bulan</div>    
                            </div>
                        </div>
                    </div>

                    <div class="row bottom-row">
                        <div class="col-sm-6">
                            <div class="left-info">
                                <div class="listing-room-info">
                                    <div class="bed-info">
                                        <span class="sprites-icon icon-bed"></span>
                                        K Tidur: <b>2</b>
                                    </div>

                                    <div class="bath-info">
                                        <span class="sprites-icon icon-bath"></span>
                                        K Mandi: <b>2</b>
                                    </div>

                                    <div class="garage-info">
                                        <span class="sprites-icon icon-garage"></span>
                                        Garasi: <b>1</b>
                                    </div>
                                </div>

                                <div class="listing-size-info">
                                    <div class="building-size">
                                        Luas Bangunan: <b>100mÂ²</b>
                                    </div>

                                    <div class="land-size">
                                        Luas Tanah: <b>150mÂ²</b>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="right-info">
                                <!-- Start rent info 20150420 -->
                                <div class="rent-info">Disewakan per bulan</div>                         
                                <!-- End rent info -->
                                <div class="agency-info"><a href="">Greater House Lintas Cipta Development</a></div>
                                <div class="posted-date">Tayang Sejak: 4 hari yang lalu</div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>

        <div class="row-button form-inline">
            <div class="left-button form-group">
                <div class="checkbox ask-option">
                    <label>
                        <input type="checkbox" value="" /> 
                        <span>Pilih untuk bertanya</span>
                    </label>
                </div>

                <button type="button" class="btn btn-default contact-agent-btn" data-toggle="modal" data-target="#ContactAgentModal" href="/global-serp-revamp-arch/search/xhr_contact_agent">
                    <i class="fa fa-phone"></i>
                    <span>Kontak Agen</span>
                </button>

                <button type="button" class="btn btn-default save-listing-btn">
                    <i class="fa fa-heart"></i>
                    <span>Simpan Listing</span>
                </button>
            </div>

            <div class="right-button form-group pull-right see-more-btn">
                <a href="" class="btn btn-action">Lihat Detil</a>
            </div>
        </div>

    </div>
    <!-- END NON PREMIER -->

EOT;

    return $item;

};


$listing_item_premiere = function ($listing) use ($html) {
    
    $item = <<<EOT
    <!-- PREMIER -->
    <div class="listing gts-listing listing-premier">
        <div class="row">
            <div class="col-sm-5">
                <div class="photo-container carousel-container">
                    <ul>
                        <li>
                            <a href="">
                                <img src="http://images.id.ippstatic.com/house/ho12/1280849/hos1280849-dijual-di-jakarta_selatan_20_1407735325.jpg" data-original="http://images.id.ippstatic.com/house/ho12/1280849/hos1280849-dijual-di-jakarta_selatan_20_1407735325.jpg" alt="" class="img-responsive lazy">                            
                            </a>
                        </li>

                        <li>
                            <a href="">
                                <img src="http://images.id.ippstatic.com/house/ho13/1314654/hos1314654-dijual-di-jakarta_selatan_24_1405924663.jpg" data-original="http://images.id.ippstatic.com/house/ho13/1314654/hos1314654-dijual-di-jakarta_selatan_24_1405924663.jpg" alt="" class="img-responsive lazy">
                            </a>
                        </li>
                    </ul>

                    <span class="photo-count">
                        <i class="fa fa-camera"> 10</i>
                    </span>
                </div>

                <div class="photo-paging carousel-paging">
                    <a href="" class="trigger left-trigger"><i class="fa fa-angle-left"></i></a>
                    <span class="start">1</span> of <span class="end">15</span>
                    <a href="" class="trigger right-trigger">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>

            </div>

            <div class="col-sm-7">
                <div class="info-listing">
                    <div class="row top-row">
                        
                        <div class="col-sm-6">
                            <div class="left-info">
                                <h2 class="listing-title">
                                    <a href="javascript:;">Bamboo Residence Ciganjur, Ciganjur, Jakarta Selatan</a>
                                </h2>
                                
                                <div class="listing-type listing-sell">Rumah Dijual</div>
                                
                                <div class="listing-badges">
                                    <span class="featured">
                                        <i class="fa fa-star"></i> Featured
                                    </span>
                                </div>

                                <div class="listing-location">Ciganjur, Jakarta Selatan</div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="right-info">
                                <div class="price-info">~ IDR 2.500.000.000</div>
                                <div class="price-indicator">per bulan</div>
                                <div class="simulation-link">
                                    <a href="">Simulasikan dengan<br>Permata KPR</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row bottom-row">
                        <div class="col-sm-6">
                            <div class="left-info">
                                <div class="listing-room-info">
                                    <div class="bed-info">
                                        <span class="sprites-icon icon-bed"></span>
                                        K Tidur: <b>2</b>
                                    </div>

                                    <div class="bath-info">
                                        <span class="sprites-icon icon-bath"></span>
                                        K Mandi: <b>2</b>
                                    </div>

                                    <div class="garage-info">
                                        <span class="sprites-icon icon-garage"></span>
                                        Garasi: <b>1</b>
                                    </div>
                                </div>

                                <div class="listing-size-info">
                                    <div class="building-size">Luas Bangunan: <b>100mÂ²</b></div>
                                    <div class="land-size">
                                        Luas Tanah: <b>150mÂ²</b>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="right-info">
                                <div class="agency-info"><a href="">Greater House</a></div>
                                <div class="posted-date">Tayang Sejak: 4 hari yang lalu</div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>

        <div class="row-button form-inline">
            <div class="left-button form-group">
                <div class="checkbox ask-option">
                    <label>
                        <input type="checkbox" value=""> <span>Pilih untuk bertanya</span>
                    </label>
                </div>

                <button type="button" class="btn btn-default contact-agent-btn" data-toggle="modal" data-target="#ContactAgentModal">
                    <i class="fa fa-phone"></i><span>Kontak Agen</span>
                </button>

                <button type="button" class="btn btn-default save-listing-btn">
                    <i class="fa fa-heart"></i><span>Simpan Listing</span>
                </button>
            </div>

            <div class="right-button form-group pull-right see-more-btn">
                <a href="" class="btn btn-action">Lihat Detil</a>
            </div>

        </div>

    </div>
    <!-- END PREMIER -->

EOT;

    return $item;

};
?>

<h1>
Rumah dijual di Jakarta Selatan
<small>(<?php echo number_format($total_rows_found); ?> listing)</small>
</h1>

<?php
$listings = '';

foreach ($data_general as $listing):
    $listings .= $listing_item_non_premiere($listing);
    $listings .= PHP_EOL . PHP_EOL;
endforeach;

echo $listings;
?>
