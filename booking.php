<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>booking</title>
    
    <link rel="stylesheet" type="text/css" href="booking.css">

    <style>
        body{
            background-color: rgb(228, 227, 227);
        }
        .booking{
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
          .slider{
              margin:50px auto;
              width:50%;
          }

          .img-box img{
              width:100%;
          }

          .btn{
              border:none;
              outline:none;
              background:#888;
              padding:10px 30px;
              font-size: 20px;
              color:#ddd;
              cursor: pointer;
              margin:10px auto;		
              
              border-radius: 5%;
          }

          .btn:hover{
              background: #111;
          }

          .con {
              align-items: center;
              margin-left: 44%;
              margin-top: 2%;
          }
          .btn2{
              border:none;
              outline:none;
              background: #00FF00;
              padding:5px 20px;
              font-size: 20px;
              color:#FFFFFF;
              cursor: pointer;
              margin:5px auto;	

              border-radius: 50%;
              box-shadow: #888;
              box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.2)
          }

          .btn2:hover{
              background: #03d838;
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

    <div class="square">
      <div class="content">
        <h1 style="margin-top: 4%; margin-left: 2%; font-size: 28px;" ><?= $dt_destination['namaTempat'] ?></h1>
        <p style="margin-top: -0.5%; margin-left: 2.2%; font-size: 14px; font-weight: 50;"><?= $dt_destination['lokasiTempat'] ?></p>
        <div class="slider">
			      <div class="img-box">
				      <img src="<?php echo "file/" . $dt_destination['photo'];?>" class="slider-img">
			      </div>

			        <button class="btn" onclick="prev()">Prev</button>
			        <button class="btn" onclick="next()">Next</button>
		    </div>
            
            <p style="margin-left: 3%; font-weight: 400; font-size: 20px;">Mulai dari</p>
            <p style="margin-left: 3%; font-weight: 400; font-size: 30px; color: #ff4700;"><?= $dt_destination['hargaMasuk'] ?></p>
            <button class="booking"><a href="tiket.php?idDestination=<?= $dt_destination['idDestination'] ?>" style="color: white;">Cari Tiket</a></button>
            <hr style="margin-top: 5%; margin-left: 3%; margin-right: 3%;">  
            
            <h2 style="margin-left: 3%; font-weight: 400; font-size: 18px;">Kesan Pengunjung Lain</h2>
            <p style="margin-left: 3%; font-weight: 400; font-size: 16px; text-align:center; margin-top:2%; font-family: MuseoSans,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol;">
            </br> “recommended buat wisata edukasi, sayang selama pandemi tidak semaksimal dulu. 
            </br>  proses redeem cepet dan lebih murah daripada beli onsite. ada spot foto dr ketinggian jg, 
            </br>  thank you "uniq" top deh menemani liburan kita”</p>

            <h2 style="margin-left: 3%; font-weight: 700; font-size: 14px; text-align:center; font-family: MuseoSans,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol;">~ Debora - Senin 28 Oktober 2030 ~</h2>

            <div class="con">
                <button class="btn2"  onclick="prev()"> < </button>
			    <button style="margin-left: 10%;" class="btn2" onclick="next()"> > </button>
            </div>
        </div>
    </div>
</div>
</div>



   
</body>
</html>