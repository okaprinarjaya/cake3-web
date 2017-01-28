<?php
namespace GlobalSerp\Controller;

use GlobalSerp\Controller\AppController;
use Cake\View\CellTrait;

class SerpMainController extends AppController
{
    use CellTrait;

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('GlobalSerp.GlobalSerpParamsParseCom');
    }

    public function beforeRender(\Cake\Event\Event $event)
    {
        parent::beforeRender($event);
        $this->viewBuilder()->helpers([
            'GlobalSerp.GlobalSerpParamsParseHlp',
            'LayoutPartsHlp' => ['header_menubar_type' => 'multibar']
        ]);

        $this->viewBuilder()->layout('GlobalSerp/global-serp-serp-main');
    }

    public function index()
    {
        $listings_cell = $this->cell('GlobalSerp.SerpMainListings', [['rows_per_page' => 6]]);
        $this->set(compact('listings_cell'));
    }
}
