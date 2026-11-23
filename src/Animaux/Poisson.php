<?php
declare(strict_types=1);

include_once("./Aquatique.php");

class Poisson extends Aquatique
{
        public function __construct(int $id, float $weight, float $size, int $age)
    {
        parent::__construct($id, 'Poisson', $weight, $size, $age);
    }
    
}
