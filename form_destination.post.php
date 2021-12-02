<?php 

    include './koneksi.php';
    session_start();

    $lokasiTempat = $_POST['lokasiTempat'];
    $jamBuka = $_POST['jamBuka'];
    $jamTutup = $_POST['jamTutup'];
    $namaTempat = $_POST['namaTempat'];
    $hargaMasuk = $_POST['hargaMasuk'];
    $deskripsiRingkasan = $_POST['deskripsiRingkasan'];

    $nama = $_FILES['file']['name'];
	$ukuran	= $_FILES['file']['size'];
	$file_tmp = $_FILES['file']['tmp_name'];

    
    move_uploaded_file($file_tmp, 'file/'.$nama);
  
    $sql = "insert into destination (lokasiTempat, jamBuka, jamTutup, namaTempat, deskripsiRingkasan, photo, hargaMasuk)
            values ('" . $lokasiTempat . "', '" . $jamBuka . "', '" . $jamTutup . "', '" . $namaTempat . "', '" . $deskripsiRingkasan . "', '" . $nama . "', '" . $hargaMasuk . "');
    ";
    
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "<script>location.href='destination.php';</script>";
    }else{
        printf('Failed add destination: ' . mysqli_error($conn));
    }
 ?>