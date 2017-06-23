<head>
  <title>About | William Qin</title>
  <?php include('php/imports.php') ?>
</head>

<body>

  <?php include('php/header.php') ?>

  <div>

    <div class="jumbotron vertical-center bg-img page-about">
      <div class="text-box home-header">
        <div class="col-xs-9">
          <h2>About</h2>
        </div>
        <div class="col-xs-3">
        </div>
      </div>
    </div>

    <div class="jumbotron">
      <div class="container text-spaced">
        <h1>
          <?php
            echo file_get_contents('resources/Text/about-header.txt', FILE_USE_INCLUDE_PATH)
          ?>
        </h1>
        <h3>
          <?php
            echo file_get_contents('resources/Text/about-body.txt', FILE_USE_INCLUDE_PATH);
          ?>
          asdf
        </h3>
      </div>
    </div>

  </div>

  <?php include('php/footer.php') ?>

</body>
