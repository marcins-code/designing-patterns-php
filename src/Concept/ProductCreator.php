<?php

namespace App\Concept;
abstract class ProductCreator
{
    abstract public function factoryMethod(): ProductInterface;

    protected function factoryReturnMethod1(): string
    {
        $product = $this->factoryMethod();
        return "It comes from ProductCreator method 1 \n" . $product->productMethod1();
    }

    protected function factoryReturnMethod2(): string
    {
        $product = $this->factoryMethod();

        return "It comes from ProductCreator method 1 \n" . $product->productMethod2();
    }
}
