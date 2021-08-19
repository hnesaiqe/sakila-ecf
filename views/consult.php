<?php 
include '../function.php';
require '../helpers/database.php';
require '../views/partials/head.php';
require '../views/partials/header.php';
require '../classes/Film.php'; ?>

<?php 
$conn = pdo_connect_mysql();
if ($conn) {
    echo ' yes!!';
    }else {
        echo "casse toi de la!!!";
    };
  try {     
    $stmt = $conn->prepare('SELECT * FROM film');
    $stmt->execute([]);
    $film = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }catch(PDOException $e) {
      echo "Error: " . $e->getMessage();
    }   
?>


<div class="row">
    <?php foreach($film as $data) : ?>
        <div class="card col-3 m-3 mx-auto" style="width: 18rem;">
            <img src="../public/image/dvd-logo" class="card-img-top" alt="dvd">
            <h2><?= $data['rental_rate']; ?></h2>
            <div class="card-body">
                <h5 class="card-title"><?= $data['title']; ?></h5>
                <p class="card-text"><?= $data['description']; ?></p>
                <a href="#" class="btn btn-primary">SEE MORE</a>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

<?php include '../views/partials/footer.php'; ?>