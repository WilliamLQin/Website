<head>
  <title>Portfolio | William Qin</title>
  <?php include('php/imports.php') ?>
</head>

<body>

  <?php include('php/header.php') ?>

  <div>

    <div class="jumbotron vertical-center bg-img page-portfolio">
      <div class="text-box home-header">
        <div class="col-xs-9">
          <h2>Portfolio</h2>
        </div>
        <div class="col-xs-3">
        </div>
      </div>
    </div>

    <div class="jumbotron">
      <div class="container text-center text-spaced special-modules">

        <h2 class="bold">
          Here, you'll find a gallery of my projects!
        </h2>

        <div class="module-container module-1by1">
          <div class="module">
            <div class="overlay">
              <a href="#/" id="changer" name="laserfield" class="animated expand-container hidden-container button transparent">
                <div class="overlay-header">
                  <h3>
                    Laser Field
                  </h3>
                </div>
              </a>
            </div>
            <img src="/resources/Images/laserfield1.png" class="animated expand-image rounded border-black">
          </div>
        </div>

        <div class="module-container module-1by1">
          <div class="module">
            <div class="overlay">
              <a href="#/" id="changer" name="stux" class="animated expand-container hidden-container button transparent">
                <div class="overlay-header">
                  <h3>
                    Stux
                  </h3>
                </div>
              </a>
            </div>
            <img src="/resources/Images/stux1.png" class="animated expand-image rounded border-black">
          </div>
        </div>

      </div>
    </div>

    <div class="jumbotron section-darkgreen">
      <div class="container text-spaced">
        <div id="content-laserfield">
          <h2 class="bold">
            iOS App - Laser Field
          </h2>
          <div class="col-sm-6">
            <h3>
              "Dodge lasers in this new and amazing bounding game!" <br>
            </h3>
            <p>
              Unfortunately, you can't find this on the App Store anymore.
            </p>
          </div>
          <div class="col-sm-6">
            <img src="resources/Images/laserfield2.png">
          </div>
        </div>

        <div id="content-stux">
          <h2>
            iOS App - Stux
          </h2>
          <div class="col-sm-6">
            <h3>
              "Balance blocks in this new and incredible arcade stacker!" <br>
            </h3>
            <p>
              Unfortunately, you can't find this on the App Store anymore
            </p>
          </div>
          <div class="col-sm-6">
            <img src="resource/Images/stux2.png">
          </div>
        </div>
      </div>
    </div>

  </div>

  <?php include('php/footer.php') ?>

</body>
