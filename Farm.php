<?php

class Farm
{
    private array $animals = [];
    private array $products = [];

    public function addAnimal(AnimalsEnum $type): array
    {
        array_push($this->animals, $type);
        return $this->animals;
    }

    public function getAnimals(): array
    {
        return $this->animals;
    }
}