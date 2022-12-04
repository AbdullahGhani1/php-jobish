<!DOCTYPE html>
<html>
<?php include_once './template/header.php'; ?>
	<div class="container mt-5">
		<div class="row">
			<div class="col-lg-4">
				<div class="card">
					<div class="card-header"><i class="fa fa-user"></i>  Register Here </div>
					<div class="card-body">
						<?php
						 if(!empty($_GET["error"])){
							?>
							<div class="alert alert-danger"><b>Alert!</b><?php echo $_GET['error'];?></div>
						<?php
						}
						?>
						<form action="actions/register.php" method="post" >
							<div class="form-group">
								<label> <i class="fa fa-user"></i> Name </label>
								<input type="text" class="form-control" placeholder="Name" name="name" />
							</div>
							<div class="form-group">
								<label> <i class="fa fa-envelope"></i> Email </label>
								<input type="text" class="form-control" placeholder="Name" name="email" />
							</div>
							<div class="form-group">
								<label> <i class="fa fa-key"></i> Password </label>
								<input type="Password" class="form-control" placeholder="Password" name="password" />
							</div>
							<div class="form-group">
								<label> <i class="fa fa-key"></i> Confirm Password </label>
								<input type="Password" class="form-control" placeholder="Password" name="confirm_password" />
							</div>
							<div class="form-group">
								<label for="">
									Are You Job?
								</label>

									Seeker <input type="radio" name="status" value="1" />
									Provider <input type="radio" name="status" value="2" />
							</div>
							<div class="form-group">
								<button class="btn btn-warning"> <i class="fa fa-arrow-right"></i> Login</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php include_once './template/footer.php'; ?>

	
</body>
</html>