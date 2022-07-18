<?php
	session_start();
	if(!ISSET($_SESSION['id_user'])){
		header('location: index.php');
	}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Halaman User</title>
  </head>
  <style class="text/css">
  body{
    background: url(img/padar2.jpg) no-repeat;
    background-size: cover;
    }
    </style>
  <body>
	<div class="content">
		<div class="row">
			<div class="col-md-12">
			<nav class="navbar navbar-expand-lg navbar-light bg-info">
				<div class="container-fluid">
					<a class="navbar-brand" href="#">Halaman User</a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="#">Home</a>
						</li>
						<li class="nav-item">
						<a class="nav-link" href="formdaftar.php">Daftar</a>
						</li>
						<li class="nav-item">
						<a class="nav-link" href="wisatawan.php">Wisatawan</a>
						</li>
						<li class="nav-item">
						<a class="btn" href="logout.php">logout >></a>
						</li>
					</ul>
					</div>
				</div>
				</nav>
				<?php if(isset($_GET['status'])): ?>
    		<p>
       	 <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran wisatawan baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
					}
				?>
			</p>
		<?php endif; ?>
				<div class="col-md-3"></div>
					<div class="col-md-6 well">
						<hr style="border-top:1px dotted #ccc;"/>
						<h4>WELCOME USER! Silahkan daftar untuk jasa guide kami.</h4>
						
					</div>
			</div>
		</div>
	</div>
  


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
