<?php
namespace GlobalSerp\Model\Table;

use Cake\ORM\Table;

class ArticlesTable extends Table
{
    public function initialize(array $config)
    {
        $this->table('articles');
    }
}
