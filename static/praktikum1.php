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