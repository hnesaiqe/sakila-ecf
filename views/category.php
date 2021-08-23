<?php 
include '../function.php';
require '../helpers/database.php';
require '../views/partials/head.php';
require '../views/partials/header.php';
require '../classes/Film.php';
require '../classes/Actor.php'; ?>

<div class="row">
    <?php 
        $id = $_GET["id"];
        var_dump($id);
        $category = Category::readByCat($id);
        var_dump($category);

        ?>
        <?php 
        foreach($category as $data) { 
            // var_dump($data);      
            ?>
      


    <h2 class="col-md-6"><?= $category['name']; ?></h2>
<?php }; ?>

</div>

<?php include '../views/partials/footer.php';?>