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
        <div class="col-sm-8">
          <h2 class="bold">
            Hi, I'm William Qin.
          </h2>
          <h3>
            I’m a high school student, programmer, and efficiency enthusiast!
            <br>
            With 2 independently published games under my belt, I am actively experimenting and learning new skills to develop interesting games, prototype hardware, and create websites.
            <br>
            Outside from active development, I like to play music, do martial arts, snowboard in the winter, and absorb all kinds of art.
          </h3>
        </div>
        <div class="col-sm-4">
          <?php
          $image_count = 4;
          $image_random = rand(1, $image_count)

          echo "<img src='/resources/Images/william$image_random.JPG"
          ?>
          <!-- <img src="/resources/Images/william1.JPG"> -->
        </div>
      </div>
    </div>

  </div>

  <?php include('php/footer.php') ?>

</body>
