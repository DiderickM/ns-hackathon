<!doctype html>
<html lang="nl">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Breinindetrein </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <script src="js/main.js"></script>

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->

    <!-- materialize -->
    <link href="assets/css/material-kit.css?v=2.0.4" rel="stylesheet" />

    <!-- Fonts and icons -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

</head>
    <?php
        $c = $_GET['q'];
    ?>
  <body><nav class="navbar navbar-color-on-scroll navbar-transparent fixed-top navbar-expand-lg"  color-on-scroll="100">
      <script>scrollinto()</script>
  <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand">NS help</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Opties</span>
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>
        </button>
      </div>

      <div class="collapse navbar-collapse">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a href="#" class="nav-link">
                  <i class="material-icons"></i> Template
              </a>
            </li>
          </ul>
      </div>
  </div>
</nav>


<div class="page-header header-filter" data-parallax="true" style="background-image: url('content/nstrein.jpg')">
  <div class="container">
    <div class="row">
      <div class="col-md-8 ml-auto mr-auto">
        <div class="brand text-center">
          <h1>Info over uw trein</h1>
          <button type="button" class="btn btn-info" onclick="location.href = '../info2.php';">Info pagina</button>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8 ml-auto mr-auto">
        <div class="brand text-center">
          <h1>Wat wilt u melden?</h1>
          <button type="button" class="btn btn-info" onclick="scrollinto()">Scroll down</button>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="main main-raised">
  <div class="container" id="main">
    <div class="section text-center">
      <h2 class="title">Wat wilt u melden?</h2>
      <form action="../add_data.php" method="POST" enctype="multipart/form-data">
    <label for="Afval">    
        <div class="inp blue" id="1">
            <input id="Afval" type="radio" name="a" value="Afval" class="btn btn-primary btn-lg" style="background-color: red;" onclick="selectB('Afval')">
            <i class="material-icons">delete_sweep</i>
            <br> Afval
        </div>
    </label>
    <label for="Agressie">
        <div class="inp blue" id="2">
            <input id="Agressie" type="radio" name="a" value="Agressie" class="btn btn-primary btn-lg" style="background-color: red;" onclick="selectB('Agressie')">
            <i class="material-icons">mood_bad</i>
            <br> Agressie
        </div>
    </label>
    <label for="Noodgeval">
        <div class="inp blue" id="3">
            <input id="Noodgeval" type="radio" name="a" value="Noodgeval" class="btn btn-primary btn-lg" style="background-color: red;" onclick="selectB('Noodgeval')">
            <i class="material-icons">favorite_border</i>
            <br> Noodgeval
        </div>
    </label>
    <label for="Schade">
        <div class="inp blue" id="4">
            <input id="Schade" type="radio" name="a" value="Schade" class="btn btn-primary btn-lg" style="background-color: red;" onclick="selectB('Schade')">
            <i class="material-icons">report_problem</i>
            <br> Schade
        </div>  
    </label>
    <label for="Temperatuur">
        <div class="inp blue" id="5">
            <input id="Temperatuur" type="radio" name="a" value="Temperatuur" class="btn btn-primary btn-lg" style="background-color: red;" onclick="selectB('Temperatuur')">
            <i class="material-icons">ac_unit</i></i>
            <br> Temperatuur
        </div>
    </label>
    <label for="Foute_informatie">
        <div class="inp blue" id="6">
            <input id="Foute_informatie" type="radio" name="a" value="Foute_informatie"  class="btn btn-primary btn-lg" style="background-color: red;" onclick="selectB('Foute_informatie')">
            <i class="material-icons">error_outline</i></i>
            <br> Misinformatie
        </div>
    </label>
    </div>
    
  </div>
  <div class="container" id="comment">
    <div class="section text-center">
      <h2 class="title">Voeg commentaar toe</h2>
        <div class="form-group">
            <label for="exampleInputEmail1">commentaar</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="addcomment" placeholder="Enter comment" name="t">
            <small id="addcomment" class="form-text text-muted">Voeg hier meer data toe over de klacht/opmerking</small>
        </div>
        <div class="form-group">
          <label for="exampleInputFile">foto</label>
          <input type="file" name="foto" id="exampleInputFile" aria-describedby="addfoto">
          <small id="addfoto" class="form-text text-muted">Voeg hier een foto toe</small>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <input type="hidden" name="c" value=<? echo '"' . $c . '"'; ?>>
        </form>
  </div>
</div>



<footer class="footer footer-default" >
</footer>
<!--   Core JS Files   -->
<script src="assets/js/core/jquery.min.js" type="text/javascript"></script>
<script src="assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
<script src="assets/js/plugins/moment.min.js"></script>
<!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
<script src="assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
<script src="assets/js/material-kit.js?v=2.0.4" type="text/javascript"></script></body>
</html>