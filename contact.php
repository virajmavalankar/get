
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="CSS/style.css">
	
  	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  	<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

  		<!-- Google Fonts -->
  	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;300;400&family=Ubuntu:wght@300&display=swap" rel="stylesheet">
  	

</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
    		<a class="navbar-brand" href="#">Viraj Technical</a>
    		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar">
    			<span class="navbar-toggler-icon"></span>
  			</button>

    		<div class="collapse navbar-collapse" id="myNavbar">
      			<ul class="navbar-nav ml-auto mb-2 mb-lg-0">
        			<li class="nav-item active">
          				<a class="nav-link " aria-current="page" href="index.html">Home</a>
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

      			<form class="d-flex">
        			<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        			<button class="btn btn-outline-success" type="submit">Search</button>
      			</form>
    		</div>
  		</div>
	</nav>


<div class="jumbotron">
  <h1>Viraj Technical</h1>
  <p>I am The Web Developer</p>
</div>

	<section class="my-5">
		<div class="py-5">
			<h2 class="text-center">Contact Us</h2>
		</div>

		<div class="w-50 m-auto">
			<form action="userinfo.php" method="POST">
				<div class="form-group">
					<label>Username</label>
					<input type="text" name="user" autocomplete="off" class="form-control">
				</div>

				<div class="form-group">
					<label>Email</label>
					<input type="text" name="email" autocomplete="off" class="form-control">
				</div>

				<div class="form-group">
					<label>Mobile No.</label>
					<input type="text" name="mobile" autocomplete="off" class="form-control">
				</div>

				<div class="form-group">
					<label>Comment</label>
					<textarea class="form-control" name="comment"></textarea>
				</div>

				<button type="submit" class="btn btn-success">Submit</button>
			</form>
		</div>
	</section>

	<footer>
		<p class="p-3 bg-dark text-white text-center">@virajtechnical</p>
	</footer>




		<!-- Bootstrap JS -->
	
</body>
</html>