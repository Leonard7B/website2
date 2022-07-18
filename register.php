<?php
	require_once 'conn.php';
	if(ISSET($_POST['register'])){
		$name=$_POST['name'];
		$username=$_POST['username'];
		$password=$_POST['password'];
 
 
		mysqli_query($connect, "INSERT INTO `user` VALUES('', '$name', '$username', '$password')") or die(mysqli_error());
 
		
		echo "<center><h4 class='text-dark mt-4'>Proses daftar berhasil. Silahkan Login!</h4></center>";
	}
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Register</title>
    
  </head>
  <style class="text/css">
  body{
    background: url(img/lg.jpg) no-repeat;
    background-size: cover;
    }
    @import url('https://fonts.googleapis.com/css2?family=Arima:wght@200&family=Kanit:ital,wght@1,300&display=swap');
    .container{
    font-family: 'Arima', cursive;
    margin-left: 2rem;
    }
    </style> 
  <body>
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <div class="card w-50 mx-auto p-3 mb-2 bg-transparent text-dark">
                    <h5 class="font-weight-bold text-center text-monospace">Form Register</h5>
                    <div class="card-body">
                        <form action="" method="POST">
                        <div class="form-group">
                            <label for="name">Nama Lengkap</label>
                            <input class="form-control" type="text" name="name" placeholder="Nama kamu" />
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input class="form-control" type="text" name="username" placeholder="Username" />
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input class="form-control" type="password" name="password" placeholder="Password" />
                        </div>
                            <input type="submit" class="btn btn-primary btn-block" name="register" value="Daftar" />
                            <p>
                         <p1 class="btn btn-transparent btn-block"><a href="index.php">Back Home</a> Or <a href="login.php">Login here</a></p1>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
     
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>


       

            

            

            

            

            

       
