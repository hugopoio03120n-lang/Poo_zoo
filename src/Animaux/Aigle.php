<?php
declare(strict_types=1);

include_once("./Aérien.php");

class Aigle extends Aérien
{
        public function __construct(int $id, float $weight, float $size, int $age)
    {
        parent::__construct($id, 'Aigle', $weight, $size, $age);
    }
    
}
