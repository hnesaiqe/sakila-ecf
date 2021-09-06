Page : rent.php
<?php
include '../function.php';
require '../helpers/database.php';
require '../views/partials/head.php';
require '../classes/Category.php';
require '../views/partials/navbar.php';
require '../classes/Film.php';
require '../classes/Actor.php';
require '../classes/Language.php';
?>
<form action="" method="post ">
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
        <span class="input-group-text" id="basic-addon2">Film</span>
        <input type="text" class="form-control" placeholder="Choix du film" aria-label="Nom Prénom"
            aria-describedby="basic-addon1" autocomplete="off" required>
    </div>  
    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Nom Prénom" aria-label="Nom Prénom"
            aria-describedby="basic-addon1" autocomplete="off" required>
        <span class="input-group-text" id="basic-addon2">Client</span>
    </div>

    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username"
            aria-describedby="basic-addon2" autocomplete="off" required> 
        <span class="input-group-text" id="basic-addon2">@example.com</span>
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
</form>
<!-- <script>
$(document).ready(function () {
    // Send Search Text to the server
    $("#search").keyup(function () {
      let searchText = $(this).val();
      if (searchText != "") {
        $.ajax({
          url: " ",
          method: "post",
          data: {
            query: searchText,
          },
          success: function (response) {
            $("#show-list").html(response);
          },
        });
      } else {
        $("#show-list").html("");
      }
    });
    // Set searched text in input field on click of search button
    $(document).on("click", "a", function () {
      $("#search").val($(this).text());
      $("#show-list").html("");
    });
  });
</script> -->
<?php include '../views/partials/footer.php'; ?>