<!DOCTYPE html>
<html>
<head>
	<title>Road Eye</title>
	<link rel="icon" href="./img/logo.jpg">
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">


	
	
		
</head>
<body>
	<link rel="stylesheet" type="text/css" href="index.css">
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
   <a class="navbar-brand" href="#">
    <img src="img/logo.jpg" alt="Logo" style="width:40px;">
  </a>
   <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Road Eye</a>
    </div>
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="traveller.php">Traveller</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Violator</a>
    </li>
  </ul>
   <form class="navbar-form navbar-left" style="padding-left: 10px;" method="POST" action="search.php">
  <div class="input-group">
    <input type="text" class="form-control" placeholder="Search" name="place">
    <div class="input-group-btn">
      <button class="btn btn-default" type="submit">
        <i  class="fa fa-search"></i>
      </button>
    </div>
  </div>
</form> 
  
</nav>
<div id="particles-js"></div>


<div id="events" class="offset">
	<div class="j">
		<div class="container">
		<div class="col-12 text-center">
			
		</div>
  		<div class="row text-center justify-content-center align-items-center">
				<div class="col-md-3 col-sm-6">
					<div class="events">
						<a href="tamilnadu.php"  style="text-decoration: none; color: #4d5461;">

						
						<p><img style="width:100%" src="img/tamilnadu.png"></p></a>
					</div>
				</div>

				<div class="col-md-3 col-sm-6">
					<div class="events">
						<a href="#"  data-toggle="modal" data-target="#two" style="text-decoration: none; color: #4d5461;">
						
						<p><img style="width:100%" src="img/kerala.png"></p></a>
					</div>
				</div>

				<div class="col-md-3 col-sm-6">
					<div class="events">
						<a href="#"  data-toggle="modal" data-target="#three" style="text-decoration: none; color: #4d5461;">
						
						<p><img style="width:100%" src="img/karnataka.png"></p></a>
					</div>
				</div>

				<div class="col-md-3 col-sm-6">
					<div class="events">
						<a href="#"  data-toggle="modal" data-target="#four" style="text-decoration: none; color: #4d5461;">
						
						<p><img style="width:100%" src="img/andhrapradesh.png"></p></a>
					</div>
				</div>
				
				<div class="col-md-3 col-sm-6">
					<div class="events">
						<a href="#"  data-toggle="modal" data-target="#five" style="text-decoration: none; color: #4d5461;">

						
						<p><img style="width:100%" src="img/maharastra.png"></p></a>
					</div>
				</div>
	
				<div class="col-md-3 col-sm-6">
					<div class="events">
						<a href="#"  data-toggle="modal" data-target="#six" style="text-decoration: none; color: #4d5461;">
						
						<p><img style="width:100%" src="img/madhyapradesh.png"></p></a>
					</div>
				</div>
				
				<div class="col-md-3 col-sm-6">
					<div class="events">
						<a href="#"  data-toggle="modal" data-target="#seven" style="text-decoration: none; color: #4d5461;">
						<p><img style="width:100%" src="img/uttarpradesh.png"></p></a>
					</div>
				</div>

				<div class="col-md-3 col-sm-6">
					<div class="events">
						<a href="#"  data-toggle="modal" data-target="#eight" style="text-decoration: none; color: #4d5461;">
						
						<p><img style="width:100%" src="img/gujarat.png"></p></a>
					</div>
				</div>

			</div>
		</div>
</div></div>

<div class="container">
	<div class="row">
		
	</div>
	<script type="text/javascript">
		// ParticlesJS Config.
particlesJS("particles-js", {
  "particles": {
    "number": {
      "value": 80,
      "density": {
        "enable": true,
        "value_area": 700
      }
    },
    "color": {
      "value": "#ffffff"
    },
    "shape": {
      "type": "circle",
      "stroke": {
        "width": 0,
        "color": "#000000"
      },
      "polygon": {
        "nb_sides": 5
      },
    },
    "opacity": {
      "value": 0.5,
      "random": false,
      "anim": {
        "enable": false,
        "speed": 1,
        "opacity_min": 0.1,
        "sync": false
      }
    },
    "size": {
      "value": 3,
      "random": true,
      "anim": {
        "enable": false,
        "speed": 40,
        "size_min": 0.1,
        "sync": false
      }
    },
    "line_linked": {
      "enable": true,
      "distance": 150,
      "color": "#ffffff",
      "opacity": 0.4,
      "width": 1
    },
    "move": {
      "enable": true,
      "speed": 6,
      "direction": "none",
      "random": false,
      "straight": false,
      "out_mode": "out",
      "bounce": false,
      "attract": {
        "enable": false,
        "rotateX": 600,
        "rotateY": 1200
      }
    }
  },
  "interactivity": {
    "detect_on": "canvas",
    "events": {
      "onhover": {
        "enable": true,
        "mode": "grab"
      },
      "onclick": {
        "enable": true,
        "mode": "push"
      },
      "resize": true
    },
    "modes": {
      "grab": {
        "distance": 140,
        "line_linked": {
          "opacity": 1
        }
      },
      "bubble": {
        "distance": 400,
        "size": 40,
        "duration": 2,
        "opacity": 8,
        "speed": 3
      },
      "repulse": {
        "distance": 200,
        "duration": 0.4
      },
      "push": {
        "particles_nb": 4
      },
      "remove": {
        "particles_nb": 2
      }
    }
  },
  "retina_detect": true
});
	</script>
	
</div>
</body>
</html>