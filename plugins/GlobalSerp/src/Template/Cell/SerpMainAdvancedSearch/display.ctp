<div id="serp-filter" class="filter-wrapper serp-filter hide-mobile">
    <div class="container">
        <div class="form-inline filter-container">
            <div class="main-filter">
                
                <div class="form-group"> 
                    <div class="select-pretty">
                        <select name="">
                            <option value="">Tipe Properti</option>
                            <option value="">Rumah</option>
                            <option value="">Apartemen</option>
                            <option value="">Tanah</option>
                            <option value="">Ruko</option>
                        </select>

                        <div class="select-display btn btn-default">
                            <span class="select-label">
                                Tipe Properti
                            </span>

                            <span class="select-trigger">
                                <i class="fa fa-angle-down"></i>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="select-pretty">
                        <div class="select-display btn btn-default dropdown custom-dropdown">
                            <a data-toggle="dropdown" href="#">
                                <span class="select-label label-clear-price">Kisaran Harga</span>
                                <span class="label-min-price" style="display: none;"></span>
                                <span class="label-max-price" style="display: none;"></span>
                                <span class="select-trigger"><i class="fa fa-angle-down"></i></span>
                            </a>

                            <div class="dropdown-menu custom-input" role="form" aria-labelledby="dLabel">
                                <div class="custom-input-container">
                                    <span>IDR</span> <input type="text" name="" class="form-control numbers minimum-price" placeholder="Min"> <span class="label-right">IDR</span> <input type="text" name="" class="form-control numbers maximum-price" placeholder="Max">
                                </div>

                                <div class="custom-input-suggestion">
                                    <ul class="for-minimum-price">
                                        <li><a href="#">0</a></li>
                                        <li><a href="#">Rp 100,000,000</a></li>
                                        <li><a href="#">Rp 200,000,000</a></li>
                                        <li><a href="#">Rp 300,000,000</a></li>
                                        <li><a href="#">Rp 400,000,000</a></li>
                                        <li><a href="#">Rp 500,000,000</a></li>
                                        <li><a href="#">Rp 600,000,000</a></li>
                                        <li><a href="#">Rp 700,000,000</a></li>
                                        <li><a href="#">Rp 800,000,000</a></li>
                                        <li><a href="#">Rp 900,000,000</a></li>
                                    </ul>

                                    <ul class="for-maximum-price" style="display: none;">
                                        <li><a href="#">Rp 400,000,000</a></li>
                                        <li><a href="#">Rp 500,000,000</a></li>
                                        <li><a href="#">Rp 600,000,000</a></li>
                                        <li><a href="#">Rp 700,000,000</a></li>
                                        <li><a href="#">Rp 800,000,000</a></li>
                                        <li><a href="#">Rp 900,000,000</a></li>
                                        <li><a href="#">Rp 1,000,000,000</a></li>
                                        <li><a href="#">Rp 2,000,000,000</a></li>
                                        <li><a href="#">Rp 3,000,000,000</a></li>
                                        <li><a href="#">Any Price</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="select-pretty">
                        <div class="select-display btn btn-default dropdown custom-dropdown">
                            <a data-toggle="dropdown" href="#">
                                <span class="select-label label-clear-buildingsize">Luas Bangunan</span> <!-- maximum 12 karakter -->
                                <span class="label-min-buildingsize" style="display: none;"></span>
                                <span class="label-max-buildingsize" style="display: none;"></span>
                                <span class="select-trigger"><i class="fa fa-angle-down"></i></span>
                            </a>

                            <div class="dropdown-menu custom-input" role="form" aria-labelledby="dLabel">
                                <div class="custom-input-container">
                                    <input type="text" name="" class="form-control numbers minimum-buildingsize" placeholder="Min"> <span>mÂ²</span> <input type="text" name="" class="form-control numbers maximum-buildingsize" placeholder="Max"> <span>mÂ²</span>
                                </div>                
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="select-pretty">
                        <div class="select-display btn btn-default dropdown custom-dropdown">
                            <a data-toggle="dropdown" href="#">
                                <span class="select-label label-clear-landsize">Luas Tanah</span> <!-- maximum 12 karakter -->
                                <span class="label-min-landsize" style="display: none;"></span>
                                <span class="label-max-landsize" style="display: none;"></span>
                                <span class="select-trigger"><i class="fa fa-angle-down"></i></span>
                            </a>

                            <div class="dropdown-menu custom-input" role="form" aria-labelledby="dLabel">
                                <div class="custom-input-container">
                                    <input type="text" name="" class="form-control numbers minimum-landsize" placeholder="Min">
                                    <span>mÂ²</span>

                                    <input type="text" name="" class="form-control numbers maximum-landsize" placeholder="Max">
                                    <span>mÂ²</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <button type="button" class="btn btn-link" id="reset-filter-btn">
                        Reset Filter
                    </button>
                </div>

                <div class="form-group pull-right">
                    <button type="button" class="btn btn-link" id="show-filter-btn"><span>Tampilkan Semua Filter</span> <i class="fa fa-caret-down"></i></button>
                </div>
            </div>

            <div class="optional-filter hide">
                <div class="form-group">
                    <div class="form-row">
                        <div class="head">Keyword:</div>
                        <input class="form-control" placeholder="pool, atm, dll...">
                    </div>

                    <div class="form-row">
                        <div class="head">Tag(s):</div>
                        <select id="tagSelect" class="area-select form-control" multiple="multiple">
                            <option value="">Modern minimalist</option>
                            <option value="">Rumah Selebriti</option>
                            <option value="">Minimalist</option>
                            <option value="">Minimalist</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row">
                        <div class="select-pretty">
                            <select name="">
                                <option value="">Jml Kamar Tidur</option>
                                <option value="">0+</option>
                                <option value="">1+</option>
                                <option value="">2+</option>
                                <option value="">3+</option>
                                <option value="">4+</option>
                                <option value="">5+</option>
                                <option value="">6+</option>
                            </select>

                            <div class="select-display btn btn-default">
                                <span class="select-label">Jml Kamar Tidur</span>
                                <span class="select-trigger">
                                    <i class="fa fa-angle-down"></i>
                                </span>
                            </div>

                        </div>
                    </div>

                    <div class="form-row">
                        <div class="select-pretty">
                            <select name="">
                                <option value="">Jml Kamar Mandi</option>
                                <option value="">0+</option>
                                <option value="">1+</option>
                                <option value="">2+</option>
                                <option value="">3+</option>
                                <option value="">4+</option>
                                <option value="">5+</option>
                                <option value="">6+</option>
                            </select>

                            <div class="select-display btn btn-default">
                                <span class="select-label">
                                    Jml Kamar Mandi
                                </span>

                                <span class="select-trigger">
                                    <i class="fa fa-angle-down"></i>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="select-pretty">
                            <select name="">
                                <option value="">Garasi Mobil</option>
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                                <option value="">4</option>
                                <option value="">5</option>
                            </select>

                            <div class="select-display btn btn-default">
                                <span class="select-label">Garasi Mobil
                                </span>
                                
                                <span class="select-trigger">
                                    <i class="fa fa-angle-down"></i>
                                </span>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="form-group">
                    
                    <div class="head">Fasilitas:</div>
                    
                    <div class="form-row">
                        <div class="checkbox">
                            <label><input type="checkbox" value=""> School</label>
                        </div>            
                    </div>

                    <div class="form-row">
                        <div class="checkbox">
                            <label><input type="checkbox" value=""> Supermarket</label>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="checkbox">
                            <label><input type="checkbox" value=""> Internet Cafe</label>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="checkbox">
                            <label><input type="checkbox" value=""> Office Complex</label>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value=""> Sports Center
                            </label>
                        </div>
                    </div>

                </div>

                <div class="form-group no-heading">
                    <div class="form-row">
                        <div class="checkbox">
                            <label><input type="checkbox" value=""> Shopping Mall</label>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="checkbox">
                            <label><input type="checkbox" value=""> Hospital</label>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="checkbox">
                            <label><input type="checkbox" value=""> 24 Hours Security</label>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="checkbox">
                            <label><input type="checkbox" value=""> Toll Booth</label>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="checkbox">
                            <label><input type="checkbox" value=""> Mosque</label>
                        </div>
                    </div>

                </div>

                <div class="form-group no-heading">
                    <div class="form-row">
                        <div class="checkbox">
                            <label><input type="checkbox" value=""> Service Station</label>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="checkbox">
                            <label><input type="checkbox" value=""> Swimming Pool</label>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="checkbox">
                            <label><input type="checkbox" value=""> Cafe</label>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="checkbox">
                            <label><input type="checkbox" value=""> Traditional Market</label>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="checkbox">
                            <label><input type="checkbox" value=""> Playground</label>
                        </div>
                    </div>
                </div>

                <div class="filter-apply-button">
                    <button type="submit" class="btn btn-secondary">Filter</button>
                </div>

            </div>
        </div>
    </div>
</div>
