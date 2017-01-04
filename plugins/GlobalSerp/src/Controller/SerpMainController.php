<?php
namespace GlobalSerp\Controller;

use GlobalSerp\Controller\AppController;

class SerpMainController extends AppController
{
    public $helpers = ['LayoutPartsHlp' => ['header_menubar_type' => 'multibar']];

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('GlobalSerp.ListingsCom');
    }

    public function beforeRender(\Cake\Event\Event $event)
    {
        parent::beforeRender($event);
        $this->viewBuilder()->layout('GlobalSerp/serp-main');
    }

    public function index()
    {
        $articles = $this->ListingsCom->setupListings();
        $this->set('articles', $articles);
    }
}
