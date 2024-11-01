<?php

class Chicken extends Animal
{
    public function __construct()
    {           
        $this->productType = AnimalsEnum::cases();
    }
    public function getProduct(): int
    {
        return rand(0,1);
    }

    public function setProductType(): void
    {
        $this->productType = ProductEnum::CHIKEN->value;
    }
}