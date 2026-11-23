<?php
declare(strict_types=1);

class EncloMappers
{
    private PDO $db;
    public function __construct(PDO $db)
    {
        $this->db = $db;
    }
}