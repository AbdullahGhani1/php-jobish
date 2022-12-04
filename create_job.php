<!DOCTYPE html>
<html>
<?php include_once './template/header.php'; ?>
	<div class="container mt-5">
		<div class="row">
			<div class="col-lg-10">
				<div class="card">
					<div class="card-header"><i class="fa fa-user"></i> Post New Job </div>
					<div class="card-body">
						<form action="" method="post" >
							<div class="form-group">
								<label> <i class="fa fa-pencil"></i> Title </label>
								<input type="text" class="form-control" placeholder="Name" name="name" />
							</div>
							<div class="form-group">
								<label> <i class="fa fa-pencil"></i> Description </label>
								<textarea class="form-control" rows="4"></textarea>
							</div>
							<div class="form-group">
								<label> <i class="fa fa-envelope"></i> Email </label>
								<input type="text" class="form-control" placeholder="Name" name="name" />
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-lg-6">
										<label> <i class="fa fa-list"></i> Category</label>
										<select class="form-control" name="category">
											<option>Select Category</option>
											<option>Category 1</option>
											<option>Category 2</option>
											<option>Category 3</option>
										</select>
									</div>
									<div class="col-lg-6">
										<label> <i class="fa fa-list"></i> Sub Category</label>
										<select class="form-control" name="category">
											<option>Select Sub Category</option>
											<option>Category 1</option>
											<option>Category 2</option>
											<option>Category 3</option>
										</select>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-lg-6">
										<label> <i class="fa fa-list"></i> Salary Type</label>
										<select class="form-control" name="salary_type">
											<option>Select Salary Type</option>
											<option>Weekly</option>
											<option>Yearly</option>
											<option>Monthly</option>
										</select>
									</div>
									<div class="col-lg-4">
										<label> <i class="fa fa-money"></i> Salary</label>
										<input type="number" class="form-control" name="salary">
									</div>
									<div class="col-lg-2">
										<label> <i class="fa fa-list"></i> Currency</label>
										<select class="form-control" name="salary_type">
											<option>PKR</option>
											<option>USD</option>
											<option>Euro</option>
										</select>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-lg-6">
										<label> <i class="fa fa-envelope"></i> Email </label>
										<input type="number" class="form-control" name="email">
									</div>
									<div class="col-lg-6">
										<label> <i class="fa fa-whatsapp"></i> Whats App </label>
										<input type="number" class="form-control" name="phone">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label> <i  class="fa fa-map-marker"></i> Location </label>
								<input type="text" class="form-control" name="location">
							</div>
							<div class="form-group">
								<button class="btn btn-danger float-right"> <i class="fa fa-arrow-right"></i> Post Job</button>
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