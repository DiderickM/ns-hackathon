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
        $c = $_POST['q'];
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
          <h1>Uw loyalty</h1>
          <button type="button" class="btn btn-info" onclick="scrollinto()">Scroll down</button>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="main main-raised">
  <div class="container" id="main">
    <div class="section text-center">
        <img src="kroontje.png" width="80%"><br>
      <h2 class="title">Gefeliciteerd!</h2>
      <p style="font-size: 18px;">U heeft zojuist <b>100 koffiepunten</b> verdiend!</p>
  </div>
  <div class="section text-center" style="padding-top:0px;">
    <h1 class="title" style="padding: 0; margin: 0;">470</h1>
    <h2 class="title" style="padding-top: 0; margin-top: 0;">punten</h2>
    <p style="font-size: 18px;">Momenteel heeft u <b>470 punten</b> verdiend met uw bijdrage aan de sociale veiligheid en het welzijn van uw medepassagiers.</p>
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