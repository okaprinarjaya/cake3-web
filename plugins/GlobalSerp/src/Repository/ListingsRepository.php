<?php
namespace GlobalSerp\Repository;

use Cake\ORM\TableRegistry;
use Cake\Utility\Hash;

class ListingsRepository
{
    private $Tabelo;

    public function __construct()
    {
        $this->Tabelo = TableRegistry::get('GlobalSerp.Tabelo');
    }

    public function dataPremiere($property_type_code, $property_trx_code)
    {
        $conditions_premier = $this->queryConstructor('premier', $property_type_code, $property_trx_code);
        $data_premier = $this->Tabelo->find('all', array('conditions' => $conditions_premier));

        return $data_premier;
    }

    public function dataPremiereCount($property_type_code, $property_trx_code)
    {
        $conditions_premier = $this->queryConstructor('premier', $property_type_code, $property_trx_code);
        $data_premier = $this->Tabelo->find('all', array('conditions' => $conditions_premier));

        return $data_premier->count();
    }

    public function dataGeneral($property_type_code, $property_trx_code, $rows_per_page, $pagenumber, $data_premier)
    {
        $conditions_general = $this->queryConstructor('general',  $property_type_code, $property_trx_code);
        $rrref = $this->offsetAndLimitCalculation($rows_per_page, $pagenumber, $data_premier);

        $data_general = $this->Tabelo->find('all', array(
            'conditions' => $conditions_general,
            'limit' => $rrref['limit'],
            'offset' => $rrref['offset']
        ));

        return $data_general;
    }

    public function dataGeneralCount($property_type_code, $property_trx_code)
    {
        $conditions_general = $this->queryConstructor('general',  $property_type_code, $property_trx_code);
        $data_general = $this->Tabelo->find('all', array('conditions' => $conditions_general));

        return $data_general->count();
    }

    private function queryConstructor($listing_strata, $property_type_code, $property_trx_code) {
        $query = [];
        $query['Tabelo.property_type'] = $property_type_code;
        $query['Tabelo.trx_type'] = $property_trx_code;

        if ($listing_strata == 'premier') {
            $query['Tabelo.is_premiere'] = 'Y';

        } else if ($listing_strata == 'general') {
            $query['Tabelo.is_premiere'] = 'N';
        }

        return $query;
    }

    private function offsetAndLimitCalculation($rows_per_page, $pagenumber, array $data_premier) {
        $offset = null;
        $limit = $rows_per_page;
        $data_premier_pages_position_sequence = Hash::extract(
            $data_premier,
            '{n}.Tabelo.put_at_page'
        );

        if ($pagenumber === 1) {
            $offset = 0;
            
            if (
                $data_premier_pages_position_sequence && 
                in_array(1, $data_premier_pages_position_sequence)
            ) {
                
                $limit = $limit - 1;
            }

        } else {

            if (
                $data_premier_pages_position_sequence && 
                in_array($pagenumber, $data_premier_pages_position_sequence)
            ) {

                $limit = $limit - 1;
            }

            $offset = ($pagenumber * $rows_per_page) - $rows_per_page;
            $data_premier_count = count($data_premier_pages_position_sequence);
            
            for ($i = 0; $i < $data_premier_count; $i++) {
                if ($data_premier_pages_position_sequence[$i] >= $pagenumber) {
                    unset($data_premier_pages_position_sequence[$i]);
                }
            }

            $data_premier_count = count($data_premier_pages_position_sequence);
            $offset = $offset - $data_premier_count;
        }

        return array(
            'offset' => $offset,
            'limit' => $limit
        );

    }

}
