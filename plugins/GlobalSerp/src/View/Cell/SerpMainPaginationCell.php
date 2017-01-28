<?php
namespace GlobalSerp\View\Cell;

use Cake\View\Cell;
use GlobalSerp\Repository\ListingsRepository;
use GlobalSerp\View\GlobalSerpParamsParseTrait;

class SerpMainPaginationCell extends Cell
{
    use GlobalSerpParamsParseTrait;

    public $helpers = ['Html', 'Paginator123Hlp'];

    public function display(array $param_data)
    {
        $listingRepo = new ListingsRepository();

        $data_premier_count = $listingRepo->dataPremiereCount(
            $this->ph()->getPropertyTypeCode(), 
            $this->ph()->getPropertyTrxCode()
        );

        $data_general_count = $listingRepo->dataGeneralCount(
            $this->ph()->getPropertyTypeCode(), 
            $this->ph()->getPropertyTrxCode()
        );

        $total_rows_found = $data_premier_count + $data_general_count;
        $url_pattern = $this->ph()->getSerpBeautyUrl() . 'page-{pagenum}';
        $page_number = $this->ph()->getPageNumber();
        $serp_beauty_url = $this->ph()->getSerpBeautyUrl();

        unset($this->request->query['page']);
        $request_query = $this->request->query;

        $this->set(compact(
            'total_rows_found',
            'url_pattern',
            'page_number',
            'request_query',
            'serp_beauty_url'
        ));

        $this->set('rows_per_page', $param_data['rows_per_page']);

    }
}
