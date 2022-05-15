<?php require __DIR__ . '/../backend/init.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ons Blog</title>

    <link rel="stylesheet" href="<?php echo path('public/assets/style.css'); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <header class="navbar navbar-expand-lg navbar-light bg-light">
        <img src="<?php echo path('public/assets/placeholder.png'); ?>" alt="website logo" class="logo" />
        <h1 class="navbar-brand">Ons Blog</h1>

        <nav>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li  class="nav-item">
                    <a class="nav-link" href="<?php echo path('public/index.php'); ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo path('public/categories.php'); ?>">Categoriën</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo path('public/products.php'); ?>">Producten</a>
                </li>
                

            </ul>
        </nav>
    </header>
    
    <main>