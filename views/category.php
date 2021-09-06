<?php 
include '../function.php';
require '../helpers/database.php';
require '../views/partials/head.php';
require '../classes/Category.php';
require '../views/partials/navbar.php';
require '../classes/Film.php';
require '../classes/Actor.php';
require '../classes/Film_category.php';
?>
<?php 
$conn = pdo_connect_mysql();
if ($conn) {
    echo ' yes!!';
    }else {
        echo "casse toi de la!!!";
    };
?>


<div class="row">
    <?php 
        $id = $_GET["id"];
        // var_dump($id);
        $filmCategory = Film_category::readByFilmCat($id);
    ?>

    <!-- Tableau de récap -->

    <table class="table table-striped table-primary">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Film</th>
                <th scope="col">Caractéristiques</th>
                <th scope="col">Année</th>
                <th scope="col" class="text-center">Action</th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <?php foreach($filmCategory as $data) { ?>
                <th class="col-1"><img class=" img-thumbnail w-25" src="../public/image/dvd-logo.png" alt="" srcset=""></th>
                <td class="col-4"><?= $data['title'] ;?></td>
                <td class="col-5"><?= $data['special_features'] ;?></td>
                <td class="col-1"><?= $data['release_year'] ;?></td>
                <td class="col-1"><i class="far fa-eye d-flex justify-content-center"></i></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<?php include '../views/partials/footer.php';?>