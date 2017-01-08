<?php
namespace GlobalSerp\View\Cell;

use Cake\View\Cell;
use Cake\ORM\TableRegistry;
use GlobalSerp\View\GlobalSerpParamsParseTrait;

class SerpMainListingsCell extends Cell
{
    use GlobalSerpParamsParseTrait;

    public function display(array $param_data)
    {
        $this->setupListings($param_data);
    }

    private function setupListings(array $options) {
        $tabelo = TableRegistry::get('GlobalSerp.Tabelo');
        
        // Retrieve Premier listings
        $data_premier = $tabelo->dataPremiere(
            $this->ph()->getPropertyTypeCode(), 
            $this->ph()->getPropertyTrxCode()
        );

        $data_premier_count = $tabelo->dataPremiereCount(
            $this->ph()->getPropertyTypeCode(), 
            $this->ph()->getPropertyTrxCode()
        );

        // Retrieve General listings
        $data_general_count = $tabelo->dataGeneralCount(
            $this->ph()->getPropertyTypeCode(), 
            $this->ph()->getPropertyTrxCode()
        );

        $data_general = $tabelo->dataGeneral(
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

        /*
        $this->controller->request['paginator_hlp_data'] = array(
            'total_rows_found' => $total_rows_found,
            'rows_per_page' => $options['rows_per_page']
        );

        $this->controller->helpers[] = 'SerpOld.SerpOldListingsHlp';*/
    }

}
