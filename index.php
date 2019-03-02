<!DOCTYPE html>
<html>
<head>
	<title>get API test</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/jquery.json-viewer.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="#"><b>Get API Test</b></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			<div class="navbar-nav">
				<!-- <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
				<a class="nav-item nav-link" href="#">Features</a> -->
			</div>
		</div>
	</nav>
	
	<!-- Main -->
	<section class="header pt-3 pb-3">
		<div class="container">
			<div class="row">
				<div class="col text-center mb-3">
					<h2>Request</h2>
				</div>
			</div>
			<form>
				<div class="row">
					<div class="col-2">
						<select class="form-control" id="method">
							<option value="get">GET</option>
							<option value="post">POST</option>
							<option value="put">PUT</option>
							<option value="delete">DELETE</option>
						</select>
					</div>
					<div class="col-8">
						<input type="text" class="form-control" id="query" placeholder="Request Here">
					</div>
					<div class="col-2">
						<a class="btn btn-primary btn-send" href="#"><b>SEND</b></a>
					</div>
				</div>
				<div class="params">
					<div class="row mt-3 justify-content-center">
						<div class="col-4">
							<input type="text" class="form-control key" placeholder="Key">
						</div>
						<div class="col-4">
							<input type="text" class="form-control value" placeholder="Value">
						</div>
					</div>
				</div>
				<div class="row mt-3 justify-content-center">
					<div class="col-8 text-right">
						<a href="#" class="btn btn-success btn-add-param">Add Parameter</a>
						<a href="#" class="btn btn-dark btn-reset">Reset</a>
					</div>
				</div>
			</form>
		</div>
	</section>
		
	<section class="content pb-3 bg-light">
		<div class="container">
			<div class="row">
				<div class="col text-center mt-3 mb-3">
					<h2>Response JSON</h2>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="box-response root">
						
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="footer text-center">
		<p>Created by Irsyad Abdul 2019. All Rights Reserved</p>
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/jquery.json-viewer.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
</body>
</html>