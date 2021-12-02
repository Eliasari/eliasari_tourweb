<?php
    include 'koneksi.php';
    $idTiket = $_GET['detail'];
    $q = mysqli_query ($conn, "select * from tiket where idTiket = '$idTiket'");
    $a = mysqli_fetch_array($q);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="tiket.css">
</head>
<body>
    
<div class="content">
        <center>
            <a href="transaksi.php?act=data-tiket"><input type="submit" class="submit" value="Data Tiket"></a>
            <a href="transaksi.php?act=data-transaksi"><input type="submit" class="submit" value="Data Transaksi"></a>
            <a href="index.php"><input type="submit" class="submit" value="Back to Home"></a>

        </center>
</div>
    <center>
        <table class="tabel" style="width: 50%;">
        <tr>
                <td>Kode Tiket</td>
                <td>:</td>
                <td><?= $a['kodeTiket']?></td>
            </tr>
            <tr>
                <td>Kode Booking</td>
                <td>:</td>
                <td><?= $a['kodeBooking']?></td>
            </tr>
            <tr>
                <td>Nama Pembeli</td>
                <td>:</td>
                <td><?= $a['namaPembeli']?></td>
            </tr>
            <tr>
                <td>Asal</td>
                <td>:</td>
                <td><?= $a['asal']?></td>
            </tr>
            <tr>
                <td>Nama Tempat</td>
                <td>:</td>
                <td><?= $a['namaTempat']?></td>
            </tr>
            <tr>
                <td>Tanggal Booking</td>
                <td>:</td>
                <td><?= $a['tanggalBooking']?></td>
            </tr>
            <tr>
                <td>Harga Tiket</td>
                <td>:</td>
                <td><?= number_format($a['hargaTiket'], 0,'.','.')?>,-</td>
            </tr>
                <td><a onclick="window.print()"><input type="button" class="submit" value="Cetak"></a></td>
            </tr>
        </table>
    </center>
</body>
</html>