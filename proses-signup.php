<?php

    include "koneksi.php";

    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql = "insert into user (name, email, password) values ('".$name."', '".$email."', '".md5($password)."');
    ";

    $result=mysqli_query($conn, $sql);
    if($result){
        echo "<script>location.href='login.php'</script>";
    }else{
        printf('Failed sign up: ' . mysqli_error($conn));
    }
?>