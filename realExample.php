<?php
require 'vendor/autoload.php';

use App\RealExample\ArticleCreator;
use App\RealExample\ArticleTypesCreator;

$title = 'Article Title';
$meta = ['author' => 'Marcin', 'created' => '1998-12-01'];
$picture = 'some path';
$content = '<div><h2>Inmensae subtilitatis, obscuris et malesuada fames.</h2><p>Morbi fringilla convallis sapien, id pulvinar odio volutpat. Ullamco laboris nisi ut aliquid ex ea commodi consequat. Morbi odio eros, volutpat ut pharetra vitae, lobortis sed nibh.<br>Quam temere in vitiis, legem sancimus haerentia. Vivamus sagittis lacus vel augue laoreet rutrum faucibus. Tityre, tu patulae recubans sub tegmine fagi dolor.</p></div>';

function clientCode(ArticleCreator $creator): string
{
    $creator->getArticleTemplate();
    return $creator->createArticle();
}

echo clientCode(new ArticleTypesCreator($title, $meta, $picture, $content, 'bootstrap'));
echo "\n";
echo "\n";
echo clientCode(new ArticleTypesCreator($title, $meta, $picture, $content, 'uikit'));
echo "\n";
echo "\n";
echo clientCode(new ArticleTypesCreator($title, $meta, $picture, $content, 'noFramework'));

