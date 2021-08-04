<?php
require 'vendor/autoload.php';

use App\Concept\Product1Creator;
use App\Concept\Product2Creator;
use App\Concept\ProductCreator;


function clientCode(ProductCreator $creator, int $methodNum)
{
    if ($methodNum === 1) {
        return $creator->factoryMethod()->productMethod1();
    } else {
        return $creator->factoryMethod()->productMethod2();
    }
}

echo clientCode(new Product1Creator(), 1);
echo "\n";
echo clientCode(new Product1Creator(), 2);
echo "\n";
echo clientCode(new Product2Creator(), 1);
echo "\n";
echo clientCode(new Product2Creator(), 2);

//run php concept.php
