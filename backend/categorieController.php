<?php require __DIR__ . '/init.php';

if (!isset($_POST['name'])) {
    die('Voer een naam in!');
}

query('INSERT INTO categorie (name) VALUES (:name)', [
    ':name' => $_POST['name']
]);

redirect(path('public/categories.php'));
