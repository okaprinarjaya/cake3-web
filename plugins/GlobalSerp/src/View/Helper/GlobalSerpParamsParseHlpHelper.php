<?php
namespace GlobalSerp\View\Helper;

use Cake\View\Helper;
use Cake\View\View;

class GlobalSerpParamsParseHlpHelper extends Helper
{
    protected $_defaultConfig = [];

    private $ph;

    public function __construct(View $View, array $config = [])
    {
        parent::__construct($View, $config);
        $this->ph = $this->request->params['__global_serp_params_parse_com_object'];
    }

    public function eventManager()
    {
    }

    public function ph()
    {
        return $this->ph;
    }
}
