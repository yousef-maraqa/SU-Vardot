 
 

<!doctype html>
<html lang="en">

<head>
<title>admin</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>

	<div class="wrapper d-flex align-items-stretch">
		<nav id="sidebar">
			<div class="custom-menu">
				<button type="button" id="sidebarCollapse" class="btn btn-primary">
					<i class="fa fa-bars"></i>
					<span class="sr-only">Toggle Menu</span>
				</button>
			</div>
			<div class="p-4 pt-5">
				<div style="text-align: center; font-size: 2.5rem;">MED<span style="color: #71cd29;">BAY</span></div>

				<ul class="list-unstyled components mb-5">
					<li>
						<a href="usersA.php">Users</a>

					</li>
					<li class="active">
						<a href="events.php">Events</a>
					</li>
					<li>
						<a href="appointmentA.php">Appointments</a>

					</li>
					<li>
						<a href="free_consultationA.php">Consultations</a>

					</li>
					<li>
						<a href="contactA.php">Contact</a>

					</li>
					
				</ul>
				<ul class="list-unstyled components mb-5">
					<li>
						<a class="btn btn-danger" href="../logout.php">logout</a>
					</li>
				</ul>

		</nav>

		<!-- Page Content  -->
		<div id="content" class="p-4 p-md-5 pt-5">


		 
			<div class="table-responsive">
				<table class="table table-borderd" id="appoTable" cellspacing="0">
					<thead>
						<tr>
							<th>Doctor name</th>
							<th>Doctor password</th>
							<th>Clinic</th>
							<th>Experiense</th>
							<th>Floor</th>

							<th>Edit</th>
							<th>Delete</th>

						</tr>
					</thead>
					<tbody>
						<?php while($row= mysqli_fetch_assoc($result)){?>
						<tr>
							<td><?php echo $row['dname']; ?></td>
							<td><?php echo $row['dpassword']; ?></td>
							<td><?php echo $row['clinic']; ?></td>
							<td><?php echo $row['experience']; ?></td>
							<td><?php echo $row['floor']; ?></td>


							<td>

								<form action=" " method="post">
									<input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
									<button name="edit_btn_d" type="submit" class="btn btn-success">Edit</button>


								</form>
							</td>


							<td>
								< 
								<form action="<?php $_SERVER["PHP_SELF"] ?>" method="post">
									<input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
									<button name="delete_btn_d" type="submit" class="btn btn-danger">DELETE</button>

								</form>
							</td>




						</tr>
						 
						<div class="table text-center">
							<h1 class="color"><?php echo $noRecord; ?></h1>
						</div>
						<?php	
				} ?>


					</tbody>
				</table>

			</div>
			<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add
				doctor</button>

			</button>
			<!-- Modal -->
			<div class="modal fade" id="myModal" role="dialog">
				<div class="modal-dialog">

					<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>

						</div>
						<div class="modal-body">
							<!-- vommmmmsafkjf -->
							 			 
							<form action="" method="post" autocomplete="off">


								<!-- name -->
								<div class="row form-group">
									<div class="col-md-12">
										<label>Name&nbsp;&nbsp;</label>
										<input type="text" placeholder="Name" class="form-control" name="dname"
											value="<?php echo $dname; ?>">
										<span class="help-block"><?php echo $dname_err; ?></span>
									</div>
								</div>
								<!-- password -->
								<div class="row form-group">
									<div class="col-md-12">
										<label>password&nbsp;</label>
										<input type="text" placeholder="password" class="form-control" name="dpassword"
											value="<?php echo $dpassword; ?>">
										<span class="help-block"><?php echo $dpassword_err; ?></span>
									</div>
								</div>

								<!-- clinic	-->
								<div class="row form-group">
									<div class="col-md-12">
										<label>Clinic&nbsp;&nbsp;</label>
										<select class="selectpicker form-control" name="clinic" id="clinselect"
											value="<?php echo $clinic; ?>">
											<option></option>
											<option>Dental</option>
											<option>Orthopedic</option>
											<option>Surgical</option>
											<option>General</option>
										</select>
										<span class="help-block"><?php echo $clinic_err; ?></span>
									</div>
								</div>
								<!-- exp -->
								<div class="row form-group">
									<div class="col-md-12">

										<label>Experience</label>
										<input type="text" placeholder="experience" class="form-control"
											name="experience" value="<?php echo $experience; ?>">
										<span class="help-block"><?php echo $experience_err; ?></span>
									</div>
								</div>
								<!-- floor -->
								<div class="row form-group">
									<div class="col-md-12">
										<label>Floor&nbsp;</label>
										<input type="text" placeholder="floor" class="form-control" name="floor"
											value="<?php echo $floor; ?>">
										<span class="help-block"><?php echo $floor_err; ?></span>
									</div>
								</div>
								<!-- btn -->
								<div class="form-group text-center">
									<input type="submit" value="Add" class="btn btn-primary">
								</div>
								<div class="form-group text-center">
									<p>Refresh the pag after adding the doctor</p>
							</form>


						</div>
					</div>
				</div>




			</div>

			<script src="js/jquery.min.js"></script>
			<script src="js/popper.js"></script>
			<script src="js/bootstrap.min.js"></script>
			<script src="js/main.js"></script>
</body>

</html>
 