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