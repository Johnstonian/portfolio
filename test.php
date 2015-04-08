<?php
require_once 'vendor/autoload.php';

$mustache = new Mustache_Engine(array(
   'loader' => new Mustache_Loader_FilesystemLoader('templates')
));

$article_template = $mustache->loadTemplate('articles');

$article_data = file_get_contents('data/articles.json'); 

echo $article_template->render( json_decode($article_data) );

?>