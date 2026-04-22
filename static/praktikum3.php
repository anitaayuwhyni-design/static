<?php
class Produk {
    public static $data = [];

    public static function tambahProduk($nama, $harga) {
        self::$data[] = [
            "nama" => $nama,
            "harga" => $harga
        ];
    }
}

class Transaksi {
    public static function total() {
        $total = 0;
        foreach (Produk::$data as $p) {
            $total += $p['harga'];
        }
        return $total;
    }
}

// tambah produk
Produk::tambahProduk("Indomie", 3000);
Produk::tambahProduk("Teh Botol", 5000);
Produk::tambahProduk("Snack", 7000);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Praktikum 3</title>
    <style>
        body {
            font-family: Arial;
            background: linear-gradient(to right, #11998e, #38ef7d);
        }
        .box {
            width: 70%;
            margin: 50px auto;
            background: white;
            padding: 30px;
            border-radius: 15px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th {
            background: #11998e;
            color: white;
            padding: 10px;
        }
        td {
            padding: 10px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            background: #11998e;
            color: white;
            padding: 10px;
            border-radius: 8px;
            text-decoration: none;
        }
    </style>
</head>

<body>
<div class="box">
    <h1>Praktikum 3 - Sistem Produk</h1>

    <table>
        <tr>
            <th>Nama Produk</th>
            <th>Harga</th>
        </tr>

        <?php foreach (Produk::$data as $p): ?>
        <tr>
            <td><?php echo $p['nama']; ?></td>
            <td><?php echo $p['harga']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

    <h3>Total: Rp <?php echo Transaksi::total(); ?></h3>

    <a href="index.php">Kembali</a>
</div>
</body>
</html>