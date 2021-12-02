<?php
    session_start();
    if(!isset($_SESSION['email'])){
        header('location: login.php');
    }
    include "koneksi.php";
    $qry=mysqli_query($conn, "select * from admin where email = '".$_SESSION['email']."'");
    $dt_admin=mysqli_fetch_array($qry);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="about.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
</head>
<body>
    <!-- navbar -->
    <section>
    <nav> 
            <ul style="margin-left: 25%;">
                <li><a href="index-admin.php">Home</a></li>
                <li><a href="tour-admin.php">Tour</a></li>
                <li><a href="about-admin.php">About</a></li>
                <li><a href="galeri-admin.php">Gallery</a></li>
                <button class="profile"><a href="profile-admin.php">Profile</a></button>
                <button class="log-in"><a href="logout.php">Log Out</a></button>
            </ul>
        </nav>

        <div class="text-container">
            <h2>About Me</h2>
        </div>
    </section>


    <!-- profile -->
    <div class = "about-wrapper">
        <div class = "about-left">
          <div class = "about-left-content">
            <div>
              <div class = "shadow">
                <div class = "about-img">
                  <img src = "profile2.jpg" alt = "profile">
                </div>
              </div>
  
              <h2>Anonim</h2>
              <h3>Siswi SMK Telkom Malang</h3>
            </div>
  
            <ul class = "icons">
              <li><i class = "fab fa-twitter"></i></li>
              <li><i class = "fab fa-linkedin"></i></li>
              <li><i class = "fab fa-instagram"></i></li>
            </ul>
          </div>
        </div>
  
        <div class = "about-right">
          <h1>hi<span>!</span></h1>
          <h2>Here's who I am & what I do</h2>
          <div class = "about-btns">
            <button type = "button" class = "btn btn-pink">resume</button>
            <button type = "button" class = "btn btn-white">projects</button>
          </div>
  
          <div class = "about-para">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, aspernatur possimus ullam quaerat, laboriosam ex voluptate aliquid laborum, obcaecati ratione accusamus! Ea nisi modi dolor nam numquam? Temporibus, molestias amet.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus iure tempora alias laudantium sapiente impedit!</p>
          </div>
        </div>
      </div>

<!-- About footer container -->
<div class="footer-container">
    <footer class="footer">
         <div class="container">
             <div class="row">
                 <div class="footer-col">
                     <h4>company</h4>
                     <ul>
                         <li><a href="#">about us</a></li>
                         <li><a href="#">our services</a></li>
                         <li><a href="#">privacy policy</a></li>
                         <li><a href="#">tour program</a></li>
                     </ul>
                 </div>
                 <div class="footer-col">
                     <h4>get help</h4>
                     <ul>
                         <li><a href="#">FAQ</a></li>
                         <li><a href="#">eksplore</a></li>
                         <li><a href="#">seminar</a></li>
                     </ul>
                 </div>
                 <div class="footer-col">
                    <h4>Contact Information</h4>
                    <ul>
                        <li><a href="#"><i class="fas fa-search-location" style="margin-right: 10px;"></i>Jl.Tambingan G6 D26</a></li>
                        <li><a href="#"><i class="fas fa-phone" style="margin-right: 10px;"></i>0812-1711-6003</a></li>
                        <li><a href="#"><i class="fas fa-envelope" style="margin-right: 10px;"></i>elia21196@gmail.com</a></li>
                    </ul>
                </div>
                 <div class="footer-col">
                     <h4>follow us</h4>
                     <div class="social-links">
                         <a href="#"><i class="fab fa-facebook-f"></i>
                         <a href="#"><i class="fab fa-twitter"></i>
                         <a href="#"><i class="fab fa-instagram"></i>
                         <a href="#"><i class="fab fa-linkedin-in"></i>
                     </div>
                 </div>
             </div>
         </div>
    </footer>
  </div>
</body>
</html>