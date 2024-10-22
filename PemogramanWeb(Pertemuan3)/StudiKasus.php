<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Pencatatan Data Penjualan</title>
</head>
<style>
    input[type="text"], input[type="number"] {
            width: 30%;
            padding: 5px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
            background-color: #f9f9f9;
            transition: all 0.3s ease;
        }
</style>
<body>
    <h2>Sistem Pencatatan Data Penjualan</h2>

    <?php
    // Cek apakah form sudah di-submit dengan memeriksa apakah field pertama diisi
    if (isset($_POST['nama_produk1'])) {
        // Ambil data input
        $nama_produk1 = $_POST['nama_produk1'];
        $harga1 = $_POST['harga1'];
        $jumlah1 = $_POST['jumlah1'];
        $total1 = $harga1 * $jumlah1;

        $nama_produk2 = $_POST['nama_produk2'];
        $harga2 = $_POST['harga2'];
        $jumlah2 = $_POST['jumlah2'];
        $total2 = $harga2 * $jumlah2;

        $nama_produk3 = $_POST['nama_produk3'];
        $harga3 = $_POST['harga3'];
        $jumlah3 = $_POST['jumlah3'];
        $total3 = $harga3 * $jumlah3;

        // Total penjualan
        $total_jumlah = $jumlah1 + $jumlah2 + $jumlah3;
        $total_penjualan = $total1 + $total2 + $total3;

        // Tampilkan laporan penjualan
        echo "
        <h2>Laporan Penjualan:</h2>
        <table border='1' cellpadding='5' cellspacing='0'>
            <tr>
                <th>Nama</th>
                <th>Harga Per Produk</th>
                <th>Jumlah Terjual</th>
                <th>Total</th>
            </tr>
            <tr>
                <td>{$nama_produk1}</td>
                <td>{$harga1}</td>
                <td>{$jumlah1}</td>
                <td>{$total1}</td>
            </tr>
            <tr>
                <td>{$nama_produk2}</td>
                <td>{$harga2}</td>
                <td>{$jumlah2}</td>
                <td>{$total2}</td>
            </tr>
            <tr>
                <td>{$nama_produk3}</td>
                <td>{$harga3}</td>
                <td>{$jumlah3}</td>
                <td>{$total3}</td>
            </tr>
            <tr>
                <td colspan='2'>Total Penjualan</td>
                <td>{$total_jumlah}</td>
                <td>{$total_penjualan}</td>
            </tr>
        </table>";
    } else {
        // Tampilkan form input
        echo "
        <form method='post' action=''>
            <h3>Form Input untuk Data Penjualan</h3>

            <label for='nama_produk1'>Nama Produk A:</label><br>
            <input type='text' name='nama_produk1' value='Produk A' ><br>

            <label for='harga1'>Harga per Produk A:</label><br>
            <input type='number' name='harga1' value='10000'><br>

            <label for='jumlah1'>Jumlah Terjual Produk A:</label><br>
            <input type='number' name='jumlah1' value='5'><br><br>

            <label for='nama_produk2'>Nama Produk B:</label><br>
            <input type='text' name='nama_produk2' value='Produk B'><br>

            <label for='harga2'>Harga per Produk B:</label><br>
            <input type='number' name='harga2' value='7500'><br>

            <label for='jumlah2'>Jumlah Terjual Produk B:</label><br>
            <input type='number' name='jumlah2' value='10'><br><br>

            <label for='nama_produk3'>Nama Produk C:</label><br>
            <input type='text' name='nama_produk3' value='Produk C'><br>

            <label for='harga3'>Harga per Produk C:</label><br>
            <input type='number' name='harga3' value='12000'><br>

            <label for='jumlah3'>Jumlah Terjual Produk C:</label><br>
            <input type='number' name='jumlah3' value='8'><br><br>

            <input type='submit' value='Kirim'>
        </form>";
    }
    ?>

</body>
</html>