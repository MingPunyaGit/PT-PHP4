<!-- TIDAK PERLU UBAH CODE FILE INI -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Produk</title>
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
        <h2 class="text-center mb-4">Form Upload Produk</h2>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="inputNama">Nama Produk</label>
                <input type="text" class="form-control" id="inputNama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="inputHarga">Harga</label>
                <input type="number" class="form-control" id="inputHarga" name="harga" min="0" required>
            </div>
            <div class="form-group">
                <label for="inputFile">Pilih Gambar Produk</label>
                <input type="file" class="form-control-file" id="inputFile" name="upload" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
