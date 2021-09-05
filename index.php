<?php
require './helpers/database.php';
require './classes/Category.php';
require 'views/partials/head.php';
require 'views/partials/navbar.php';
require 'views/partials/home.php';
?>
<section>
    
    <div class="col-md-12 text-center mx-auto my-5">
        <a  href="./views/consult.php">
            <button class="btn btn-outline-info" name="btnCheck" type="submit">
                <h1>Consulter</h1>
            </button>
        </a>
        <a href="views/rent.php">
            <button class="btn btn-outline-secondary" name="btnRent">
                <h1>Louer</h1>
            </button>
        </a>
        
    </div>
</section>

<?php include './views/partials/footer.php';
?>