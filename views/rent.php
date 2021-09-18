Page : rent.php
<?php
?>
<?php
require '../helpers/database.php';
require '../views/partials/head.php';
require '../classes/Category.php';
require '../views/partials/navbar.php';
require '../views/autocomplete.php';
require '../classes/Staff.php';
require '../classes/Film.php';
require '../classes/Customer.php';
// $con = new PDO("mysql:host=localhost;dbname=sakila", 'root', '');

$staffs = Staff::all();

?>

<form class="searchBar col-5 mx-auto bg-secondary rounded border border-info border-5 bg-gradient m-5 p-5">
  <div class="input-group p-3">
    <span class="input-group-text w-25">Vendeur</span>
    <select class="form-select" id="inputGroupSelect01" name="staffs">
      <?php foreach ($staffs as $data) { ?>
      <option value="<?= $data['staff_id'] ?>"> <?= $data['last_name']." ".$data['first_name'] ?> </option>
      <?php } ?>
    </select>
  </div>
  <div class="input-group p-3">
    <span class="input-group-text w-25">Client</span>
    <input class="form-control w-75" type="text" placeholder="Search by Customer" id="customer_id"
      onkeyup="autocompletCustomer()">
    <ul class="dropdown-menu " id="customer_list_id"></ul>
  </div>
  <div class="input-group p-3">
    <span class="input-group-text w-25">Film</span>
    <input class="form-control w-75" type="text" placeholder="Search by Film one" id="film_id" onkeyup="autocomplet()">
    <ul class="dropdown-menu" id="film_list_id"></ul>
  </div>
  <div class="input-group p-3">
    <span class="input-group-text w-25">Retour</span>
    <input class="form-control w-75" type="date">
  </div>

  <div class="col-12 p-3">
    <button type="submit" class="btnValider btn btn-outline-info ">Valider</button>
  </div>
</form>

<script>
  // autocomplet : Cette fonction sera exécutée à chaque fois que nous changeons le texte

  // AUTOCOMPLETE Films : 

  function autocomplet() {
    var keyword = $('#film_id').val();
    if (keyword != "") {
      $.ajax({
        url: 'autoFilms.php',
        type: 'POST',
        cache: false,
        data: {
          keyword: keyword
        },
        success: function (data) {
          $('#film_list_id').show();
          $('#film_list_id').html(data);
        }
      });
    } else {
      $("#film_list_id").html(""); // Vider le champ
    }
  }

  // set_item : this function will be executed when we select an item
  function set_item(item) {
    // change input value
    $('#film_id').val(item);
    // hide proposition list
    $('#film_list_id').hide();
  }

  // AUTOCOMPLETE Clients : 

  function autocompletCustomer() {
    var keyword = $('#customer_id').val();
    if (keyword != "") {
      $.ajax({
        url: 'autoCustomer.php',
        type: 'POST',
        cache: false,
        data: {
          keyword: keyword
        },
        success: function (data) {
          $('#customer_list_id').show();
          $('#customer_list_id').html(data);
        }
      });
    } else {
      $("#customer_list_id").html(""); // Vider le champ
    }
  }

  // set_item : this function will be executed when we select an item
  function set_item_customer(item) {
    // change input value
    $('#customer_id').val(item);
    // hide proposition list
    $('#customer_list_id').hide();
  }
</script>
<?php include '../views/partials/footer.php'; ?>