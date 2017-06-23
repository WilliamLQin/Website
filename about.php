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
        <div class="col-sm-6">
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
        <div class="col-sm-6">

          <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="/resources/Images/william1.JPG" alt="Swiss Alps">
              </div>

              <div class="item">
                <img src="/resources/Images/william2.JPG" alt="Mount St. Louis Peak">
              </div>

              <div class="item">
                <img src="/resources/Images/william3.JPG" alt="Bicentennial Capitol Mall State Park">
              </div>

              <div class="item">
                <img src="/resources/Images/william4.JPG" alt="Point Pelee">
              </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

        </div>
      </div>
    </div>

  </div>

  <?php include('php/footer.php') ?>

</body>
