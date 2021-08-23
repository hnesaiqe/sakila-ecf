<?php 
include '../function.php';
require '../helpers/database.php';
require '../views/partials/head.php';
require '../views/partials/header.php';
require '../classes/Film.php';
require '../classes/Actor.php'; 
require '../classes/Language.php'; 
?>

<?php 
$id = $_GET["id"];
// var_dump($id);
$film = Film::read($id);                     
              ?>
<div class="card my-3">
    <div class="row g-0">
        <div class="col-md-4 bg-light">
            <img src="../public/image/dvd-logo" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title fw-bold"><?= $film['title'] ?></h5>
                <?php 
                    $id = $_GET["id"];
                    // var_dump($id);
                    $language = Language::readByLanguage($id);
                    // var_dump($language); ?> 
                <p class="card-text text-end">Version : <?= $language['name'] ?></p>
                
                <p class="card-text text-end">
                    <?= "Prix de Vente: $".$film['replacement_cost']." - Prix de location: $".$film['rental_rate'] ?>
                </p>

                <hr class="col-md-6 mx-auto">
                <p class="text-decoration-underline fw-bold">Synopsis :</p>
                <p class="card-text">Date de sortie : <?= $film['release_year'] ?>
                </p>
                <p class="card-text"><?= $film['description'] ?></p>
                <hr class="col-md-6 mx-auto">
                <p class="text-decoration-underline fw-bold">Acteurs :</p>

                <?php  
                $filmId = (int)$film['film_id'];
                $actors = Actor::readByFilm($filmId);?>
                <p class="card-text">
                    <?php foreach($actors as $data) { ?>
                    <?= $data['first_name']." ".$data['last_name']." . " ?>
                    <?php } ?>
                </p>
                <hr class="col-md-6 mx-auto">


            </div>
        </div>
    </div>
</div>

<?php include '../views/partials/footer.php';?>