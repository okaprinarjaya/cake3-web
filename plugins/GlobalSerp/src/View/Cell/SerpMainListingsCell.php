<?php
namespace GlobalSerp\View\Cell;

use Cake\View\Cell;
use Cake\ORM\TableRegistry;
use GlobalSerp\Repository\ListingsRepository;
use GlobalSerp\View\GlobalSerpParamsParseTrait;

class SerpMainListingsCell extends Cell
{
    use GlobalSerpParamsParseTrait;

    public function display(array $param_data)
    {
        $this->setupListings($param_data);
    }

    private function setupListings(array $options) {
        $listingRepo = new ListingsRepository();
        
        // Retrieve Premier listings
        $data_premier = $listingRepo->dataPremiere(
            $this->ph()->getPropertyTypeCode(), 
            $this->ph()->getPropertyTrxCode()
        );

        $data_premier_count = $listingRepo->dataPremiereCount(
            $this->ph()->getPropertyTypeCode(), 
            $this->ph()->getPropertyTrxCode()
        );

        // Retrieve General listings
        $data_general_count = $listingRepo->dataGeneralCount(
            $this->ph()->getPropertyTypeCode(), 
            $this->ph()->getPropertyTrxCode()
        );

        $data_general = $listingRepo->dataGeneral(
            $this->ph()->getPropertyTypeCode(), 
            $this->ph()->getPropertyTrxCode(), 
            $options['rows_per_page'], 
            $this->ph()->getPageNumber(), 
            $data_premier->toArray()
        );

        // Total rows
        $total_rows_found = $data_premier_count + $data_general_count;
        
        // Send data to view
        $this->set(compact('data_general', 'data_premier', 'total_rows_found'));
    }

}
