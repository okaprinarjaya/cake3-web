<?php
namespace GlobalSerp\Controller\Component;

use Cake\Controller\Component;
use Cake\ORM\TableRegistry;

class ListingsComComponent extends Component
{
    public function setupListings()
    {
        $article_table = TableRegistry::get('GlobalSerp.Articles');
        $articles = $article_table->find('all');

        return $articles;
    }
}
