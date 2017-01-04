<h1>Hi Guys</h1>

<p>This is my first time using CakePHP v3</p>

<p>And this is a list of articles that i've been stole</p>

<ul>
<?php
foreach ($articles as $item):
    echo '<li>' . $item->title . '</li>';
endforeach;
?>
</ul>

<?php
$this->Html->script(['a', 'b', 'c'], ['block' => true]);
?>