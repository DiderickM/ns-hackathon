<!doctype html>
<html lang="nl">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Breinindetrein </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="ns/css/main.css" />
    <script src="ns/js/main.js"></script>

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->

    <!-- materialize -->
    <link href="ns/assets/css/material-kit.css?v=2.0.4" rel="stylesheet" />

    <!-- Fonts and icons -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

</head>
  <body> 
  <nav class="navbar navbar-color-on-scroll navbar-transparent fixed-top navbar-expand-lg"  color-on-scroll="100">
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


<div class="page-header header-filter" data-parallax="true" style="background-image: url('ns/content/nstrein.jpg')">
  <div class="container">
    <div class="row">
      <div class="col-md-8 ml-auto mr-auto">
        <div class="brand text-center">
          <h1>Intercity Utrecht Centraal | Perron 13</h1>
            
        </div>
      </div>
    </div>
  </div>
</div>

<div class="main main-raised" id="main">
  <div class="container">
    <div class="section text-center">
    <div id="trainSegments">
		<div class="w3-bar">
		<h1 class="w3-bar-item">1</h1><img onmouseover="hover(this)" onmouseout="exit(this)" id="frontEnd" src="content/train/ALow.png" class="w3-bar-item" style="width: 150px">
		<div id="frontText" style="height:0px">
			
		</div>
		</div>
			<div class="class1 w3-bar">
    			<p id="textVrij1">Plaatsen vrij: <i class="material-icons">thumb_up</i></p>
    		</div><div class="w3-bar">
		<h1 class="w3-bar-item">2</h1><img onmouseover="hover(this)" onmouseout="exit(this)" id= "coupe1" src="content/train/CLow.png" class="w3-bar-item" style="width: 150px">
		</div>
			<div class="class2 w3-bar">
    			<p id="textVrij2">Plaatsen vrij: <i class="material-icons">thumb_up</i></p>
    		</div>
		<div class="w3-bar">
		<h1 class="w3-bar-item">3</h1><img onmouseover="hover(this)" onmouseout="exit(this)" id="coupe2" src="content/train/CMedium.png" class="w3-bar-item" style="width: 150px">
		</div>
			<div class="class3 w3-bar">
    			<p id="textVrij3">Plaatsen vrij: <i class="material-icons">thumbs_up_down</i></p>
    		</div><div class="w3-bar">
		<h1 class="w3-bar-item">4</h1><img onmouseover="hover(this)" onmouseout="exit(this)" id="coupe3" src="content/train/CHigh.png" class="w3-bar-item" style="width: 150px">
		</div>
			<div class="class4 w3-bar">
    			<p id="textVrij4">Plaatsen vrij: <i class="material-icons">thumbs_up_down</i></p>
    		</div><div class="w3-bar">
		<h1 class="w3-bar-item">5</h1><img onmouseover="hover(this)" onmouseout="exit(this)" id="backEnd" src="content/train/BLow.png" class="w3-bar-item" style="width: 150px">
		</div>
			<div class="class5 w3-bar">
    			<p id="textVrij4">Plaatsen vrij: <i class="material-icons">thumb_up</i></p>
    		</div>
	</div>		
	</div>
    </div>
    <div class="container">
      <div class="progress">
      <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    <div class="container" style="display: inline;">  
      <p class="float-right">Utrecht</p>
      <p class="float-left">Rotterdam Centraal</p>
    </div>
    </div>
  </div>
</div>

<footer class="footer footer-default" >
</footer>
<!--   Core JS Files   -->
<script src="ns/assets/js/core/jquery.min.js" type="text/javascript"></script>
<script src="ns/assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="ns/assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
<script src="ns/assets/js/plugins/moment.min.js"></script>
<!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
<script src="ns/assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="ns/assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
<!--  Google Maps Plugin  -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
<script src="ns/assets/js/material-kit.js?v=2.0.4" type="text/javascript"></script></body>

<script type="text/javascript">
		function hover(x){
			x.style.width = "180px";
			
		}

		function exit(x){
			x.style.width = "150px";
		}

	</script>
</html>