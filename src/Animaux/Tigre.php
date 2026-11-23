<?php
declare(strict_types=1);

include_once("./Terrestre.php");

class Tigre extends Terrestre
{
        public function __construct(int $id, float $weight, float $size, int $age)
    {
        parent::__construct($id, 'Tigre', $weight, $size, $age);
    }
    
}