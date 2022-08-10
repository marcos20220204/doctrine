<?php
// create_user.php <name>
require_once "vendor/autoload.php";
require_once "bootstrap.php";

use Marco\Doctrine\User;

$newUsername = $argv[1];

$user = new User();
$user->setName($newUsername);

$entityManager->persist($user);
$entityManager->flush();

echo "Created User with ID " . $user->getId() . "\n";