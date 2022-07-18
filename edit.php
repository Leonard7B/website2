<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Form daftar</title>
  </head>
  <style class="text/css">
  body{
    background: url(img/padar2.jpg) no-repeat;
    background-size: cover;
    }
    </style>
  <body>
            <div class="card w-50 p-3 mb-2 bg-transparent text-white mx-auto mt-4">
                    <h5 class="mx-auto mt-2 font-weight-bold">Form Edit Wisatawan</h5>
                    <div class="card-body">
                        <form method="post" action="prosesedit.php">
                        <?php
                            include("conn.php");
                            $id=$_GET['id'];
                            $cari=mysqli_query($connect,"SELECT * FROM list_wisatawan WHERE id_wisatawan='$id'") or die (mysqli_error());
                            $data=mysqli_fetch_array($cari);
                            ?>
                            <input type="hidden" name="kode" value="<?php echo $data ['id_wisatawan'];?>">
                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input type="text" class="form-control" name="nama" value="<?php echo $data ['nama'];?>">
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <select name="jenis_kelamin" class="form-control">
                                    <option value="">->Pilih<-</option>
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" class="form-control" name="alamat" value="<?php echo $data ['alamat'];?>">
                            </div>
                            <div class="form-group">
                                <label>No Telpon</label>
                                <input type="text" class="form-control" name="telepon" value="<?php echo $data ['telepon'];?>">
                            </div>
                            <div class="form-group">
                                <label>Nomor identitas</label>
                                <input type="text" class="form-control" name="identitas" value="<?php echo $data ['identitas'];?>">
                            </div>
                            <div class="form-group">
                                <label>Paket Wisata</label>
                                <select name="paket" class="form-control">
                                    <option value="">->Pilih<-</option>
                                    <option value="Pulau Komodo 2 hri">Pulau Komodo 2 hri</option>
                                    <option value="Pulau Padar 1 hri">Pulau Padar 1 hri</option>
                                    <option value="Cunca Rami 1 hri">Cunca Rami 1 hri</option>
                                    <option value="Lodok 1 hri">Lodok 1 hri</option>
                                    <option value="Wae Rebo 3 hri">Wae Rebo 1 hri</option>
                                    <option value="Liang Bua 1 hri">Liang Bua 1 hri</option>
                                </select>
                            </div>
                            <input type="submit" class="btn btn-dark text-primary mt-3" name="Simpan" value="simpan">
                            <p1 class="btn btn-dark font-weight-bold mt-3"><a href="dasboard.php">Batal</a>
                        
                        </form>
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