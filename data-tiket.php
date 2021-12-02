<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <center>
        <table class="tabel">
            <tr>
                <th>Kode Tiket</th>
                <th>Kode Booking</th>
                <th>Nama Pembeli</th>
                <th>Nama Tempat</th>
                <th>Asal</th>
                <th>Tanggal Booking</th>
                <th>Harga Tiket</th>
                <th colspan="2">aksi</th>
            </tr>
            <?php
            include 'koneksi.php';
            $q = mysqli_query($conn, "select * from tiket");
            while ($a = mysqli_fetch_array($q)) {
            ?>
                <tr>
                    <td><?= $a['kodeTiket'] ?></td>
                    <td><?= $a['kodeBooking'] ?></td>
                    <td><?= $a['namaPembeli'] ?></td>
                    <td><?= $a['namaTempat'] ?></td>
                    <td><?= $a['asal'] ?></td>
                    <td><?= $a['tanggalBooking'] ?></td>
                    <td><?= $a['hargaTiket'] ?></td>
                    <td><a href="detail.php.?detail=<?= $a['idTiket'] ?>">detail</a></td>
                    <td><a href="data-tiket.php?act=data-tiket&hapus=<?= $a['idTiket'] ?>">delete</a></td>
                </tr>
            <?php } ?>
        </table>
    </center>
    <?php
    if (isset($_GET['hapus'])) {
        $idTiket = $_GET['hapus'];
        $q = mysqli_query($conn, "delete from tiket where idTiket='$idTiket'");
        if ($q) {
            header ('Location: transaksi.php?act=data-tiket');
        } else {
            printf('Failed delete data-tiket: ' . mysqli_error($conn));
            exit();
        }
    }
    ?>
</body>
</html>