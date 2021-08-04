<?php

namespace App\Concept;
class Product1Creator extends ProductCreator
{

    public function factoryMethod(): ProductInterface
    {
      return new Product1();
    }
}
