<?php
// show_bug.php <id>
require_once "vendor/autoload.php";
require_once "bootstrap.php";

use Marco\Doctrine\Bug;

$theBugId = $argv[1];

$bug = $entityManager->find(Bug::class, (int)$theBugId);

echo "Bug: ".$bug->getDescription()."\n";
echo "Engineer: ".$bug->getEngineer()->getName()."\n";