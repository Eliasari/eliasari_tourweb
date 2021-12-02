

<?php

include './koneksi.php';
session_start();

// hubungannya dengan databaase 

$tempatlahir = $_POST['tempatlahir'];
$umur = $_POST['umur'];
$alamat = $_POST['alamat'];
$hobi = $_POST['hobi'];
$goldar = $_POST['goldar'];

// hubungannya dengan databaase 
// mendeklarasikan variabel sql
$sql = "
    update user
    set umur = '" . $umur . "' , tempatlahir = '" . $tempatlahir . "', alamat = '" . $alamat . "', goldar = '" . $goldar . "', hobi = '" . $hobi . "'
    where email = '" . $_SESSION['email'] . "';
";

// mendeklarasikan variiabel result
$result = mysqli_query($conn, $sql);
if ($result) {
    header('Location: profile.php');
} else {
    printf('Failed update student: ' . mysqli_error($conn));
    exit();
}
?>