<?php
    /*code koneksi*/
    include "dbconn.php";
    $query = "SELECT * FROM produk";
    $result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa; 
        }
        .container {
            margin-top: 50px; 
        }
        .table {
            background-color: #fff; 
            border-radius: 10px; 
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); 
        }
        .table th, .table td {
            border-top: none; 
        }
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(0, 0, 0, 0.05); 
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center mb-4">Data Produk</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Produk</th>
                    <th>Harga (Rp)</th>
                    <th>Gambar</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                #Menampilkan tabel dengan mysqli_num_rows
                if (mysqli_num_rows($result) > 0){
                    $counter = 0; #Untuk no index pada table
                    $execute = mysqli_query($dbconn, $sql);
                    while ($data = mysqli_fetch_assoc($execute)) {
                        echo "<tr>";
                        echo "<td>$data[id_gambar]</td>";
                        echo "<td>$data[gambar]</td>";
                        echo "<td><img src='upload/$data[gambar]' alt='$data[gambar]' width='200'></td>";
                        echo "</tr>";
                    }
                }else{
                    echo "Data masih kosong";
                }
        
        
                    #Buatlah perulangan untuk menampilkan data. (Hint: bisa menggunakan mysli_fetch_assoc)
                    
            
                ?>
            </tbody>
        </table>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
