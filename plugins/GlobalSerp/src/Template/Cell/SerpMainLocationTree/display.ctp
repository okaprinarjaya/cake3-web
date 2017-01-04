<div class="serp-breakdown">
    <div class="container">
        <div class="content-bordered-box">
            <div class="row">
                
                <div class="col-md-2 custom-width">
                    <div class="area">
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-angle-left"></i>
                                <a href="#">&nbsp; Cipinang Besar Selatan</a>
                            </li>

                            <li class="active">Cipinang Besar Selatan</li>
                        </ol>
                    </div>
                </div>

                <div class="col-md-10 border-right">
                    <div class="sub-area">
                        
                        <div class="sub-area-title">
                            <h3>Lokasi populer di jakarta timur</h3>
                        </div>

                        <!-- Start sub area small -->
                        <div class="sub-area-lists list-small">
                            <ul id="container-list-location-tree">
                                <?php
                                $list_buffer = '';
                                foreach ($location_tree_data as $item):
                                    $alink_str = $this->Html->link($item, '/search');
                                    $list_buffer .= $this->Html->tag('li', $alink_str);
                                endforeach;

                                echo $list_buffer;
                                ?>
                            </ul>
                        </div>
                        <!-- End sub area small -->

                        <div class="see-all">
                            <a href="javascript:;" id="see-more-link-location-tree">Lihat selengkapnya</a>
                        </div>
                        
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
