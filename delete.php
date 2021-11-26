<?php
    session_start();
    include "config_db.php";
    $kode_barang = $_GET['kode_barang'];
    $query = mysqli_query($connection, "DELETE FROM inventaris WHERE kode_barang='$kode_barang'") or die (mysqli_error($connection));

    

    if($query){
        header("location:data.php");
        }
    else {
            echo "proses gagal";
        }
?>