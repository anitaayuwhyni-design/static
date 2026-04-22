# static
praktikum1.php
<?php
class Pengunjung {
    public static $jumlah = 0;

    public function __construct() {
        self::$jumlah++;
    }
}

// sebelum
$before = Pengunjung::$jumlah;

// buat objek
$p1 = new Pengunjung();
$p2 = new Pengunjung();
$p3 = new Pengunjung();

// sesudah
$after = Pengunjung::$jumlah;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Praktikum 1</title>
    <style>
        body {
            font-family: Arial;
            background: linear-gradient(to right, #36d1dc, #5b86e5);
        }
        .box {
            width: 60%;
            margin: 50px auto;
            background: white;
            padding: 30px;
            border-radius: 15px;
            text-align: center;
        }
        h1 { color: #333; }
        .hasil {
            background: #f1f1f1;
            padding: 15px;
            border-radius: 10px;
            margin-top: 20px;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            background: #5b86e5;
            color: white;
            padding: 10px 15px;
            border-radius: 8px;
            text-decoration: none;
        }
    </style>
</head>

<body>
<div class="box">
    <h1>Praktikum 1 - Static Variable</h1>

    <div class="hasil">
        <p>Sebelum: <?php echo $before; ?></p>
        <p>Sesudah: <?php echo $after; ?></p>
    </div>

    <a href="index.php">Kembali</a>
</div>
</body>
</html>

praktikum2.php
<?php
class Matematika {
    public static function kali($a, $b) {
        return $a * $b;
    }

    public static function bagi($a, $b) {
        return $a / $b;
    }
}

$hasil1 = Matematika::kali(4, 5);
$hasil2 = Matematika::bagi(10, 2);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Praktikum 2</title>
    <style>
        body {
            font-family: Arial;
            background: linear-gradient(to right, #ff9966, #ff5e62);
        }
        .box {
            width: 60%;
            margin: 50px auto;
            background: white;
            padding: 30px;
            border-radius: 15px;
            text-align: center;
        }
        .hasil {
            background: #f9f9f9;
            padding: 15px;
            border-radius: 10px;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            background: #ff5e62;
            color: white;
            padding: 10px;
            border-radius: 8px;
            text-decoration: none;
        }
    </style>
</head>

<body>
<div class="box">
    <h1>Praktikum 2 - Static Method</h1>

    <div class="hasil">
        <p>4 x 5 = <?php echo $hasil1; ?></p>
        <p>10 : 2 = <?php echo $hasil2; ?></p>
    </div>

    <a href="index.php">Kembali</a>
</div>
</body>
</html>

praktikum3.php
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
