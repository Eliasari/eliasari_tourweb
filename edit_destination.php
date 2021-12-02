<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<?php 
        include "koneksi.php";
          $idDestination= $_GET['idDestination'];
          $qry_destination= mysqli_query($conn, "select * from destination where idDestination = '" . $idDestination . "'");
          $dt_destination=mysqli_fetch_array($qry_destination);
    ?>

    <div class="animate_animated animatebackInRight animate_slow">
     <div class="container">
         <div class="card" style="margin-top: 6%; box-shadow: 0 19px 38px rgba(0, 0, 0, 0.30), 0 15px 12px rgba(0, 0, 0, 0.22);">
             <div class="card-header bg-light">
                 <h3 style="text-align: center;">Edit Destination</h3>
             </div>
             <div class="card-body">

                 <form action="edit_destination.post.php?idDestination=<?php echo $_GET['idDestination']?>" method="post" enctype="multipart/form-data">
                     <div class="row g-3">
                         <div class="col-md-12">
                             <label>Nama Tempat</label>
                             <input type="text" name="namaTempat" value="<?= $dt_destination['namaTempat']?>" class="form-control">
                         </div>
                     </div>
                     <br>
                     <div class="row g-3">
                        <div class="col-md-6">
                            <label>Lokasi Tempat</label>
                            <input type="text" name="lokasiTempat"  class="form-control" value="<?= $dt_destination['lokasiTempat']?>">
                        </div>
                        <div class="col-md-6">
                            <label>Jam Buka</label>
                            <input type="time" name="jamBuka"  class="form-control" value="<?= $dt_destination['jamBuka']?>">
                        </div>
                        <div class="col-md-6">
                            <label>Harga Masuk</label>
                            <input type="text" name="hargaMasuk"  class="form-control" value="<?= $dt_destination['hargaMasuk']?>">
                        </div>
                     </div>

                     <br>

                     <div class="row g-3">
                         <div class="col-md-6">
                            <label>Jam Tutup</label>
                            <input type="Time" name="jamTutup"  class="form-control" value="<?= $dt_destination['jamTutup']?>">
                        </div>
                         <div class="col-md-6">
                             <label>Photo</label>
                             <input type="file" name="file" class="form-control">
                         </div>
                         <div class="col-md-6">
                             <label>Deskripsi Ringkasan</label>
                             <textarea name="deskripsiRingkasan" class="form-control"><?= $dt_destination['deskripsiRingkasan']?></textarea>
                         </div>
                     </div>

                     <br>

                    <button type="submit" class="submit">SUBMIT</button>
                 </form>
             </div>
         </div>
        </div>
        </div>
</body>
</html>