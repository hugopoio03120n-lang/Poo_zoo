<?php
declare(strict_types=1);

abstract class Terrestre extends Animal
{

    public function __construct(int $id, string $specie, float $weight, float $size, int $age)
    {
        parent::__construct($id, $specie, $weight, $size, $age);
    }

    public function wander()
    {
        echo $this->specie.' is wandering around';
    }
    
}