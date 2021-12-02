<?php
    session_start();
    if(!isset($_SESSION['email'])){
        header('location: login.php');
    }
    include "koneksi.php";
    $qry=mysqli_query($conn, "select * from user where email = '".$_SESSION['email']."'");
    $dt_user=mysqli_fetch_array($qry);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri Tour</title>
    <link rel="stylesheet" type="text/css" href="galeri.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
</head>
<body>
<section>
    <nav> 
            <ul style="margin-left: 25%;">
                <li><a href="index.php">Home</a></li>
                <li><a href="tour.php">Tour</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="galeri.php">Gallery</a></li>
                <button class="profile"><a href="profile.php">Profile</a></button>
                <button class="log-in"><a href="logout.php">Log Out</a></button>
            </ul>
        </nav>

        <div class="text-container">
            <h2>Gallery</h2>
        </div>
    </section>

    <div class="flip-main">
        <div class="container">
           <div class="row">
              <!-- flip card start -->
              <div class="flip-card">
                 <div class="flip-card-inner">
                     <div class="flip-card-front">
                        <img src="pinuspengger.jpg" alt="flip-card" style="height: 206px;">
                     </div>
                     <div class="flip-card-back">
                        <div class="text">
                           <h3>Pinus Pengger</h3>
                           <p>Daerah Istimewa Yogyakarta</p>
                        </div>
                     </div>
                 </div>
              </div>
              <!-- flip card end -->
              <!-- flip card start -->
              <div class="flip-card">
                 <div class="flip-card-inner">
                     <div class="flip-card-front">
                        <img src="guagong.jpg" alt="flip-card">
                     </div>
                     <div class="flip-card-back">
                        <div class="text">
                           <h3>Gua Gong</h3>
                           <p>Pacitan Jawa Timur</p>
                        </div>
                     </div>
                 </div>
              </div>
              <!-- flip card end -->
              <!-- flip card start -->
              <div class="flip-card">
                 <div class="flip-card-inner">
                     <div class="flip-card-front">
                        <img src="makambungkarno.jpg" alt="flip-card">
                     </div>
                     <div class="flip-card-back">
                        <div class="text">
                           <h3>Museum Bungkarno</h3>
                           <p>Blitar Jawa Timur</p>
                        </div>
                     </div>
                 </div>
              </div>
              <!-- flip card end -->
              <!-- flip card start -->
              <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                       <img src="kampungafrika.jpg" alt="flip-card">
                    </div>
                    <div class="flip-card-back">
                       <div class="text">
                          <h3>Kampung Afrika</h3>
                          <p>Blitar Jawa Timur</p>
                       </div>
                    </div>
                </div>
             </div>
             <!-- flip card end -->
             <!-- flip card start -->
             <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                       <img src="istanagebang.jpg" alt="flip-card">
                    </div>
                    <div class="flip-card-back">
                       <div class="text">
                          <h3>Istana Gebang</h3>
                          <p>Blitar Jawa Timur</p>
                       </div>
                    </div>
                </div>
             </div>
             <!-- flip card end -->
             <!-- flip card start -->
             <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                       <img src="cobansewu2.jpg" alt="flip-card">
                    </div>
                    <div class="flip-card-back">
                       <div class="text">
                          <h3>Coban Sewu</h3>
                          <p>Malang Jawa Timur</p>
                       </div>
                    </div>
                </div>
             </div>
             <!-- flip card end -->
             <!-- flip card start -->
             <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                       <img src="kampungjodipan.jpg" alt="flip-card">
                    </div>
                    <div class="flip-card-back">
                       <div class="text">
                          <h3>Kampung Jodipan</h3>
                          <p>Malang Jawa Timur</p>
                       </div>
                    </div>
                </div>
             </div>
             <!-- flip card end -->
             <!-- flip card start -->
             <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                       <img src="museumangkut.jpg" alt="flip-card">
                    </div>
                    <div class="flip-card-back">
                       <div class="text">
                          <h3>Museum Angkut</h3>
                          <p>Malang Jawa Timur</p>
                       </div>
                    </div>
                </div>
             </div>
             <!-- flip card end -->
             <!-- flip card start -->
             <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                       <img src="pulaukomodo.jpg" alt="flip-card" style="height: 206px;">
                    </div>
                    <div class="flip-card-back">
                       <div class="text">
                          <h3>Pulau Komodo</h3>
                          <p>Nusa Tenggara Timur</p>
                       </div>
                    </div>
                </div>
             </div>
             <!-- flip card end -->
             <!-- flip card start -->
             <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                       <img src="kawahijen.jpg" alt="flip-card">
                    </div>
                    <div class="flip-card-back">
                       <div class="text">
                          <h3>Kawah Ijen</h3>
                          <p>Bondowoso Jawa Timur</p>
                       </div>
                    </div>
                </div>
             </div>
             <!-- flip card end -->
             <!-- flip card start -->
             <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                       <img src="gunungkelimutu.jpg" alt="flip-card" style="height: 226px;">
                    </div>
                    <div class="flip-card-back">
                       <div class="text">
                          <h3>Gunung Kelimutu</h3>
                          <p>Flores Nusa Tenggara Timur</p>
                       </div>
                    </div>
                </div>
             </div>
             <!-- flip card end -->
             <!-- flip card start -->
             <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                       <img src="gerejaayam.jpg" alt="flip-card" style="height: 226px;">
                    </div>
                    <div class="flip-card-back">
                       <div class="text">
                          <h3>Gereja Ayam</h3>
                          <p>Magelang Jawa Tengah</p>
                       </div>
                    </div>
                </div>
             </div>
             <!-- flip card end -->
           </div>
        </div>
      </div>

      <!-- footer -->
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