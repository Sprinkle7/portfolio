
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>PortFolio</title>
	<link href="<?php echo base_url();?>front/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url();?>front/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
	<script src="<?php echo base_url();?>front/js/ie-emulation-modes-warning.js"></script>
	<link href="<?php echo base_url();?>front/css/carousel.css" rel="stylesheet">
</head>
<body>
	<div class="navbar-wrapper">
		<div class="container">

			<nav class="navbar navbar-default navbar-fixed-top navbar-static-top">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">PortFolio</a>
					</div>
					<div id="navbar" class="navbar-collapse collapse">
						<!-- <ul class="nav navbar-nav">
							<li class="active"><a href="#">Home</a></li>
							<li><a href="#about">About</a></li>
							<li><a href="#contact">Contact</a></li>
						</ul> -->
						<ul class="nav navbar-nav navbar-right">
							<li><a data-toggle="modal" data-target="#login" href="#login">Login</a></li>
							<li><a data-toggle="modal" data-target="#register" href="#register">Sign Up</a></li>
						</ul>
					</div>
				</div>
			</nav>

		</div>
	</div>
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img class="first-slide" src="<?php echo base_url();?>assets/images/top.jpg" alt="First slide">
				<div class="container">
					<div class="container">
					<div class="carousel-caption">
						<form action="<?php echo base_url();?>fronts/search" method="post">
							<div class="input-group col-md-6 col-md-offset-3">
								<input type="text" name="search" class="form-control" placeholder="Search User">
								<label class="input-group-addon" style="padding:0; border:1px solid blue;">
								<input type="submit" name="sear" class="btn btn-primary" style="border:none;border-radius:0;" value="Search"></label>
							</div>
						</form>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container marketing">
		<div class="row">
		<?php if (!empty($users)) {
			echo $users;
		}?>
		</div>
		<!-- Login Modal -->
		<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Login</h4>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-xs-12">
								<div class="well">
									<form id="loginForm" method="POST" action="<?php echo base_url();?>login/UserLogin" novalidate="novalidate">
										<div class="form-group">
											<label for="username" class="control-label">Email</label>
											<input type="text" class="form-control" id="email" name="email" value="" required="" title="Please enter you Email" placeholder="example@gmail.com">
											<span class="help-block"></span>
										</div>
										<div class="form-group">
											<label for="password" class="control-label">Password</label>
											<input type="password" class="form-control" id="password" name="password" value="" required="" title="Please enter your password">
											<span class="help-block"></span>
										</div>
										<input type="submit" name="Login" class="btn btn-success btn-block" value="Login">
									</form>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
					</div>
				</div>
			</div>
		</div>

		<!-- Register Modal -->
		<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Register</h4>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-xs-12">
								<div class="well">
									<form id="loginForm" method="POST" action="<?php echo base_url();?>fronts/signup" novalidate="novalidate">
										<div class="form-group">
											<label for="username" class="control-label">Profile Name</label>
											<input type="text" class="form-control" id="username" name="profile" required placeholder="http://www.xxxxxxx.com/portfolioname">
											<span class="help-block"></span>
										</div>
										<div class="form-group">
											<label for="password" class="control-label">Username</label>
											<input type="text" class="form-control" id="password" name="username" value="" required="" placeholder="Jango">
											<span class="help-block"></span>
										</div>
										<div class="form-group">
											<label for="password" class="control-label">Email</label>
											<input type="email" class="form-control" id="password" name="email" value="" required="" placeholder="jango@joohoo.com">
											<span class="help-block"></span>
										</div>
										<div class="form-group">
											<label for="password" class="control-label">Password</label>
											<input type="password" class="form-control" id="password" name="password" value="" required="" placeholder="****************">
											<span class="help-block"></span>
										</div>
										<input type="submit" name="signup" class="btn btn-success btn-block" value="Login">
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="<?php echo base_url();?>front/js/jquery.min.js"></script>
	<script src="<?php echo base_url();?>front/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>front/js/holder.min.js"></script>
	<script src="<?php echo base_url();?>front/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
