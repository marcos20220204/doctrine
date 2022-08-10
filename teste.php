<?php

require_once "vendor/autoload.php";
require_once "bootstrap.php";

use Marco\Doctrine\Bug;

$bugs = $entityManager->getRepository(Bug::class)
                      ->findBy(array('status' => 'CLOSE'));

foreach ($bugs as $bug) {
    // do stuff
}

var_dump($bugs);