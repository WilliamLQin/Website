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
              <a href="#/" id="changer" name="popmidi" class="animated expand-container hidden-container button transparent">
                <div class="overlay-header">
                  <h3>
                    Pop MIDI
                  </h3>
                </div>
              </a>
            </div>
            <img src="/resources/Images/popmidi1.jpg" class="animated expand-image rounded border-black">
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
            <p>
              A virtual reality simulator for basic CPR training! <br>
              "Our app gamifies a basic CPR procedure, making it easily accessible with Google Cardboard!" <br>
              <br>
              Programmed in C# with Unity. <br>
              Used Google Cardboard, Leap Motion, and SketchUp. <br>
              Made with Ming (Michelle) Yi, Aanand Bajaj, and Samuel Sun. <br>
              <br>
              Submission for 36-hour hackathon UofTHacks IV. <br>
              Won Top 10 Overall Hack! (Out of ~80 teams) <br>
              <br>
              Learn more about this project <a href="https://www.hackerearth.com/fr/sprints/uofthacks-iv/dashboard/UofTTeam1/submission/">here</a>. <br>
            </p>
          </div>
          <br>
          <div class="col-sm-6">
            <img src="resources/Images/CPRVR2.jpg">
          </div>
        </div>

        <div id="content-popmidi">
          <div class="col-sm-6">
            <h2 class="bold">
              Hardware Creation - Pop MIDI
            </h2>
            <p>
              A pop can music box that can play MIDI files! <br>
              "This instrument brings a new sense of fun and uniqueness with its cool resonating sound and eco-friendly nature!" <br>
              <br>
              Hardware programmed in C/C++ with Arduino. <br>
              MIDI file reader programmed in Python. <br>
              Made with Simon (Zirui) Guo and Samuel Sun. <br>
              <br>
              Submission for 12-hour hackathon Cipher Local Hack Day. <br>
              Won Best Overall Hack with Mentor! (Out of ~20 teams) <br>
              <br>
              Learn more about this project <a href="https://devpost.com/software/popmidi">here</a>. <br>
            </p>
          </div>
          <br>
          <div class="col-sm-6">
            <img src="resources/Images/popmidi2.jpg">
          </div>
        </div>

        <div id="content-stux">
          <div class="col-sm-6">
            <h2 class="bold">
              iOS App - Stux
            </h2>
            <p>
              An engaging and minimalistic stacking game! <br>
              "Balance blocks in this new and incredible arcade stacker!" <br>
              <br>
              Programmed in Objective-C. <br>
              Made by myself. <br>
              <br>
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
            <p>
              A simple bounding game - you control your character with your finger! <br>
              "Dodge lasers in this new and amazing bounding game!" <br>
              <br>
              Programmed in Objective-C <br>
              Made by myself. <br>
              <br>
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
