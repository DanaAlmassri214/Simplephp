<?php
$Name = "Dana Almassri";
$Age = "21";
$Major = "Information Technology";

echo "Name: $Name\n";
echo "Age: $Age\n";
echo "Major: $Major\n";

$products = [
    ["name" => "Lipstick", "price" => 5],
    ["name" => "Foundation", "price" => 80],
    ["name" => "Concealer", "price" => 100]
];

foreach ($products as $product) {
    echo "Product: " . $product["name"] . " - Price: " . $product["price"] . "$\n";
}
?>
