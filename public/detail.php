<?php require __DIR__ . '/header.php';
$id = $_POST['id'];

$product = selectOne("SELECT * from producten WHERE id = $id")
?>

<div class="container">
    <form action="<?php echo path('backend/deleteController.php'); ?>" method="POST">
        <input type="text" name="name" value="<?= $product['name'] ?>">  
        <input type="hidden" name="id" value="<?= $product['id'] ?>">
        <input type="submit">
    </form>
</div>



<?php require __DIR__ . '/footer.php'; ?>