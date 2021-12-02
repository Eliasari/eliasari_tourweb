<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>booking</title>

  <link rel="stylesheet" type="text/css" href="booking.css">

  <style>
    body {
      background-color: rgb(228, 227, 227);
      font-family: MuseoSans, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica, Arial, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol;
      ;
    }

    .booking {
      width: 200px;
      height: 40px;
      border-radius: 5px;
      font-family: calibri;
      font-weight: bold;
      font-size: 20px;
      outline: none;
      margin-right: 25px;
      align-items: center;
      background-color: #ff4700;
      opacity: 100%;
      border-color: transparent;
      color: white;
      margin-left: 30px;
      margin-top: -2%;
      box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.2)
    }

    /* slider */
    .slider {
      margin: 50px auto;
      width: 50%;
    }

    .img-box img {
      width: 100%;
    }

    .btn {
      border: none;
      outline: none;
      background: #888;
      padding: 10px 30px;
      font-size: 20px;
      color: #ddd;
      cursor: pointer;
      margin: 10px auto;
    }

    .btn:hover {
      background: #111;
    }

    .con {
      align-items: center;
      margin-left: 43%;
      margin-top: 1%;
    }

    .btn2 {
      border: none;
      outline: none;
      background: #00FF00;
      padding: 5px 20px;
      font-size: 20px;
      color: #FFFFFF;
      cursor: pointer;
      margin: 5px auto;

      border-radius: 50%;
      box-shadow: #888;
      box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.2)
    }

    .btn2:hover {
      background: #03d838;
    }

    .buka p {
      margin-left: 3%;
      font-family: MuseoSans, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica, Arial, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol;
    }
  </style>

</head>

<body>
<section>
    <nav> 
            <ul style="margin-left: 21%;">
                <li><a href="index.php">Home</a></li>
                <li><a href="tour.php">Tour</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="galeri.php">Gallery</a></li>
                <button class="profile"><a href="profile.php">Profile</a></button>
                <button class="log-in"><a href="logout.php">Log Out</a></button>
            </ul>
        </nav>
