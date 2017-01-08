<?php
namespace GlobalSerp\View;

trait GlobalSerpParamsParseTrait
{
    public function ph()
    {
        return $this->request->params['__global_serp_params_parse_com_object'];
    }
}
