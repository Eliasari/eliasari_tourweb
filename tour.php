<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('location: login.php');
}
include "koneksi.php";
$qry = mysqli_query($conn, "select * from user where email = '" . $_SESSION['email'] . "'");
$dt_user = mysqli_fetch_array($qry);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tour</title>
    <link rel="stylesheet" type="text/css" href="tour.css">
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
            <h2>All Tour For You</h2>
        </div>
    </section>
    <?php
    include "koneksi.php";
    $qry_destination = mysqli_query($conn, "select * from destination");
    while ($dt_destination = mysqli_fetch_array($qry_destination)) {
    ?>
        <div class="img-container" style="margin-left: 12%;">
            <div class="text2-container" style="margin-right: 20%;">
                <img src="<?php echo "file/" . $dt_destination['photo'];?>" alt="candi prambanan" >
                <div class="text" style="margin-left: 10%;">
                    <h2><?= $dt_destination['namaTempat'] ?></h2>
                    <p><?= $dt_destination['lokasiTempat'] ?></p>
                    <p><?php echo $dt_destination['jamBuka'] ?> - <?php echo $dt_destination['jamTutup'] ?></p>
                    <p><?= $dt_destination['deskripsiRingkasan'] ?></p>

                    <button class="button-view"><a href="booking.php?idDestination=<?= $dt_destination['idDestination'] ?>" style="color: white;">VIEW DETAILS</button>
                </div>

            </div>
        </div>
    <?php
    }
    ?>

    <!-- footer container -->
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