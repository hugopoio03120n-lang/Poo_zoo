<?php
declare(strict_types=1);

class EmployerMappers
{
    private PDO $db;
    public function __construct(PDO $db)
    {
        $this->db = $db;
    }
}