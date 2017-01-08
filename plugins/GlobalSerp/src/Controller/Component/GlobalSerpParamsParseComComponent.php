<?php
namespace GlobalSerp\Controller\Component;

use Cake\Controller\Component;
use Cake\Controller\Controller;
use Cake\Network\Request;
use Cake\Event\Event;
use Cake\Core\Configure;
use GlobalSerp\Popo\GlobalSerpParamsHold;

class GlobalSerpParamsParseComComponent extends Component
{

    private $paramsHold;

    public function initialize(array $config)
    {
        $this->paramsHold = new GlobalSerpParamsHold();
    }

    public function startup(Event $event)
    {
        $controller = $event->subject();
        $this->parseParams($controller);
        $controller->request['__global_serp_params_parse_com_object'] = $this->getParams();
    }
    
    public function getParams() {
        return $this->paramsHold;
    }

    private function parseParams(Controller $controller)
    {
        $multi_lang_map_property_types = Configure::read('PROPERTY_TYPES_MULTI_LANG_MAPPING');
        $multi_lang_map_property_trx = Configure::read('PROPERTY_TRX_MULTI_LANG_MAPPING');
        $property_types_code = Configure::read('PROPERTY_TYPES_CODE_MAPPING');
        $property_trx_code = Configure::read('PROPERTY_TRX_CODE_MAPPING');
        $beauty_url = [];

        // Type
        $property_type_label = $this->paramItem($controller->request, 'type');
        if ($property_type_label == null) {
            $property_type_label = 'rumah';
            
        } else {
            $property_type_label = $multi_lang_map_property_types[$property_type_label];
        }
        
        $this->paramsHold->setPropertyTypeLabel($property_type_label);
        $this->paramsHold->setPropertyTypeCode($property_types_code[$property_type_label]);

        
        // Category
        $property_trx_label = $this->paramItem($controller->request, 'category');
        if ($property_trx_label == null) {
            $property_trx_label = 'dijual';

        } else {
            $property_trx_label = $multi_lang_map_property_trx[$property_trx_label];
        }

        $this->paramsHold->setPropertyTrxLabel($property_trx_label);
        $this->paramsHold->setPropertyTrxCode($property_trx_code[$property_trx_label]);

        if ($property_trx_label == 'sewa') {
            $beauty_url[] = $property_trx_label;
            $beauty_url[] = $property_type_label;
        } else {
            $beauty_url[] = $property_type_label;
            $beauty_url[] = $property_trx_label;
        }

        
        // Page Listing number
        $page_number = (int) $this->paramItem($controller->request, 'page');
        if (!$page_number) {
            $page_number = 1;
        }

        $this->paramsHold->setPageNumber($page_number);

        
        // Page Location Tree number
        $page_number_location_tree = (int) $this->paramItem($controller->request, 'location_tree_page');
        if (!$page_number_location_tree) {
            $page_number_location_tree = 1;
        }

        $this->paramsHold->setPageNumberLocationTree($page_number_location_tree);

        // Construct Beauty URL
        $beauty_url_str = implode('-', $beauty_url);
        $beauty_url_str = '/' . $beauty_url_str . '/';       
        $this->paramsHold->setSerpBeautyUrl($beauty_url_str);
    }

    private function paramItem(Request $request, $param_name) {
        $item = null;

        if (isset($request->query[$param_name]) && !empty($request->query[$param_name])) {
            $item = $request->query[$param_name];
        } else if (isset($request->params[$param_name]) && !empty($request->params[$param_name])) {
            $item = $request->params[$param_name];
        }

        return $item;
    }
}
