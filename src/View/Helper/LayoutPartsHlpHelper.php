<?php
namespace App\View\Helper;

use Cake\View\Helper;

class LayoutPartsHlpHelper extends Helper
{
    use \Cake\View\CellTrait;

    public $helpers = ['Html', 'Url'];

    protected $_defaultConfig = [];

    public function eventManager()
    {
    }

    public function createLayoutHeader()
    {
        $layout_header = null;

        if ($this->_config['header_menubar_type'] == 'multibar') {
            $layout_header = $this->layoutHeaderMultiBar();

        } else if ($this->_config['header_menubar_type'] == 'onebar') {
            $layout_header = $this->layoutHeaderOneBar();
        }

        return $layout_header;
    }

    private function layoutHeaderMultiBar()
    {
        $param_data = $this->getParamData();
        $cell = $this->cell('HeaderMultiBar', [$param_data])->render();
        
        return $cell;
    }

    private function layoutHeaderOneBar()
    {
        $param_data = $this->getParamData();
        return '';
    }

    public function createLayoutFooter()
    {
        $param_data = $this->getParamData();
        
        $footer = PHP_EOL . PHP_EOL;
        $footer .= $this->cell('Footer', [$param_data])->render();

        $footer .= PHP_EOL . PHP_EOL;
        $footer .= $this->_View->fetch('footer-additional-elements-block');
        
        $footer .= PHP_EOL . PHP_EOL;
        $footer .= $this->Html->script([
            '/vendors/bootstrap/bootstrap.min'
        ]);

        $footer .= PHP_EOL . PHP_EOL;
        $footer .= $this->Html->scriptBlock(
            'var __base_url = "' . $this->Url->build('/', true) . '";'
        );

        $footer .= PHP_EOL . PHP_EOL;
        $footer .= $this->_View->fetch('scriptBottom');
        
        $footer .= PHP_EOL;
        $footer .= PHP_EOL . '</body>';
        $footer .= PHP_EOL . '</html>';

        return $footer;
    }

    public function createMetaDataHeader()
    {

        $header = $this->Html->docType();
        $header .= PHP_EOL . '<html lang="en">';
        $header .= PHP_EOL . '<head>';

        $html_meta_common = PHP_EOL . $this->Html->charset();
        $html_meta_common .= PHP_EOL . $this->Html->meta(['http-equiv' => 'X-UA-Compatible', 'content' => 'IE=edge']);
        $html_meta_common .= PHP_EOL . $this->Html->meta('viewport', 'width=device-width, initial-scale=1.0');
        $html_meta_common .= PHP_EOL . '<link rel="shortcut icon" type="image/x-icon" href="' . $this->Url->image('favicon.ico') . '" />';
        $html_meta_common .= PHP_EOL . '<title>' . $this->_View->fetch('title') . '</title>';

        $html_meta_additional = PHP_EOL . $this->_View->fetch('meta');

        $assets_common = $this->Html->css([
            '/vendors/rumah123/styles'
        ]);

        $assets_common .= $this->Html->script([
            '/vendors/jquery/jquery.min'
        ]);

        $assets_additional = $this->_View->fetch('css');
        $assets_additional .= $this->_View->fetch('script');

        $header .= PHP_EOL . $html_meta_common;
        $header .= PHP_EOL . $html_meta_additional;
        $header .= PHP_EOL . $assets_common;
        $header .= PHP_EOL . $assets_additional;

        $header .= PHP_EOL . '</head>';
        $header .= PHP_EOL . '<body>';
        $header .= PHP_EOL;

        return $header;
    }

    private function getParamData()
    {
        return [];
    }

}
