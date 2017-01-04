<?php
namespace GlobalSerp\Routing\Route;

use Cake\Routing\Route\Route;
use Cake\Log\Log;

class EntityRoute extends Route
{
    public function match(array $url, array $context = [])
    {
        Log::write('debug', $url);
        Log::write('debug', $context);
        return parent::match($url, $context);
    }

    public function parse($url, $method = '')
    {
        $params = parent::parse($url, $method);
        Log::write('debug', $url);
        Log::write('debug', $method);
        Log::write('debug', $params);
        return $params;
    }
}