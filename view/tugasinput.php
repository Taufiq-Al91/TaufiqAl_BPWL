<h3>Tambah Data User</h3>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Add Data</title>

	<!-- Custom fonts for this template-->
	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link
		href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
		rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body>
	<a href="tugastampil.php">Home</a>
	<br /><br />

	<body class="bg-gradient-primary">

		<div class="container">


			<div class="card o-hidden border-0 shadow-lg my-5">
				<div class="card-body p-0">
					<!-- Nested Row within Card Body -->
					<div class="row">
						<div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
						<div class="col-lg-7">
							<div class="p-5">
								<div class="text-center">
									<h1 class="h4 text-gray-900 mb-4">Create A New Data</h1>
								</div>
								<form action="../controler/tugasproses.php?aksi=tambah"method="post" name="form1">
									<form class="user">
										<div class="form-group">
											<input type="text" name="prodi" class="form-control form-control-user"
												id="prodi" placeholder="prodi">
										</div>
										<div class="form-group">
											<input type="text" name="nama" class="form-control form-control-user"
												id="nama" placeholder="nama">
										</div>
										<div class="form-group">
											<input type="email" name="email" class="form-control form-control-user"
												id="email" placeholder="Email Address">
										</div>
										<td><input type="submit" name="Submit" value="Add"
												class="btn btn-primary btn-user btn-block"></td>

									</form>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


	</body>

</html>