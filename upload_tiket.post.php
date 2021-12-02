<?php
include "koneksi.php";

session_start();
$idTransaksi = $_GET['idTransaksi'];

if($_FILES['file']['size'] > 0){
$bukti = $_FILES['file']['name'];
$ukuran = $_FILES['file']['size'];
$file_tmp = $_FILES['file']['tmp_name'];
$upfile = move_uploaded_file($file_tmp, 'bukti/'.$bukti);
$upfile  =mysqli_query($conn,"update transaksi set bukti='".$bukti."' where idTransaksi = '".$idTransaksi."' ") ;

}

if(!$upfile){
    var_dump ($conn->error);
    exit();
}

header('Location: transaksi.php');

?>
















