<?php 

    include './koneksi.php';
    
    $qry_destination = mysqli_query($conn, "select * from destination");

    $namaDestination = $dt_destination['namaDestination'];
    $idDestination = $dt_destination['idDestination'];
    $hargaTiket = $dt_destination['hargaTiket'];

    $namaPembeli = $_POST['namaPembeli'];
    $email = $_POST['email'];
    $tanggalBerangkat = $_POST['tanggalBerangkat'];
    $jumlahOrang = $_POST['jumlahOrang']; 

    $sql = "insert into data_tiket (namaDestination, idDestination, hargaTiket, namaPembeli, email, tanggalBerangkat, jumlahOrang)
            values ('" . $namaDestination . "', '" . $idDestination . "','" . $hargaTiket . "','" . $namaPembeli . "', '" . $email. "', '" . $tanggalBerangkat . "', '" . $jumlahOrang . "');
    ";

    $result = mysqli_query($conn, $sql);
    if($result){
        echo "<script>location.href=' ';</script>";
    }else{
        printf('Failed add destination: ' . mysqli_error($conn));
    }
 ?>