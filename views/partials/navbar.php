<body style="font-family:dank Mono">
  <div class="title text-center">
    <h1>
      SAKILA-DVD location
    </h1>
  </div>
<!--   
<form class="searchBar col-5 mx-auto">
    <div class="input_container">
        <input class="form-control m-2" type="text" placeholder="Search by Film one" id="country_id" onkeyup="autocomplet()">
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


  <nav class="navbar navbar-expand-lg navbar-light bg-info ">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Ecf 7</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../">Home</a>
          </li>
          <li class="nav-item">
            <?php $categories = Category::all();
                    // var_dump($categories); ?>
            <?php foreach($categories as $data) { ?>
            <a class="nav-link active" aria-current="page" href="../views/category.php?id=<?= $data["category_id"] ?>"><?= $data['name'] ?></a>
          </li>
          <?php } ?>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container">