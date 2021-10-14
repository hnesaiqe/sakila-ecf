<?php
require '../helpers/database.php';
require '../views/partials/head.php';
require '../classes/Category.php';
require '../views/partials/navbar.php';
require '../classes/Staff.php';
require '../classes/Film.php';
require '../classes/Customer.php';
require '../classes/Rental.php';
require '../classes/Inventory.php';
?>

<form class="searchBar col-5 mx-auto bg-secondary rounded border border-info border-5 bg-gradient m-5 p-5"
  action="rentByInventory.php" methode="POST">
  <!-- radio-->
  <div class="form-check">
    <input class="form-check-input" type="radio" name="store" id="flexRadioDefault1" value="1">
    <label class="form-check-label" for="flexRadioDefault1">
      Store 1
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="store" id="flexRadioDefault2" value="2" checked>
    <label class="form-check-label" for="flexRadioDefault2">
      Store 2
    </label>
  </div>
  <div class="col-12 p-3">
    <button type="submit" value="envoyer" class="btnValider btn btn-outline-info ">Valider</button>
  </div>
</form>

<?php include '../views/partials/footer.php'; ?>