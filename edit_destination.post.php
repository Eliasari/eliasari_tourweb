<?php 
    include "koneksi.php";

    $lokasiTempat = $_POST['lokasiTempat'];
    $jamBuka = $_POST['jamBuka'];
    $jamTutup = $_POST['jamTutup'];
    $hargaMasuk = $_POST['hargaMasuk'];
    $namaTempat = $_POST['namaTempat'];
    $deskripsiRingkasan = $_POST['deskripsiRingkasan'];
    $idDestination = $_GET['idDestination'];

    if($_FILES['file']['size'] > 0){
        $nama = $_FILES['file']['name'];
	    $ukuran	= $_FILES['file']['size'];
	    $file_tmp = $_FILES['file']['tmp_name'];
        move_uploaded_file($file_tmp, 'file/'.$nama);
        $upfile=mysqli_query($conn,"update destination set photo='".$nama."' where idDestination = '".$idDestination."'") ;
    }

    $update=mysqli_query($conn,"update destination set lokasiTempat='".$lokasiTempat."',jamBuka='".$jamBuka."', jamTutup='".$jamTutup."', namaTempat='".$namaTempat."', deskripsiRingkasan='".$deskripsiRingkasan."', hargaMasuk='".$hargaMasuk."' where idDestination = '".$idDestination."'") ;

    if($update){
        echo "<script>alert('Success edit');location.href='destination.php';</script>";
    }else{
        printf('Failed sign up: ' . mysqli_error($conn));
        printf('Failed sign up: ' . mysqli_error($conn));
    }
    
?>