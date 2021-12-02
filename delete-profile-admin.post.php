<?php 
    include "koneksi.php";

    session_start();
    
    $profile = null;

    $result = $conn -> query('update admin set profile = "' . $profile . '" where email = "' . $_SESSION['email'] . '"');

    if (!$result){
        var_dump($conn->query);
        exit();
    }

    header('Location: profile-admin.php');
?>