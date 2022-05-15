<?php require __DIR__ . '/init.php';

if (!isset($_POST['name'])) {
    die('Voer een naam in!');
}

query("INSERT into producten (name , description, category_id) VALUES (:name, :description, :category_id)" ,[
    ':name'=> $_POST['name'],
    ':description' => $_POST['description'],
    ':category_id' => $_POST['categorie']
]);
redirect(path('public/products.php'));
