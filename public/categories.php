<?php require __DIR__ . '/header.php'; 

 $categories = select("SELECT * from categorie")
?>

<div class="container">
    <h1>Al onze categoriën:</h1>
    <?php foreach($categories as $categorie): ?>
        <form method = "post" action = "<?php echo path('backend/deleteCategorieController.php'); ?>">
        <input readonly type="text" value="<?= $categorie['name'] ?>">
            <input type="hidden" name="id" value="<?= $categorie['id'] ?>" />
            <input  class="btn btn-danger" type="submit" value="Verwijder">
            </form>
            <br>
    <?php endforeach; ?>
    <h2>Voeg een nieuwe categorie toe:</h2>

    <form action="<?php echo path('backend/categorieController.php'); ?>" method="POST">
        <div class="mb-3">
            <label for="name" class="form-label">Nieuwe categorie</label>
            <input type="text" class="form-control" id="name" name="name">
        </div> 
        <input type="submit">
    </form>
</div>


   
                     
               


<?php require __DIR__ . '/footer.php'; ?>