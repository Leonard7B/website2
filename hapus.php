<?php

include("conn.php");

if( isset($_GET['id']) ){

    // ambil id dari query string
    $id = $_GET['id'];

    // buat query hapus
    $cari=mysqli_query($connect,"DELETE FROM list_wisatawan WHERE id_wisatawan='$id'") or die (mysqli_error());
    

    // apakah query hapus berhasil?
    if( $cari ){
        header('Location: wisatawan.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>