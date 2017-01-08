<?php
namespace GlobalSerp\Popo;

class GlobalSerpParamsHold {

    private $property_type_label;
    private $property_type_code;
    private $property_trx_label;
    private $property_trx_code;
    private $property_area;
    private $keyword;
    private $price_min;
    private $price_max;
    private $area_min;
    private $area_max;
    private $land_size_min;
    private $land_size_max;
    private $bedroom_min;
    private $bathroom_max;
    private $garage;
    private $facilities = array();
    private $tags;
    private $page_number;
    private $page_number_location_tree;
    private $language;
    private $serp_beauty_url;

    public function setPropertyTypeLabel($property_type_label) {
        $this->property_type_label = $property_type_label;
    }

    public function getPropertyTypeLabel() {
        return $this->property_type_label;
    }

    public function setPropertyTypeCode($property_type_code) {
        $this->property_type_code = $property_type_code;
    }

    public function getPropertyTypeCode() {
        return $this->property_type_code;
    }

    public function setPropertyTrxLabel($property_trx_label) {
        $this->property_trx_label = $property_trx_label;
    }

    public function getPropertyTrxLabel() {
        return $this->property_trx_label;
    }

    public function setPropertyTrxCode($property_trx_code) {
        $this->property_trx_code = $property_trx_code;
    }

    public function getPropertyTrxCode() {
        return $this->property_trx_code;
    }

    public function setPageNumber($page_number) {
        $this->page_number = $page_number;
    }

    public function getPageNumber() {
        return $this->page_number;
    }

    public function setPageNumberLocationTree($page_number_location_tree) {
        $this->page_number_location_tree = $page_number_location_tree;
    }

    public function getPageNumberLocationTree() {
        return $this->page_number_location_tree;
    }

    public function setSerpBeautyUrl($serp_beauty_url) {
        $this->serp_beauty_url = $serp_beauty_url;
    }

    public function getSerpBeautyUrl() {
        return $this->serp_beauty_url;
    }    
}
