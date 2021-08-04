<?php

namespace App\Concept;

class Product1 implements ProductInterface
{
    public function productMethod1(): string
    {
        return "This is  method 1 from product 1";
    }

    public function productMethod2(): string
    {
        return "This is  method 2 from product 1";
    }

}
