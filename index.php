<?php
require './helpers/database.php';
require './classes/Category.php';
require 'views/partials/head.php';
require 'views/partials/header.php';
?>

<section >
    <div class="col-md-12 text-center mx-auto my-5">
        <button class="btn btn-outline-info" name="btnCheck" type="submit" href="./views/consult.php">
            <h1>
                Consulter
            </h1>
        </button>
        <button class="btn btn-outline-secondary" name="btnRent">
            <a href="views/rent.php">LOUER</a>
        </button>
    </div>
</section>
<?php include './views/partials/footer.php';
?>