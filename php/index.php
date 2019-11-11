<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- stylesheet from bootstrap-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
			integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/carousel/">
	<link href="carousel.css" rel="stylesheet">

	<!-- jQueries for bootstrap -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
			  integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
			  crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
			  integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
			  crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
			  integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
			  crossorigin="anonymous"></script>
	<title> Jungle Cat Media Website</title>
</head>
<body>
<!-- This is the purpose quote -->
<blockquote class="blockquote text-center">
	<p class="mb-0">"This is a place holder where the purpose of this business is. This will will be a quote from
		the business owner himself explaining what the purpose of his business is."</p>
</blockquote>
<!-- This is the testimonial carousel -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">
		<div class="carousel-item active" data-interval="10000">
			<svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
			<div class="container">
				<div class="carousel-caption text-center">
					<p> #1 This is a place holder for the testimonials from previous clients.</p>
					<small><em>person</em></small>
				</div>
			</div>
		</div>
		<div class="carousel-item" data-interval="2000">
			<svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
			<div class="container">
				<div class="carousel-caption text-center">
					<p> #2 This is a place holder for the testimonials from previous clients.</p>
					<small><em>person</em></small>
				</div>
			</div>
		</div>
		<div class="carousel-item">
			<svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
			<div class="container">
				<div class="carousel-caption text-center">
					<p> #3 This is a place holder for the testimonials from previous clients.</p>
					<small><em>person</em></small>
				</div>
			</div>
		</div>
	</div>
	<a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>
</body>
</html>