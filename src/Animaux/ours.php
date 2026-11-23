<?php
declare(strict_types=1);

include_once("./Terrestre.php");

class Ours extends Terrestre
{
        public function __construct(int $id, float $weight, float $size, int $age)
    {
        parent::__construct($id, 'Ours', $weight, $size, $age);
    }
    
}