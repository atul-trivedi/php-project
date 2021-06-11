<!DOCTYPE html>
<html>
<head>
	<title></title>
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">ABROAD</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="website.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Services</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/cc2.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="img/cc3.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="img/cc1.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
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


<section class="my-5">
	<div>
		<h3 class="text-center">About Us</h3>

	</div>
	<div class="col-lg-6 col-md-6 col-12">

		<h2 class="display-4"> ABROAD</h2>
		<p class="py-3">
      Abroad is one of the site which is used to the explore the places of  all over the world. This site is used for those people who wants to get the knowledge of the places to all over the world. Abroad helps you if you wants to know about the places.Abroad gives you all information about the place which one is you choosed.Abroad is helpful for those person who like to travel.
    </p>
	
		<a href="about.php" class="btn btn-primary">check more</a>
	</div>
</section>



<section class="my-5">
	<div>
		<h3 class="text-center"> Our Services</h3>

	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12">
				<div class="card" >
  <img class="card-img-top" src="img/cc5.jpg" alt="Card img/">
  <div class="card-body">
    <h4 class="card-title">Paris</h4>
    <p class="card-text">explore this place ✈</p>
    <a href="#" class="btn btn-primary">Check More</a>
  </div>
</div>
			</div>
			
<div class="col-lg-4 col-md-4 col-12">
				<div class="card" >
  <img class="card-img-top" src="img/cc6.jpg" alt="Card img/">
  <div class="card-body">
    <h4 class="card-title">Dubai</h4>
    <p class="card-text">explore this place ✈</p>
    <a href="#" class="btn btn-primary">Check More</a>
  </div>
</div>
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<div class="card" >
  <img class="card-img-top" src="img/cc7.jpg" alt="Card img/">
  <div class="card-body">
    <h4 class="card-title">Maldives</h4>
    <p class="card-text">explore this place ✈</p>
    <a href="#" class="btn btn-primary">Check More</a>
  </div>
</div>
			</div>
			
		</div>
		

	</div>
</section>


<section class="my-5">

	<div class="py-5">
		<h3 class="text-center">Contact Us</h3>
   
<div class="w-50 m-auto">

	
	<form action="userinfo.php" method="post">
		
<div class="form-group">
	<label>User</label>
	<input type="text" name="user" autocomplete="off" class="form-control">
</div>
	

		
<div class="form-group">
	<label>Email</label>
	<input type="text" name="email" autocomplete="off" class="form-control">
</div>
		
<div class="form-group">
	<label>Mobile</label>
	<input type="text" name="mobile" autocomplete="off" class="form-control">
</div>
	

<div class="form-group">
	<label>comments</label>
	<textarea class="form-control"  name="comments">
		
	</textarea>
</div>

 <button type="submit" class="btn btn-primary">Submit</button>



	</form>
</div>

	</div>
</section>

<footer>
	
	<p class="p-3 bg-dark text-white text-center">@abroadtravelsite</p>
</footer>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>
</html>