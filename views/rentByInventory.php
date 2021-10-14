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

// $con = new PDO("mysql:host=localhost;dbname=sakila", 'root', '');

$id = $_GET["store"];
$staff = Staff::read($id);

$inventory_get = (int)$_GET['store'];
$inventory = Inventory::readByStore($inventory_get);
?>
<pre>
         <?php
                  // print_r($inventory);
                  // print_r($staff);
         ?>
</pre>


<form class="searchBar col-5 mx-auto bg-secondary rounded border border-info border-5 bg-gradient m-5 p-5" action=""
   methode="POST">

   <div class="input-group p-3">
      <span class="input-group-text w-25">Vendeur</span>
      <select class="form-select" id="inputGroupSelect01" name="staffs">
         <option name="staffs value=" <?=$staff['store_id'] ?>">
            <?= $staff['last_name']." ".$staff['first_name'] ?>
         </option>
      </select>
   </div>
   <div class="input-group p-3">
      <span class="input-group-text w-25">Client</span>
      <input class="form-control w-75" name="customer" type="text" placeholder="Search by Customer" id="customer_id"
         onkeyup="autocompletCustomer()">
      <ul class="dropdown-menu " id="customer_list_id"></ul>
   </div>
   <div class="input-group p-3">
      <span class="input-group-text w-25">Film</span>
      <input class="form-control w-75" name="film" type="text" placeholder="Search by Film one" id="film_id"
         onkeyup="autocomplet()">
      <ul class="dropdown-menu" id="film_list_id"></ul>
   </div>
   <div class="input-group p-3">
      <span class="input-group-text w-25">
         Retour
      </span>
      <input class="form-control w-75" name="date_retour" type="date">
   </div>
   <div class="col-12 p-3">
      <button type="submit" name="envoyer" value="envoyer" class="btnValider btn btn-outline-info ">
         Valider
      </button>
   </div>
</form>

<?php

var_dump($_GET);
if(isset($_REQUEST['envoyer'])) {
   $staff_id     = (int)$_GET['staffs'];
   $customer_id  = (int)$_GET['customer'];
   $film_id      = (int)$_GET['film'];
   $return_date  = date($_GET['date_retour']);

   var_dump($staff_id);
   var_dump($customer_id);
   var_dump($film_id);
   var_dump($return_date);

   echo '<div class="alert alert-primary" role="alert"> Sa coool !!!! </div>';
   //   $rent = Rental::insert($staff_id, $customer_id, $film_id, $return_date);

} else {
         echo '<div class="alert alert-warning" role="alert"> Tu taaaape </div>';
}

?>
<script>
   // autocomplet : Cette fonction sera exécutée à chaque fois que nous changeons le texte

   // AUTOCOMPLETE Films 

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

   // radio
</script>
<?php include '../views/partials/footer.php'; ?>