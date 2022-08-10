<?php
// close_bug.php <bug-id>
require_once "vendor/autoload.php";
require_once "bootstrap.php";

use Marco\Doctrine\Bug;

$theBugId = $argv[1];

$bug = $entityManager->find(Bug::class, (int)$theBugId);
$bug->close();

$entityManager->flush();