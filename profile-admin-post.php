<?php
if ($_FILES['file']['size'] > 0) {
    $nama = $_FILES['file']['name'];
    $ukuran    = $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];
    move_uploaded_file($file_tmp, 'file/' . $nama);
    $upfile = mysqli_query($conn, "update admin set profile='" . $nama . "' where email = '" . $_SESSION['email'] . "' ");
}

$result = mysqli_query($conn, $sql);
if ($result) {
    header('Location: profile.php');
} else {
    printf('Failed update profile: ' . mysqli_error($conn));
    exit();
}
