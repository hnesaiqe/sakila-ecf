<?php
require './helpers/db.php';
include './views/head.php';
include './views/header.php';
?>
<section >
    <div class="col-md-12 text-center mx-auto my-5">
        <button class="btn btn-outline-info" name="btnCheck" type="submit">
            <h1>
                Consulter
            </h1>
        </button>
        <button class="btn btn-outline-secondary" name="btnRent" type="submit">
            <h1>
                Louer
            </h1>
        </button>
    </div>
</section>
<?php include './views/footer.php';
?>