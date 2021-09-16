Page : rent.php
<?php
?>
<?php
require '../helpers/database.php';
require '../views/partials/head.php';
require '../classes/Category.php';
require '../views/partials/navbar.php';
require '../views/autocomplete.php';
// require '../classes/Film.php';
// require '../classes/Actor.php';
// require '../classes/Language.php';
// $con = new PDO("mysql:host=localhost;dbname=sakila", 'root', '');

?>

<form class="searchBar col-5 mx-auto bg-secondary bg-gradient m-5 p-5">
  <div class="input-group p-3">
    <span class="input-group-text w-25">Vendeur</span>
    <input class="form-control w-75" type="text" placeholder="Search by staff" id="staff_id" onkeyup="autocomplet()">
    <ul id="staff_list_id"></ul>
  </div>
  <div class="input-group p-3">
  <span class="input-group-text w-25">Client</span>
    <input class="form-control w-75" type="text" placeholder="Search by Customer" id="customer_id" onkeyup="autocomplet()">
    <ul id="customer_list_id"></ul>
  </div>
  <div class="input-group p-3">
  <span class="input-group-text w-25">Film</span>
    <input class="form-control w-75" type="text" placeholder="Search by Film one" id="country_id" onkeyup="autocomplet()">
    <ul class="dropdown-menu" id="country_list_id"></ul>
  </div>
</form>

<script>
  
  // autocomplet : Cette fonction sera exécutée à chaque fois que nous changeons le texte
  function autocomplet() {
    var keyword = $('#country_id').val();
    if (keyword != "") {
      $.ajax({
        url: 'search.php',
        type: 'POST',
        cache: false,
        data: {keyword:keyword},
        success:function(data){
          $('#country_list_id').show();
          $('#country_list_id').html(data);
        }
      });      
    } else {
        $("#country_list_id").html(""); // Vider le champ
      }
  }
  
  // set_item : this function will be executed when we select an item
  function set_item(item) {
    // change input value
    $('#country_id').val(item);
    // hide proposition list
    $('#country_list_id').hide();    
  }
</script> 


<!-- <form action="" method="post ">
  <div class="input-group my-3">
    <span class="input-group-text" id="basic-addon1">Vendeur</span>
    <input type="text" class="form-control" placeholder="Nom Prénom" aria-label="Nom Prénom"
      aria-describedby="basic-addon1" autocomplete="off" required>
  </div>
  <div class="input-group mb-3">
    <input type="text" class="form-control" placeholder="Nom Prénom" aria-label="Nom Prénom"
      aria-describedby="basic-addon1" autocomplete="off" required>
    <span class="input-group-text" id="basic-addon2">Client</span>
  </div>
  <div class="input-group mb-3">
    <span class="input-group-text" id="basic-addon2">@example.com</span>
    <input type="text" class="form-control" placeholder="Email client" aria-label="Recipient's username"
      aria-describedby="basic-addon2" autocomplete="off" required>
  </div>
  <div class="input-group mb-3">
    <input type="text" class="form-control" placeholder="Choix du film" aria-label="Nom Prénom"
      aria-describedby="basic-addon1" autocomplete="off" required>
    <span class="input-group-text" id="basic-addon2">Film</span>
  </div>

  <label for="basic-url" class="form-label">Your vanity URL</label>
  <div class="input-group mb-3">
    <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
  </div>

  <div class="input-group mb-3">
    <span class="input-group-text">$</span>
    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
    <span class="input-group-text">.00</span>
  </div>

  <div class="input-group mb-3">
    <input type="text" class="form-control" placeholder="Username" aria-label="Username">
    <span class="input-group-text">@</span>
    <input type="text" class="form-control" placeholder="Server" aria-label="Server">
  </div>

  <div class="input-group">
    <span class="input-group-text">With textarea</span>
    <textarea class="form-control" aria-label="With textarea"></textarea>
  </div>
</form> -->
<!-- Autocomplète


<form class="searchBar col-5 mx-auto">
    <div class="input_container">
        <input class="form-control m-2" type="text" placeholder="Search by Film" id="country_id" onkeyup="autocomplet()">
        <ul id="country_list_id"></ul>
    </div>
</form>


<script>
  
  // autocomplet : this function will be executed every time we change the text
  function autocomplet() {
    var keyword = $('#country_id').val();
    $.ajax({
      url: 'search.php',
      type: 'POST',
      data: {keyword:keyword},
      success:function(data){
        $('#country_list_id').show();
        $('#country_list_id').html(data);
      }
    });
  }
  
  // set_item : this function will be executed when we select an item
  function set_item(item) {
    // change input value
    $('#country_id').val(item);
    // hide proposition list
    $('#country_list_id').hide();
  }
</script>  -->

<?php include '../views/partials/footer.php'; ?>