<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload File</title>

    <style> 
        h3 {
            margin-left: 45%;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 40px;
            margin-top: 5%;
            /* font-weight: bold;  */
            margin-bottom: 5%;
        }
        input[type=file]{
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type=submit] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
        }
        input[type=submit]:hover {
            background-color: #45a049;
        }
        div.container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;

            margin-left: 22%;
            margin-right: 22%;
        }
    </style>
    
</head>
<body>
        <h3 style="margin-left: 38%;">Bukti Pembayaran</h3>
        <div class="container">
		<form action="upload_tiket.post.php?idTransaksi=<?php echo $_GET['idTransaksi']?>" method="post" enctype="multipart/form-data">
        <div for="file">Bukti Pembayaran</div>
			
			<!-- mulai upload file -->
			<input type="file" name="file" type="file">
			<!-- akhir upload file -->
			
			<input type="submit" name="simpan" class="btn btn-primary">
            
		</form>
        </div>
</body>
</html>