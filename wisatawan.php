

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  </head>
  <style class="text/css">
  body{
    background: url(img/padar2.jpg) no-repeat;
    background-size: cover;
    }
    </style>
  <body>
  <?php
    $no = 1;
    include 'conn.php';
    $cari=mysqli_query($connect, "SELECT * FROM list_wisatawan") or die (mysqli_error());
    ?>
   
    
    <h4 class="text-center mt-4">Data Wisatawan</h4>
    <a href="dasboard.php" class="btn btn-primary font-weight-bold mr-2">Kembali</a>
    <a href="formdaftar.php" class="btn btn-primary font-weight-bold mr-2">Tambah Data</a>
    
    
    <table class="mt-2 table table-dark mt-4 mx-auto col-lg-11">
        <thead>
            <tr>
            <th>No.</th>
            <th>Nama Wisatawan</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>No Telpon</th>
            <th>Jenis/No Identitas</th>
            <th>Paket Wisata</th>
            <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            
        <?php
        while ($data=mysqli_fetch_array($cari)){
        ?>
            <tr>
            <th scope="row"><?php echo $no; ?></th>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['jenis_kelamin']; ?></td>
            <td><?php echo $data['alamat']; ?></td>
            <td><?php echo $data['telepon']; ?></td>
            <td><?php echo $data['identitas']; ?></td>
            <td><?php echo $data['paket']; ?></td>
            
            <td>
                <a href="edit.php?id=<?php echo $data['id_wisatawan']; ?>" class="btn btn-success">Edit</a>
                <a href="hapus.php?id=<?php echo $data['id_wisatawan']; ?>" class="btn btn-warning">Hapus</a>
            </td>
            </tr>
            <?php
                $no++;
            }
            ?>
        </tbody>
    </table>
    

    


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

