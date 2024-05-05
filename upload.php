<?php
    /*code koneksi*/
    include "dbconn.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Produk</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa; 
            padding: 20px;
        }
        .container {
            max-width: 500px;
            background-color: #fff; 
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); 
            padding: 30px;
            margin: 0 auto;
        }
        .form-group {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        #Buat valiadasi untuk tipe file jpg, jpeg, dan png
        if (isset($_FILES["upload"]["name"])) {
            $valid = [".jpg",".jpeg",".png"];
            $filetype = strtolower(pathinfo($_FILES["upload"]["name"], PATHINFO_EXTENSION));

            if (/*coding disini*/ in_array($filetype, $valid)) {
               
                echo "<div class='alert alert-danger' role='alert'>File yang diupload bukan gambar</div>";
            }

            #Buat validasi untuk file size tidak boleh lebih dari 1MB
            if (/*coding disini*/ $_FILES["upload"]["size"] > 1000000) {

                echo "<div class='alert alert-danger' role='alert'>File yang diupload tidak boleh lebih dari 1MB</div>";
            }

            #Untuk menampilkan pesan keterangan file
            if (/*coding disini*/ 
                isset($_FILES["upload"]["name"])) {
                echo "<div class='alert alert-success' role='alert'>Keterangan file: <br>";
                echo "Upload: " . /*coding disini*/
                $_FILES["upload"]["name"] . " <br>";
                echo "Type: " . /*coding disini*/
                $_FILES["upload"]["type"] . " <br>";
                echo "Size: " . /*coding disini*/
                ($_FILES["upload"]["size"]/1024/1024) . " MB <br>";
                echo "Stored in: " . /*coding disini*/
                $_FILES["upload"]["tmp_name"] . " <br>";

               
                #Upload ke database
                #Hanya tambahkan querynya saja
                $uploadfile = "upload/" . $_FILES["upload"]["name"];
                if (move_uploaded_file($_FILES["upload"]["tmp_name"], $uploadfile)) {
                    $nama = $_POST["nama"];
                    $harga = $_POST["harga"];
                    $query = /*query*/ "INSERT INTO produk (nama_produk, harga, gambar_produk) VALUES ('$uploadfile')";
                    $res = mysqli_query($conn, $query);
                    if ($res) {
                        echo "Status: sukses upload";
                    } else {
                        echo "Status: gagal upload";
                    }
                 
                } else {
                    echo "Status: gagal upload" . $_FILES["upload"]["error"];
                }
                echo "</div>";
            }
        } else {
            echo "<div class='alert alert-warning' role='alert'>Masih kosong</div>";
        }
        ?>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
