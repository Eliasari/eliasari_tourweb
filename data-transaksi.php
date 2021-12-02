<?php
    include 'koneksi.php';
?>
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
                <th>Total</th>
                <th>Aksi</th>
            </tr>
            <?php
            include "koneksi.php";
            // session_start();
            // $total = $_POST['total'];

            $q = mysqli_query($conn, "select * from transaksi");
            while ($a = mysqli_fetch_array($q)) {
                @$total = $total + $a['total'];
            ?>
                <tr>
                    <td><?= $a['kodeTiket'] ?></td>
                    <td style="text-align: right;">Rp.<?=number_format($a['total'],0,'.','.')?>,-</td>
                    <?php if(!$a['bukti']) { ?>
                    <td><a href="upload_tiket.php?idTransaksi=<?php echo $a['idTransaksi']?>"><input type="submit" class="submit" value="upload bukti bayar"></a></td>
                    <?php } ?>
                </tr>
            <?php } ?>
            <tr bgcolor="#eee">
                <td style="text-align: center;"><b>TOTAL</b></td>
                <td style="text-align: right;">Rp.<?= number_format($total,0,'.','.')?>,-</td>
            </tr>
        </table>
    </center>
</body>
</html>