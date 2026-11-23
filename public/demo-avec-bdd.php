<?php 
require_once "../utils/autoloader.php";
require_once "../utils/db_connect.php";

$authorRepo = new AuthorRepository($db);

$author = $authorRepo->findById(1);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<h2>
    <?= $author->getFirstName() ?>
</h2>
    
</body>
</html>