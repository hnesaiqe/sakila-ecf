<?php 
include '../function.php';
require '../helpers/database.php';
require '../views/partials/head.php';
require '../classes/Category.php';
require '../views/partials/navbar.php';
require '../classes/Film.php';
require '../classes/Actor.php'; ?>

<?php 
$conn = pdo_connect_mysql();
if ($conn) {
    echo ' yes!!';
    }else {
        echo "casse toi de la!!!";
    };
?>

<div class="row">
    <?php $films = Film::all(); 
        foreach($films as $data) { 
            // var_dump($data);      
            ?>
    <div class="card m-3 mx-auto text-center" style="width: 18rem;">
        <h5 class="card-title text-center"><strong><?= $data['title']; ?></strong></h5>
        <img src="../public/image/dvd-logo.png" class="card-img-top" alt="dvd">
            <div class="col-md-12 d-flex text-center">
                <h2 class="col-md-6"><?= $data['rental_rate']; ?></h2>
                <h2 class="col-md-6"><?= $data['name']; ?></h2>
            </div>
        <div class="card-body overflow-hidden h-25 text-center">
            <p class="card-text">Année de sortie : <?= $data['release_year']; ?></p>
            <?php
                // var_dump((int)$data['film_id']);
                $filmId = (int)$data['film_id'];
                $actors = Actor::readByFilm($filmId);
                // var_dump($actors);  ?>
                <p class="text-decoration-underline">
                Acteur : <br>  
                </p>                         
                <?php foreach($actors as $data) { ?>
                    <small><?= $data['first_name'] ." ". $data['last_name'] ?>
                    <br>
                    </small>
            <?php } ?>
            <div class="btn col-md-12 text-end">
                <a href="filmShow.php?id=<?= $filmId ?>" class="btn btn-primary">SEE MORE</a>
            </div>
        </div>
    </div>
    <?php } ?>
</div>

<?php include '../views/partials/footer.php';?>