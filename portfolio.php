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
        <br>

        <div class="module-container module-1by1">
          <div class="module">
            <div class="overlay">
              <a href="#/" id="changer" name="cprvr" class="animated expand-container hidden-container button transparent">
                <div class="overlay-header">
                  <h3>
                    CPR-VR
                  </h3>
                </div>
              </a>
            </div>
            <img src="/resources/Images/CPRVR1.jpg" class="animated expand-image rounded border-black">
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

      </div>
    </div>

    <script src="/js/portfolio.js"></script>

    <div class="jumbotron section-darkgreen">
      <div class="container text-spaced">

        <div id="content-cprvr">
          <div class="col-sm-6">
            <h2 class="bold">
              Unity App - CPR-VR
            </h2>
            <h3>
              A virtual reality simulator for basic CPR training! <br>
              "Our app gamifies a basic CPR procedure, making it easily accessible with Google Cardboard!" <br>
              Programmed in C# with Unity. <br>
              Used Google Cardboard, Leap Motion, and SketchUp. <br>
              Made with Ming (Michelle) Yi, Aanand Bajaj, and Samuel Sun. <br>
            </h3>
            <br>
            <p>
              Learn more about this project <a href="https://www.hackerearth.com/fr/sprints/uofthacks-iv/dashboard/UofTTeam1/submission/">here</a>. <br>
            </p>
          </div>
          <br>
          <div class="col-sm-6">
            <img src="resources/Images/CPRVR2.jpg">
          </div>
        </div>

        <div id="content-stux">
          <div class="col-sm-6">
            <h2 class="bold">
              iOS App - Stux
            </h2>
            <h3>
              An engaging and minimalistic stacking game! <br>
              "Balance blocks in this new and incredible arcade stacker!" <br>
              Programmed in Objective-C. <br>
              Made by myself. <br>
            </h3>
            <br>
            <p>
              (Unfortunately, you can't find this on the App Store anymore.) <br>
            </p>
          </div>
          <br>
          <div class="col-sm-6">
            <img src="resources/Images/stux2.png">
          </div>
        </div>

        <div id="content-laserfield">
          <div class="col-sm-6">
            <h2 class="bold">
              iOS App - Laser Field
            </h2>
            <h3>
              A simple bounding game - you control your character with your finger! <br>
              "Dodge lasers in this new and amazing bounding game!" <br>
              Programmed in Objective-C <br>
              Made by myself. <br>
            </h3>
            <br>
            <p>
              (Unfortunately, you can't find this on the App Store anymore.) <br>
            </p>
          </div>
          <br>
          <div class="col-sm-6">
            <img src="resources/Images/laserfield2.png">
          </div>
        </div>


      </div>
    </div>

  </div>

  <?php include('php/footer.php') ?>

</body>
