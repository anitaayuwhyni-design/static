<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Menu Praktikum</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #667eea, #764ba2);
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 50px auto;
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th {
            background-color: #764ba2;
            color: white;
            padding: 15px;
        }

        td {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        a {
            text-decoration: none;
            color: #667eea;
            font-weight: bold;
        }

        a:hover {
            color: #764ba2;
        }

        .btn {
            background: #667eea;
            color: white;
            padding: 8px 15px;
            border-radius: 8px;
            display: inline-block;
        }

        .btn:hover {
            background: #764ba2;
        }
    </style>
</head>

<body>

<div class="container">
    <h1>MENU PRAKTIKUM</h1>

    <table>
        <tr>
            <th>No</th>
            <th>Nama Praktikum</th>
            <th>Aksi</th>
        </tr>

        <tr>
            <td>1</td>
            <td>Praktikum 1 - Static Variable</td>
            <td><a class="btn" href="praktikum1.php">Lihat</a></td>
        </tr>

        <tr>
            <td>2</td>
            <td>Praktikum 2 - Static Method</td>
            <td><a class="btn" href="praktikum2.php">Lihat</a></td>
        </tr>

        <tr>
            <td>3</td>
            <td>Praktikum 3 - Sistem Produk</td>
            <td><a class="btn" href="praktikum3.php">Lihat</a></td>
        </tr>
    </table>
</div>

</body>
</html>