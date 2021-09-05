<body style="font-family:dank Mono">
  <div class="title text-center">
    <h1>
      SAKILA-DVD location
    </h1>
  </div>
  <nav class="navbar navbar-expand-lg navbar-light bg-info">
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
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
  <div class="container">