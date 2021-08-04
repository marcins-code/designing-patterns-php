<?php

namespace App\Concept;
class Product2Creator extends ProductCreator
{

    public function factoryMethod(): ProductInterface
    {
        return new Product2();
    }
}
