<?php 
require_once "../utils/autoloader.php";

// $data = les données de la bdd

// $cat = new Cat();
$cat = new Cat("Felix", "Maine Coon", 7.30, 10);
$dog = new Dog("Medor", "Canne Corso", 40.40, 1);
$rabbit = new Rabbit("test", "test", 3.00, 4.4);


// var_dump($cat);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h2>Poids de <?= $cat->getName() ?></h2>
    <p><?= $cat->getPoids() ?></p>
    <p><?= $cat->meow() ?></p>

    <hr>

    <h2>Poids de <?= $dog->getName() ?></h2>
    <p><?= $dog->getPoids() ?></p>
    <p><?= $dog->bark() ?></p>

    <hr>

    <h2>Poids de <?= $rabbit->getName() ?></h2>
    <p><?= $rabbit->getPoids() ?></p>
    <p><?= $rabbit->run() ?></p>

    
</body>
</html>