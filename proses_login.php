<?php 
    if($_POST){
        include "koneksi.php";
        $email=$_POST['email'];
        $password=$_POST['password'];

        $sql_user=mysqli_query($conn, "select * from user where email = '" . $email . "' and password = '" . md5($password) . "'");
        $sql_admin=mysqli_query($conn, "select * from admin where email = '" . $email . "' and password = '" . md5($password) . "'");

        if(empty($email)){
            echo "<script>alert('Email tidak boleh kosong');location.href='login.php';</script>";
        } elseif(empty($password)){
            echo "<script>alert('Password tidak boleh kosong');location.href='login.php';</script>";
        }else{
            if(mysqli_num_rows($sql_admin)>0){
                $dt_login=mysqli_fetch_assoc($sql_admin);
                session_start();
                $_SESSION['email']=$dt_login['email'];
                $_SESSION['password']=$dt_login['password'];
                header('Location: index-admin.php');
            }elseif(mysqli_num_rows($sql_user)>0){
                $dt_login=mysqli_fetch_assoc($sql_user);
                session_start();
                $_SESSION['email']=$dt_login['email'];
                $_SESSION['password']=$dt_login['password'];
                header('Location: index.php');
            }else{
                echo "<script>alert('Username dan Password tidak benar');location.href='login.php';</script>";
            }
        }
    }
?>