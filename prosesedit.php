<?php
include("conn.php");
        $nama= $_POST['nama'];
        $kelamin= $_POST['jenis_kelamin'];
        $alamat= $_POST['alamat'];
        $telepon= $_POST['telepon'];
        $identitas=$_POST['identitas'];
        $paket=$_POST['paket'];
 
        $cari=mysqli_query($connect,"UPDATE list_wisatawan SET nama='$nama', jenis_kelamin='$kelamin', alamat='$alamat', 
        telepon='$telepon', identitas='$identitas', paket='$paket' WHERE id_wisatawan='$id'") or die (mysqli_error());

        // jika data yang di-edit tidak ditemukan
        if( $cari )
            header('Location: wisatawan.php');
        

?>

	