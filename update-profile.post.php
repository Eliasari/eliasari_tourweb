<?php 
    include "koneksi.php";

    session_start();

    if($_FILES['file']['size'] > 0){
        $name = $_FILES['file']['name'];
	    $ukuran	= $_FILES['file']['size'];
	    $file_tmp = $_FILES['file']['tmp_name'];
        move_uploaded_file($file_tmp, 'file/'.$name);
        $upfile=mysqli_query($conn,"update user set profile='".$name."' where email = '".$_SESSION['email']."' ") ;
    }
    
    if($upfile){
        echo "<script>alert('Success set your profile');location.href='profile.php';</script>";
    }else{
        echo "<script>alert('Fail set your profile');location.href='profile.php';</script>";
    }
    
?>