<?php
// create_product.php <name>
require_once "vendor/autoload.php";
require_once "bootstrap.php";

use Marco\Doctrine\Product;

$newProductName = $argv[1];

$product = new Product();
$product->setName($newProductName);

$entityManager->persist($product);
$entityManager->flush();

echo "Created Product with ID " . $product->getId() . "\n";