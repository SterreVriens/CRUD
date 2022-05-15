<?php require __DIR__ . '/header.php'; 

    $products= select("SELECT * FROM producten");
    $categories = select("select * from categorie");

?>

<div class="container">
    <h1>Al onze producten:</h1>
    <form action="<?php echo path('public/detail.php'); ?>" method="POST">
    <?php foreach($products as $product): ?>
        <input type="hidden"  name="id" value="<?=$product['id']?>">
        <input type="submit" value="<?=$product['name']?>">
    <?php endforeach; ?>
    </form>
    

    <h2>Maak een nieuw product aan:</h2>
    <form action="<?php echo path('backend/productsController.php'); ?>" method="POST">
        <label for="name">Naam product</label>
        <input type="text" name="name" id="name">
        <br>
        <label for="description">Beschrijving product</label>
        <textarea name="description" id="description" rows="3"></textarea>
        <br>
        <label for="categorie">Kies een categorie voor het product</label>
        <select name="categorie">
            <?php foreach($categories as $category): ?>
                <option value="<?=$category['id'] ?>"><?= $category['name'] ?></option>
            <?php endforeach;?>
        </select>
        <br>
        <input type="submit">
    </form>
</div>



<?php require __DIR__ . '/footer.php'; ?>