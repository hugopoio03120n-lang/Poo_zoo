<?php
declare(strict_types=1);

include_once("./Animal.php");

abstract class Aquatique extends Animal
{    
        public function __construct(int $id, string $specie, float $weight, float $size, int $age)
    {
        parent::__construct($id, $specie, $weight, $size, $age);
    }

    public function fly()
    {
        echo $this->specie.' is flying around';
    }
    
}