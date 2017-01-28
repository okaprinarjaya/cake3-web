<?php
namespace App\Error;

use Exception;
use Cake\Core\Configure;
use Cake\Error\ExceptionRenderer;

class CustomExceptionRenderer extends ExceptionRenderer
{
    protected function _template(Exception $exception, $method, $code)
    {
        if (!Configure::read('debug')) {
            $this->controller->viewBuilder()->helpers([
                'LayoutPartsHlp' => ['header_menubar_type' => 'onebar']
            ]);

            $this->controller->viewBuilder()->theme('Theme123');
            $this->controller->viewBuilder()->layout('theme123-default');
        }

        return parent::_template($exception, $method, $code);
    }

    protected function _message(Exception $exception, $code)
    {
        if (!Configure::read('debug')) {
            return $exception->getMessage();
        }

        return parent::_message($exception, $code);
    }
}
