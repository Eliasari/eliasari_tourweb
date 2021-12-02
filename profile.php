<?php
    include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>profile</title>
  <link rel="stylesheet" text="text/css" href="profile.css">
</head>
<body>

<?php 
    session_start();
    $qry=mysqli_query($conn,"select * from user where email = '".$_SESSION['email']."'");
    $dt_user=mysqli_fetch_array($qry);
?>

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
</section>


<div class="container_picture">
        <img class="profile-pic-div" src="<?php echo "file/".$dt_user['profile']; ?>">  
    <ul>
        <button><a href="form_foto.php" class="profile2" type="submit">update profile</a></button>
        <button><a href="delete-profile.post.php" onclick="return confirm('Apakah anda yakin menghapus foto?')" class="profile2" type="submit">delete profile</a></button>  
    </ul>
</div>

    <h2 style="margin-left:43%; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;  font-size:36px; margin-top: 2%;">Your Profile</h2>

    <form id="form" action="profile2_create_post.php" method="post">
    <div class="container_pengisiandata"> 
    
    <label for="ftempatlahir">Tempat Lahir</label>
    <input type="text" id="ftempatlahir" name="tempatlahir" placeholder="Your Place of Birth.." value="<?=$dt_user['tempatlahir']?>" >

    <label for="fumur">Umur</label>
    <input type="number" id="fumur  " name="umur" placeholder="Your umur.." value="<?=$dt_user['umur']?>">

    <label for="falamat">Alamat</label>
    <input type="text" id="falamat" name="alamat" placeholder="Your address.." value="<?=$dt_user['alamat']?>">

    <label for="fgoldar">Golongan Darah</label>
    <input type="text" id="fgoldar" name="goldar" placeholder="Your blood type.." value="<?=$dt_user['goldar']?>">

    <label for="fhobi">Hobi</label>
    <input type="text" id="fhobi" name="hobi" placeholder="Your hobby.." value="<?=$dt_user['hobi']?>">

    <div>
    <button><a href="" type="submit" class="create" onclick="alert('Apakah yakin data yang Anda masukkan sudah benar?')">Ubah</button>
    <button type="submit">Simpan</button>
    </div>
    </div>
    </form>

<script src="profile.js"></script>

</body>
</html>