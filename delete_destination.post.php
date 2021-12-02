<?php 
    include "koneksi.php";
    $idDestination = $_GET['idDestination'];


    $sql= "delete from destination where idDestination = '" . $idDestination . "'";

    $result = mysqli_query($conn, $sql);

    if($result){
        echo "<script>alert('Success delete destination');</script>";
        header('Location: destination.php');
    }
?>