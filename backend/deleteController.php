<?php require __DIR__ . '/init.php';

$id = $_POST['id'];
$name = $_POST['name'];



query("UPDATE producten SET name = '$name' WHERE id = $id");
redirect(path('public/products.php'));
