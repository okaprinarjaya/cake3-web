<?php
echo $message;
echo "<br />";
echo sprintf('%s, line %s', str_replace(ROOT, 'ROOT', $error->getFile()), $error->getLine());
