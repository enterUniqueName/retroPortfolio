<!doctype html>
<html disabled-class="no-js" class="js" lang="en">

<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="description" content="Description goes here">
  <meta name="author" content="Dave Steele, SteeleMediaSolution@gmail.com">
  
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="icon" type="image/gif" href="assets/skull.gif"/>

  <link rel="stylesheet" href="shared/shared.css">
  <link rel="stylesheet" href="index.css">
</head>

<body id="js-body" class="index-page">

  <?php
    session_start();
    $counter_name = "counter.txt";

    // Check if a text file exists.
    // If not create one and initialize it to zero.
    if (!file_exists($counter_name)) {
      $f = fopen($counter_name, "w");
      fwrite($f,"0");
      fclose($f);
    }

    // Read the current value of our counter file
    $f = fopen($counter_name,"r");
    $counterVal = fread($f, filesize($counter_name));
    fclose($f);

    // Has visitor been counted in this session?
    // If not, increase counter value by one
    if(!isset($_SESSION['hasVisited'])){
      $_SESSION['hasVisited']="yes";
      $counterVal++;
      $f = fopen($counter_name, "w");
      fwrite($f, $counterVal);
      fclose($f);
    }
  ?>

  <nav class="navigation" >
    <p><a>LINKS</a></p>
    <p><a href="views/gallery/gallery.html">GALLERY</a></p>
    <p><a href="#">BIO</a></p>
    <p><a href="#">MAILING LIST</a></p>
  </nav>

  <main>
    <div class="lace">
      <img src="assets/lacebanner.gif" width="100%"/>
    </div>
    <div class="header">
      <div class="centaur">
        <img src="assets/centaur.gif"/>
      </div>
      <div class="inner-flex-container">
        <div class="lightening">
          <img src="assets/lightning.gif"/>
        </div>
        <div class="welcome">
          <img src="assets/welcome.gif"/>
        </div>
        <div class="lightening flip">
          <img src="assets/lightning.gif"/>
        </div>
        <div class="ankhbar">
          <img src="assets/ankhbar.gif"/>
        </div>
      </div>
      <div class="centaur flip">
        <img src="assets/centaur.gif"/>
      </div>
    </div>
    <div class="darkness-text">
      <img src="assets/darknessandstrangepictures.gif" width="100%"/>
    </div>
    <div class="dare-container">
      <div class="skull">
        <img src="assets/skull.gif"/>
      </div>
      <a href="views/gallery/gallery.html">
        <div class="dare-text">
          <img src="assets/doyoudare.gif" width="100%"/>
        </div>
      </a>
      <div class="skull flip">
        <img src="assets/skull.gif"/>
      </div>
      <div class="blood">
        <img src="assets/bloodbar4.gif"  width="100%"/>
      </div>
    </div>
    <div class="image-container">
      <div class="skull-candle">
        <img src="assets/candleonskull.gif" width="100%"/>
      </div>
      <a href="views/gallery/gallery.html">
        <div class="image-alex">
          <img src="assets/alexgif.gif" width="100%"/>
        </div>
      </a>
      <div class="skull-candle flip">
        <img src="assets/candleonskull.gif" width="100%"/>
      </div>
    </div>
    <div id="hitCounter">
      <p>You Are </br>Unlucky Visitor Number</p>
      <h4 id="hits"><?php echo $counterVal?></h4>
    </div>
    <div class="flames">
      <img src="assets/flames.gif" width="100%"/>
    </div>
  </main>

  <audio id="audio_element" src="assets/Closer-Edit.mp3" type="audio/mpeg" ></audio>

  <script src="shared/shared.js"></script>
  <script src="index.js"></script>

</body>

</html>