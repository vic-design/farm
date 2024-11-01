<?php

abstract class Animal implements AnimalInterface
{    
    protected string $productType;
    protected string $id;

    public function __construct(private string $type)
    {
    }

    public function getType()
    {
        return $this->type;
    }

    public function getProductType(): string
    {
        return $this->productType;
    }

    abstract public function setProductType(): void;

    abstract public function getProduct(): int;
}