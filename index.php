<!DOCTYPE html>
<html class="h-100" lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Demo</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
		<script src="https://unpkg.com/vue@3"></script>
	</head>
	<body class="d-flex flex-column h-100">
		<script>
			<?php
				echo file_get_contents('./arbeitsplatze.json');
			?>
		</script>
		<!-- Navbar -->
		<nav class="navbar navbar-expand-md sticky-top bg-dark navbar-dark">
			<div class="container-md">
				<a class="navbar-brand" href="#">
					<img src="https://cdn-icons-png.flaticon.com/512/3050/3050525.png" alt="" width="30" height="30" class="d-inline-block align-text-top">
					<b>Kollaborationsplattform</b>
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menubar">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse justify-content-between" id="menubar">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a href="index.php" class="nav-link active">Büroreservierung</a>
						</li>
						<li class="nav-item">
							<a href="kalender.php" class="nav-link">Kalender</a>
						</li>
					</ul>
					<div class="navbar-nav dropdown">
						<a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
							<img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" alt="" width="24" height="24">
							<span class="mx-1">Timmy</span>
						</a>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="#">Einstellungen</a></li>
							<li><a class="dropdown-item" href="#">Logout</a></li>
						</ul>
					</div>
				</div>
			</div>
		</nav>
		<!-- main -->
		<main class="my-5">
			<div class="container-md">
				<div class="row">
					<!-- Filter Sidebar -->
					<div class="col-md-5 mb-4">
						<div class="search">
							<form action="" class="mt-5 border p-4 bg-light shadow">
								<h4 class="mb-5 text-secondary">Arbeitsplatz suchen</h4>
								<div class="row">
									<div class="mb-3 col-md-6">
										<label>Tag<span class="text-danger"></span></label>
										<input type="text" name="date" class="form-control"placeholder="dd/mm/yyyy">
									</div>
			
									<div class="dropdown">
										<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
										  Zeit wählen
										</button>
										<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
										  <li><a class="dropdown-item" href="#">10-12</a></li>
										  <li><a class="dropdown-item" href="#">12-14</a></li>
										  <li><a class="dropdown-item" href="#">14-16</a></li>
										</ul>
									  </div>
			
									<div class="mb-3 col-md-3">
										<label>Plätze<span class="text-danger"></span></label>
										<input type="text" name="seats" class="form-control">
									</div>
									<div class="col-md-13">
									   <button class="btn btn-outline-secondary" type="button">Suchen</button>
									</div>
								</div>
							</form>
						</div>
					</div>
					<!-- Suchergebnisse -->
					<div class="col-md-7">
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Suche...">
							<button class="btn btn-outline-secondary" type="button">Suche</button>
						</div>
						<!-- Beispielliste -->
						<ul class="list-group my-3">
							<li class="list-group-item d-flex justify-content-between align-items-center">
								<div class="container">
									<h6><b>Raum 6A 327</b></h6>
									<h6>Alt Friedrichsfelde 60, 10315 Berlin</h6>
									<span class="badge text-bg-secondary rounded-pill">Computerplatz</span>
									<span class="badge text-bg-secondary rounded-pill">Höhenverstellbarer Tisch</span>
									<span class="badge text-bg-secondary rounded-pill">Drucker</span>
								</div>
								<button type="button" class="btn btn-outline-primary justify-content-end">Reservieren</button>
							</li>
							<li class="list-group-item d-flex justify-content-between align-items-center">
								<div class="container">
									<h6><b>Raum 6A 123</b></h6>
									<h6>Alt Friedrichsfelde 60, 10315 Berlin</h6>
									<span class="badge text-bg-secondary rounded-pill">Konferenzraum</span>
									<span class="badge text-bg-secondary rounded-pill">Projektor</span>
									<span class="badge text-bg-secondary rounded-pill">Drucker</span>
								</div>
								<button type="button" class="btn btn-outline-primary justify-content-end">Reservieren</button>
							</li>
							<li class="list-group-item d-flex justify-content-between align-items-center">
								<div class="container">
									<h6><b>Raum 6A 124</b></h6>
									<h6>Alt Friedrichsfelde 60, 10315 Berlin</h6>
									<span class="badge text-bg-secondary rounded-pill">Konferenzraum</span>
									<span class="badge text-bg-secondary rounded-pill">Projektor</span>
								</div>
								<button type="button" class="btn btn-outline-primary justify-content-end">Reservieren</button>
							</li>
							<li class="list-group-item d-flex justify-content-between align-items-center">
								<div class="container">
									<h6><b>Raum 6A 327</b></h6>
									<h6>Alt Friedrichsfelde 60, 10315 Berlin</h6>
									<span class="badge text-bg-secondary rounded-pill">Computerplatz</span>
									<span class="badge text-bg-secondary rounded-pill">Höhenverstellbarer Tisch</span>
								</div>
								<button type="button" class="btn btn-outline-primary justify-content-end">Reservieren</button>
							</li>
							<li class="list-group-item d-flex justify-content-between align-items-center">
								<div class="container">
									<h6><b>Raum 6A 123</b></h6>
									<h6>Alt Friedrichsfelde 60, 10315 Berlin</h6>
									<span class="badge text-bg-secondary rounded-pill">Konferenzraum</span>
									<span class="badge text-bg-secondary rounded-pill">Projektor</span>
									<span class="badge text-bg-secondary rounded-pill">Drucker</span>
								</div>
								<button type="button" class="btn btn-outline-primary justify-content-end">Reservieren</button>
							</li>
							<li class="list-group-item d-flex justify-content-between align-items-center">
								<div class="container">
									<h6><b>Raum 6A 124</b></h6>
									<h6>Alt Friedrichsfelde 60, 10315 Berlin</h6>
									<span class="badge text-bg-secondary rounded-pill">Konferenzraum</span>
									<span class="badge text-bg-secondary rounded-pill">Projektor</span>
								</div>
								<button type="button" class="btn btn-outline-primary justify-content-end">Reservieren</button>
							</li>
							<li class="list-group-item d-flex justify-content-between align-items-center">
								<div class="container">
									<h6><b>Raum 6A 327</b></h6>
									<h6>Alt Friedrichsfelde 60, 10315 Berlin</h6>
									<span class="badge text-bg-secondary rounded-pill">Computerplatz</span>
									<span class="badge text-bg-secondary rounded-pill">Höhenverstellbarer Tisch</span>
									<span class="badge text-bg-secondary rounded-pill">Drucker</span>
								</div>
								<button type="button" class="btn btn-outline-primary justify-content-end">Reservieren</button>
							</li>
							<li class="list-group-item d-flex justify-content-between align-items-center">
								<div class="container">
									<h6><b>Raum 6A 123</b></h6>
									<h6>Alt Friedrichsfelde 60, 10315 Berlin</h6>
									<span class="badge text-bg-secondary rounded-pill">Konferenzraum</span>
									<span class="badge text-bg-secondary rounded-pill">Projektor</span>
									<span class="badge text-bg-secondary rounded-pill">Drucker</span>
								</div>
								<button type="button" class="btn btn-outline-primary justify-content-end">Reservieren</button>
							</li>
							<li class="list-group-item d-flex justify-content-between align-items-center">
								<div class="container">
									<h6><b>Raum 6A 124</b></h6>
									<h6>Alt Friedrichsfelde 60, 10315 Berlin</h6>
									<span class="badge text-bg-secondary rounded-pill">Konferenzraum</span>
									<span class="badge text-bg-secondary rounded-pill">Projektor</span>
								</div>
								<button type="button" class="btn btn-outline-primary justify-content-end">Reservieren</button>
							</li>
						</ul>
						<!-- Pagination -->
						<div class="d-flex justify-content-center">
							<nav>
								<ul class="pagination">
								  <li class="page-item">
									<a class="page-link" href="#">
										<span>&laquo;</span>
									</a>
								  </li>
								  <li class="page-item active"><a class="page-link" href="#">1</a></li>
								  <li class="page-item"><a class="page-link" href="#">2</a></li>
								  <li class="page-item"><a class="page-link" href="#">3</a></li>
								  <li class="page-item">
										<a class="page-link" href="#">
											<span>&raquo;</span>
										</a>
								  </li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</main>
		<!-- Footer -->
		<footer class="mt-auto py-5 bg-dark"></footer>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	</body>
</html>