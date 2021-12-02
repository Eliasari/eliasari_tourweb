<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css"  href="tiket.css">
</head>

<body>
    <table class="khusus">
        <form action="simpan-tiket.php" method="post">
        <tr>
            <td>Kode Tiket</td>
            <td>:</td>
            <td><input type="text" name="kodeTiket" class="input"  value="<?= rand(0, 999999) ?>" readonly></input></td>
        </tr>
        <tr>
            <td>Kode Booking</td>
            <td>:</td>
            <td><input type="text" name="kodeBooking" class="input"  value="<?= rand(0, 999999) ?>" readonly></input></td>
        </tr>
        <tr>
            <td>Nama Pembeli</td>
            <td>:</td>
            <td><input type="text" name="namaPembeli" class="input" required placeholder="Nama Pembeli"></input></td>
        </tr>
        <tr>
            <td>Asal</td>
            <td>:</td>
            <td><input type="text" name="asal" class="input"
            placeholder="Asal Daerah"></input></td>
        </tr>
        <tr>
            <td>Nama Tempat</td>
            <td>:</td>
            <td><input type="text" name="namaTempat" class="input" value="Candi Prambanan" readonly
            placeholder="Tujuan"></input></td>
        </tr>
        <tr>
            <td>Tanggal Booking</td>
            <td>:</td>
            <td><input type="date" name="tanggalBooking" class="input"
            placeholder="Tanggal Booking"></input></td>
        </tr>
        <tr>
            <td>Harga Tiket</td>
            <td>:</td>
            <td><input type="number" name="hargaTiket" class="input" value="150000" readonly
            placeholder="Harga Tiket"></input></td>
        </tr>
       
        <td colspan="3"><a href="transaksi.php?act=data-tiket"><input type="submit" class="submit kanan" onclick="alert('Apakah sudah benar?')"></a>
    </table>
</form>
</body>

</html>