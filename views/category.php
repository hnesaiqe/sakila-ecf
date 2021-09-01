<?php 
include '../function.php';
require '../helpers/database.php';
require '../views/partials/head.php';
require '../classes/Category.php';
require '../views/partials/header.php';
require '../classes/Film.php';
require '../classes/Actor.php';
?>



<div class="row">
    <?php 
        $id = $_GET["id"];
        // var_dump($id);
        $category = Category::readByCats($id);
        // var_dump($category);
        // $film = Film::readById($id);
        // print_r($film);
  
        ?>

    <!-- <?= $data['category_id'] ?> -->
    <!-- Tableau de récap -->

    <table class="table table-striped table-primary">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Film</th>
                <th scope="col">Caractéristiques</th>
                <th scope="col">Année</th>
                <th scope="col text-center">Action</th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <?php 
        foreach($category as $cat) { 
            //  var_dump($cat);      
    ?>
                <th scope="row"><img src="public/image/dvd-logo.png" alt="" srcset=""></th>
                <?php $films = Film::readByCatId($id);
                var_dump($films.'<br>'); 
                // $az = $films['film_id']; 
                ?>
                <?php foreach($films as $data) { ?>
                <td><?= $data['title'] ?></td>
                <td><?= $data['special_features'] ?></td>
                <td><?= $data['release_year'] ?></td>
                <td class=" "><i class="far fa-eye"></i></td>

                <?php } ?>
            </tr>
            <!-- ************test************ -->
            <!-- <p class="col-md-6"><?= $cat['name']; ?></p> -->
                    <?php }; ?>
            
        </tbody>
    </table>
    

</div>

<?php include '../views/partials/footer.php';?>