</section>

  <?php
  include "koneksi.php";
  $idDestination = $_GET['idDestination'];

  $qry_destination = mysqli_query($conn, "select * from destination where idDestination = '" . $idDestination . "'");
  $dt_destination = mysqli_fetch_array($qry_destination)
  ?>

  <div class="square" style="border-radius: 0px 0px 20px 20px;">
    <div class="content">
      <h1 style="margin-top: 4%; margin-left: 2%; font-size: 28px;"><?= $dt_destination['namaTempat'] ?></h1>
      <p style="margin-top: -0.5%; margin-left: 2.2%; font-size: 14px; font-weight: 50;"><?= $dt_destination['lokasiTempat'] ?></p>

      <div class="slider">
        <div class="img-box">
          <img src="<?php echo "file/" . $dt_destination['photo']; ?>" class="slider-img">
        </div>

        <button class="btn" onclick="prev()">Prev</button>
        <button class="btn" onclick="next()">Next</button>
      </div>

      <script src="tiket.js"></script>

      <p style="margin-left: 3%; font-weight: 400; font-size: 20px;">Mulai dari</p>
      <p style="margin-left: 3%; font-weight: 400; font-size: 30px; color: #ff4700;"><?= $dt_destination['hargaMasuk'] ?></p>
      <button class="booking"><a href="tiket.php?idDestination=<?= $dt_destination['idDestination'] ?>" style="color: white;">Cari Tiket</a></button>
      <hr style="margin-top: 5%; margin-left: 3%; margin-right: 3%;">

      <h2 style="margin-left: 3%; font-weight: 400; font-size: 18px;">Kesan Pengunjung Lain</h2>
      <p style="margin-left: 3%; font-weight: 400; font-size: 16px; text-align:center; font-family: MuseoSans,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol;">
        </br> “recommended buat wisata edukasi, sayang selama pandemi tidak semaksimal dulu.
        </br> proses redeem cepet dan lebih murah daripada beli onsite. ada spot foto dr ketinggian jg,
        </br> thank you "uniq" top deh menemani liburan kita”</p>

      <h2 style="margin-left: 3%; font-weight: 700; font-size: 14px; text-align:center; font-family: MuseoSans,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol;">~ Debora - Senin 28 Oktober 2030 ~</h2>

      <div class="con">
        <button class="btn2" onclick="prev()">
          < </button>
            <button style="margin-left: 10%;" class="btn2" onclick="next()"> > </button>
      </div>
    </div>
  </div>

  <h2 style="margin-left: 15%; margin-top: 2%; margin-bottom: 2%;">Detail Aktivitas</h1>

    <div class="square" style="border-radius: 20px 20px 0px 0px;">
      <div class="content">
        <h2 style="margin-left: 3%; font-weight: 600; font-size: 20px; margin-top: 4%; margin-bottom: 3%;">Tiket Candi Prambanan</h2>
        <button class="booking"><a href="tiket.php?idDestination=<?= $dt_destination['idDestination'] ?>" style="color: white;">Cari Tiket</a></button>
        <p style="margin-left: 3%; font-family: MuseoSans,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol;">📅 Tersedia Hari Ini
          </br>⏰ Jam Buka (Waktu Setempat): <?= $dt_destination['jamBuka'] ?> - (Jam Redeem Terakhir: <?= $dt_destination['jamTutup'] ?>)
          </br>Lihat Semua Jam Buka</p>
        <div class="buka">
          <p>Senin: Tutup</p>
          <p>Selasa: Tutup</p>
          <p>Rabu: 10:00 - 17:00</p>
          <p>Kamis: 10:00 - 17:00</p>
          <p>Jumat: 10:00 - 17:00</p>
          <p>Sabtu: 10:00 - 17:00</p>
          <p>Minggu: 10:00 - 17:00</p>
        </div>

        <h2 style="margin-left: 3%; font-family: MuseoSans,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol;">Ringkasan</h2>
        <p style=" margin-top: -2%; margin-left: 3%; font-family: MuseoSans,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol;">
          </br>- Kunjungi Candi Prambanan, salah satu Situs Warisan Dunia UNESCO yang paling terkenal di Indonesia
          </br>- Nikmati keindahan kompleks candi Hindu terbesar di Indonesia yang dibangun pada abad ke-9 ini
          </br>- Lihat ratusan candi dengan berbagai ukuran yang tersebar di area seluas 39,8 hektar
          </br>- Kagumi relief berukir indah yang menggambarkan kisah epik Hindu Ramayana dan Bhagavata Purana</p>

        <p style=" margin-top: 3%; margin-left: 3%; font-family: MuseoSans,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol;">😊 Cocok untuk: Warisan Dunia, Berfoto-foto, Belajar & Berkembang, Penyuka Budaya</p>

        <h2 style="margin-left: 3%; font-family: MuseoSans,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol;">Pengalaman Yang Menanti Anda</h2>
        <p style="margin-left: 3%; margin-right: 5%;font-family: MuseoSans,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol;">Terletak di perbatasan Yogyakarta dan Jawa Tengah, tidak terlalu jauh dari Candi Borobudur, terdapat kompleks candi Hindu terbesar di Indonesia yaitu Candi Prambanan. Dibangun pada abad ke-9,
          Candi Prambanan didedikasikan untuk para Dewa Hindu; Siwa, Wisnu, dan Brahma. Ada lebih dari 200 kuil di Situs Warisan Dunia UNESCO ini, dan yang terbesar dan tertinggi di antara mereka akan
          membuat Anda terpesona!</p>
        <p style="margin-left: 3%; margin-right: 5%;font-family: MuseoSans,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol;">Saat Anda berjalan dari satu kuil ke kuil lainnya, pastikan Anda tidak melewatkan relief yang diukir indah yang menceritakan kisah epik Hindu Ramayana dan Bhagavata Purana serta penggambaran orang bijak Hindu.
          Banyaknya candi yang tersebar di sekitar area ini saja menjadikannya layak dikunjungi bagi para pelancong yang ingin mempelajari lebih lanjut tentang sejarah dan budaya Indonesia dari seribu tahun yang lalu!
          Datanglah di sore hari karena pemandangan kompleks candi terlihat semakin menakjubkan saat matahari terbenam.</p>
      </div>
    </div>

    <div class="square" style="box-shadow: 0px 0px 0px 0px rgba(201, 201, 201, 0.2);">
      <div class="content">
        <img style="width:70%; height: 40%; margin-left: 13%;" src="images/candiprambanan.jpg" alt="candiprambanan">
        <hr style="margin-top: 5%; margin-left: 3%; margin-right: 3%;">
        <h2 style="margin-left: 3%; font-family: MuseoSans,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol;">Beli Voucher</h2>
        <h3 style="font-size: 15px; margin-left: 3%; font-family: MuseoSans,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol;">Tiket Masuk ( Warga Negara Indonesia )</h3>
        <h3 style="font-weight:normal;font-size: 14px; margin-left: 3%;">Detail</h3>
        <P style="margin-left: 3%;">
          </br>📅 Hanya berlaku pada tanggal kunjungan yang dipilih
          </br>
          </br>📞 Tidak Perlu Reservasi
          </br>
          </br>📹 Tidak Bisa Refund
          </br>
        </P>

        <p style="align-items: flex-end; color:#ff4700; margin-left: 5%;margin-top: 6%; font-size: 30px;">Rp.150.000</p>
        <button class="booking"><a href="transaksi.php" style="color: white;">Booking</a></button>
      </div>
    </div>
</body>

</html>