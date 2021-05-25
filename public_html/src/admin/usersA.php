 
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
						<a href="events.php">Events</a>

					</li>
					<li>
						<a href="doctorsA.php">Doctors</a>
					</li>
					<li>
						<a href="appointmentA.php">Appointments</a>

					</li>
					<li class="active">
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
							<th>Name</th>
							<th>Phone</th>
							<th>Email</th>
							<th>Clinic</th>
							<th>Doctor</th>
							<th>BirthDate</th>
							<th>Message</th>



							<th>Delete</th>

						</tr>
					</thead>
					<tbody>
						 
						<tr>
							<td><?php echo $row['name']; ?></td>
							<td><?php echo $row['phone']; ?></td>
							<td><?php echo $row['email']; ?></td>
							<td><?php echo $row['clinic']; ?></td>
							<td><?php echo $row['doctor']; ?></td>
							<td><?php echo $row['age']; ?></td>
							<td><?php echo $row['message']; ?></td>




							<td>
								 
								<form action="" method="post">
									<input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
									<button name="delete_btn_f" type="submit" class="btn btn-danger">DELETE</button>
								</form>
							</td>




						</tr>
					 
						<div class="table text-center">
							<h1 class="color"> </h1>
						</div>


					</tbody>
				</table>

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
 