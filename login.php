<!DOCTYPE html>
<html>
<?php include_once './template/header.php' ?>
	<div class="container mt-5">
		<div class="row">
			<div class="col-lg-4">
				<div class="card">
					<div class="card-header"><i class="fa fa-user"></i>  Login Here </div>
					<?php 
						if(!empty($_GET['error'])){
					?>
						<div class="alert alert-danger">
							<b>Alert!</b> <?php echo $_GET['error']; ?>
						</div>
					<?php
						}
					?>
					<div class="card-body">
						<form action="actions/login.php" method="post" >
							<div class="form-group">
								<label> <i class="fa fa-envelope"></i> Email </label>
								<input type="text" class="form-control" placeholder="Email" name="email" />
							</div>
							<div class="form-group">
								<label> <i class="fa fa-key"></i> Password </label>
								<input type="Password" class="form-control" placeholder="Password" name="password" />
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
	<?php include './template/footer.php'; ?>

</body>
</html>