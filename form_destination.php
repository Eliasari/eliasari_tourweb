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
<div class="animate_animated animatebackInRight animate_slow">
     <div class="container">
         <div class="card" style="margin-top: 7%; box-shadow: 0 19px 38px rgba(0, 0, 0, 0.30), 0 15px 12px rgba(0, 0, 0, 0.22);">
             <div class="card-header bg-light">
                 <h3 style="text-align: center;">Add Destination</h3>
             </div>
             <div class="card-body">
                 <form action="form_destination.post.php" method="post" enctype="multipart/form-data">
                     <div class="row g-3">
                         <div class="col-md-12">
                             <label>Nama Tempat</label>
                             <input type="text" name="namaTempat" value="" class="form-control">
                         </div>
                     </div>
                     <br>
                     <div class="row g-3">
                        <div class="col-md-3">
                            <label>Lokasi Tempat</label>
                            <input type="text" name="lokasiTempat"  class="form-control" value="">
                        </div>
                        <div class="col-md-3">
                            <label>Jam Buka</label>
                            <input type="time" name="jamBuka"  class="form-control" value="">
                        </div>   
                        <div class="col-md-6">
                            <label>Harga Masuk</label>
                            <input type="text" name="hargaMasuk"  class="form-control" value="">
                        </div>   
                     </div>

                     <br>

                     <div class="row g-3">
                         <div class="col-md-3">
                            <label>Jam Tutup</label>
                            <input type="Time" name="jamTutup"  class="form-control">
                        </div>
                        <div class="col-md-3">
                             <label>Photo</label>
                             <input type="file" name="file"  class="form-control">
                         </div>
                         <div class="col-md-6">
                             <label>deskripsiRingkasan</label>
                             <textarea name="deskripsiRingkasan" class="form-control"></textarea>
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