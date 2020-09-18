<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">  <!-- linked css file -->

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


</head>


<body>

<!-- bootstrap documentation Navbar-->
<?php        include 'menu.php';              ?>


<!--Carousel -->
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/carousel/caroimg4.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Dzukou Valley</h3>
        <p>The trek was amazing !!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/carousel/caroimg3.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Root Brigde</h3>
        <p>We had a great time there !!</p>
      </div>   
    </div>
	<div class="carousel-item">
      <img src="images/carousel/caroimg2.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Gurudongmar Lake</h3>
        <p>Thank You, Sikkim !!</p>
      </div>   
    </div>
    
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>


<!-- About Section -->
<section class="m-5">
	<div >
		<h2 class="text-center"> About Us</h2>
	</div>
	<div class="row mt-5">
		<div class="col-lg-6 col-12">
			<img src="images/my.jpg" class="img-fluid aboutimg" >
		</div>
		<div class="col-lg-6 col-12">
			<h2 class="display-5"> We are NorthEast Trip Advisor </h2>
			<p class="py-4"> We will help you to plan your every trip. India's North East 
				is a land of undulating hills and plains with luxuriant green cover and a wide 
				variety or rare and exotic flora and fauna.  </p>
			<a href="about.php" class="btn btn-success">Wanna Know Us</a>		<!--about.php-->
		</div>
	</div>
</section>


<!-- My plans -->
<!--bootstrap cards-->
<section class="m-5">
	<div class="pt-5">
		<h2 class="text-center"> Our Travel Plan </h2>
	</div>
	<div class="mt-5 container-fluid">
		<div class="row">
			 <div class="col-lg-4 col-md-4 col-12">
			 	<div class="card" >
				  <img class="card-img-top" src="images/plan/sikkim.jpg" alt="Card image">
				  <div class="card-body">
				    <h4 class="card-title">Sikkim</h4>
				    <p class="card-text">Gangtok, North Sikkim, East Sikkim</p>
				    <a href="#" class="btn btn-primary">Know More</a>
				  </div>
				</div>
			 </div>
			  <div class="col-lg-4 col-md-4 col-12">
			 	<div class="card" >
				  <img class="card-img-top" src="images/plan/meghalaya.jpg" alt="Card image">
				  <div class="card-body">
				    <h4 class="card-title">Meghalaya</h4>
				    <p class="card-text">Shillong, Cherrapunji, Dawki</p>
				    <a href="#" class="btn btn-primary">Know More</a>
				  </div>
				</div>
			 </div>
			  <div class="col-lg-4 col-md-4 col-12">
			 	<div class="card" >
				  <img class="card-img-top" src="images/plan/dzukou.jpg" alt="Card image">
				  <div class="card-body">
				    <h4 class="card-title">Dzukou Valley</h4>
				    <p class="card-text">Dimapur, Kohima, Zakhama</p>
				    <a href="#" class="btn btn-primary">Know More</a>
				  </div>
				</div>
			 </div>
		</div>
	</div>
</section>


<!-- My gallery -->
<section class="m-5">
	<div class="pt-5">
		<h2 class="text-center">Our Gallery</h2>
	</div>
	<div class="row mt-5">
		<div class="col-lg-4 col-md-4 col-12  mb-4">
			<img src="images/gallery/1.jpg" class="img-fluid">
		</div>
		<div class="col-lg-4 col-md-4 col-12  mb-4">
			<img src="images/gallery/2.jpg" class="img-fluid">
		</div><div class="col-lg-4 col-md-4 col-12  mb-4">
			<img src="images/gallery/3.jpg" class="img-fluid">
		</div><div class="col-lg-4 col-md-4 col-12  mb-4">
			<img src="images/gallery/4.jpg" class="img-fluid">
		</div><div class="col-lg-4 col-md-4 col-12  mb-4">
			<img src="images/gallery/5.jpg" class="img-fluid">
		</div><div class="col-lg-4 col-md-4 col-12  mb-4">
			<img src="images/gallery/6.jpg" class="img-fluid">
		</div><div class="col-lg-4 col-md-4 col-12  mb-4">
			<img src="images/gallery/7.jpg" class="img-fluid">
		</div><div class="col-lg-4 col-md-4 col-12  mb-4">
			<img src="images/gallery/8.jpg" class="img-fluid">
		</div><div class="col-lg-4 col-md-4 col-12  mb-4">
			<img src="images/gallery/9.jpg" class="img-fluid">
		</div>
	</div>
</section>

<!-- contact us -->
<section class="my-5">
	<div id="contacts" class="pt-5">
		<h1 class="text-center">  Contact Us </h1>
	</div>

	<div class="w-50 m-auto">
		<form action="userdata.php" method="post">
		<div class="form-group">
	    <label for="pwd">Username:</label>
	    <input type="text" class="form-control" name="user" >
	  </div>
	  <div class="form-group">
	    <label for="email">Email address:</label>
	    <input type="email" class="form-control" name="email" autocomplete="off">
	  </div>
	  <div class="form-group">
	    <label for="pwd">Mobile:</label>
	    <input type="text" class="form-control" name="mobile">
	  </div>
		<div class="form-group">
			<label for="comment">Comment:</label>
  <textarea class="form-control" rows="5" name="comments"></textarea>

		</div>
	

	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>
		
	</div>
</section>


<!-- footer-->
<footer>
	<div class=" bg-dark text-center text-capitalize">
		<h5 class="py-3 text-white">@NETravel</h5>
	</div>
</footer>



</body>
</html>