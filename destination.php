<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .add_destination {
            margin: 0;
            padding: 0;

            align-items: center;
            margin-top: 5%;
            margin-left: 45%;
            margin-bottom: 5%;
        }

        .add_destination button {
            padding: 8px 10px;
            background: #32CD32;
            color: #0ba966;
            border: 1px solid #0ba966;
            border-radius: 2px;
        }

        .add_destination button a {
            color: white;
            text-decoration: none;
            font-weight: normal;
        }
    </style>

</head>

<body>
    <div class="add_destination" >
        <button style="margin-left: -19%;"><a href="form_destination.php">Add Destination</a></button>
        <button style="margin-left: 3%;"><a href="index-admin.php">Back to Home</a></button>
        <button style="margin-left: 3%;"><a href="tour-admin.php">View in Tour</a></button>
    </div>

    <div class="row">
        <?php
        include "koneksi.php";
        $qry_destination = mysqli_query($conn, "select * from destination");
        while ($dt_destination = mysqli_fetch_array($qry_destination)) {
        ?>
            <div class="col-md-3">
                <div class="card">
                    <img src="<?php echo "file/" . $dt_destination['photo']; ?>" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title"><?= $dt_destination['namaTempat'] ?></h5>
                        <p class="card-text"><?= $dt_destination['lokasiTempat'] ?></p>
                        <p class="card-text"><?= $dt_destination['hargaMasuk'] ?></p>
                        <p class="card-text"><?php echo $dt_destination['jamBuka'] ?> - <?php echo $dt_destination['jamTutup'] ?></p>
                        <div class="button" style="margin-left: 20px; margin-top: 10px;">

                            <a href="edit_destination.php?idDestination=<?= $dt_destination['idDestination'] ?>"><button class="btn btn-danger">EDIT</button></a>

                            <a href="delete_destination.post.php?idDestination=<?= $dt_destination['idDestination'] ?>"><button class="btn btn-dark" onclick="return confirm('Are you sure to delete this tour?')"> DELETE</button></a>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</body>

</html>