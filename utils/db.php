<?php

$user = 'root';
$pass = '';

try {
    $mysqlClient = new PDO('mysql:host=localhost;dbname=poo_zoo', $user, $pass);
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
