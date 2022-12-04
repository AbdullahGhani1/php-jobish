<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="./css/index.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <title>Jobish</title>
</head>
<body>
	<header>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a href="index.php" class="navbar-brand">
					<img src="images/logo.png" height="60px" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#asad" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="asad">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a href="index.php" class="nav-link"> <i class="fa fa-home"></i> Home</a>
						</li>
						<li class="nav-item">
							<a href="about.php" class="nav-link"><i class="fa fa-arrow-right"></i> About</a>
						</li>
						<li class="nav-item">
							<a href="jobs.php" class="nav-link"> <i class="fa fa-list"></i> Jobs</a>
						</li>
						<li class="nav-item">
							<a href="contact.php" class="nav-link"> <i class="fa fa-envelope"></i> Contact</a>
						</li>
						<!-- <li class="nav-item">
					        <div class="btn-group" style="margin-right:1px; margin-top:1px;">
							  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							     <i class="fa fa-user"></i> Login
							  </button>
							  <div class="dropdown-menu">
							    <a class="dropdown-item" href="login.php"> <i class="fa fa-arrow-right"></i> Login</a>
							    <a class="dropdown-item" href="register.php"> <i class="fa fa-arrow-right"></i> Registe Here </a>
							  </div>
							</div>
					    </li>
					   	<li class="nav-item dropdown" style="margin-top:1px;">
					       <a class="btn btn-warning" href="create_job.php" role="button"> <i class="fa fa-pencil"></i> Post A Job</a>
					    </li> -->
						<?php
							session_start();
							if(!empty($_SESSION['name'])){
						?>
						<li class="nav-item">
							<div class="btn-group" style="margin-right:1px; margin-top:1px;">
								<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="fa fa-user-circle"></i> <?php echo ucfirst($_SESSION['name']); ?>
								</button>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="register.php"> <i class="fa fa-list"></i>  Dashboard </a>
									<a class="dropdown-item" href="actions/logout.php"> <i class="fa fa-sign-out"></i>  Logout </a>
								</div>
							</div>
						</li>
						<?php		
							}  else {
						?>
						<li class="nav-item">
					        <div class="btn-group" style="margin-right:1px; margin-top:1px;">
							  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							     <i class="fa fa-user"></i> Login
							  </button>
							  <div class="dropdown-menu">
							    <a class="dropdown-item" href="login.php"> <i class="fa fa-arrow-right"></i> Login</a>
							    <a class="dropdown-item" href="register.php"> <i class="fa fa-arrow-right"></i> Registe Here </a>
							  </div>
							</div>
					    </li>
						<?php 
							}
						?>
						<?php
							if(!empty($_SESSION['name'])){
						?>
						<li class="nav-item">
							<div class="btn-group" style="margin-right:1px; margin-top:1px;">
								<button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="fa fa-user-circle"></i> Create New Job
								</button>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="jobs.php"> <i class="fa fa-list"></i>  Your Jobs </a>
								</div>
							</div>
						</li>
						<?php } else {
						?>
						<li class="nav-item">
							<a href="create_job.php" class="nav-link">
								<i class="fa fa-plus-circle"></i> Create Job
							</a>
						</li>
						<?php
						} ?>

					</ul>
				</div>
			</div>
		</nav>
	</header>