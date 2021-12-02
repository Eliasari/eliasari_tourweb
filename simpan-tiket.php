<?php

include 'koneksi.php';
session_start();

// hubungannya dengan databaase 

$kodeTiket = $_POST['kodeTiket'];
$kodeBooking = $_POST['kodeBooking'];
$namaPembeli = $_POST['namaPembeli'];
$asal = $_POST['asal'];
$namaTempat = $_POST['namaTempat'];
$tanggalBooking = $_POST['tanggalBooking'];
$hargaTiket = $_POST['hargaTiket'];

$total = $hargaTiket;

// hubungannya dengan databaase 
// mendeklarasikan variabel sql 
    $q = mysqli_query($conn, "insert into tiket (kodeTiket, kodeBooking, namaPembeli, asal, namaTempat, tanggalBooking, hargaTiket, total)
         values ('" . $kodeTiket . "', '" . $kodeBooking . "', '" . $namaPembeli . "', '" . $asal . "', '" . $namaTempat . "', '" . $tanggalBooking. "', '" . $hargaTiket. "', '" . $total . "');
         ");

        //  yang kosong buat bukti
if ($q) {
    $p = mysqli_query($conn, "insert into transaksi values(NULL, '$kodeTiket','$total','$bukti')");
    if($p){ 
        echo "<script>location.href='transaksi.php?act=data-tiket';</script>";
    }
}

?>