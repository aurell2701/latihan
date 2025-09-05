<?php
require_once "classSegitiga.php";

// Buat objek segitiga
$segitiga1 = new Segitiga(10, 8, 6, 8, 6);
$segitiga2 = new Segitiga(5, 4.33, 5, 5, 5);

// Simpan output dalam array
$segitigas = [$segitiga1, $segitiga2];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Informasi Segitiga</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #74ebd5, #ACB6E5);
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 30px;
        }
        h1 {
            color: #333;
            margin-bottom: 20px;
        }
        .card {
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
            padding: 20px;
            margin: 15px;
            width: 320px;
            transition: transform 0.2s;
        }
        .card:hover {
            transform: scale(1.05);
        }
        .title {
            font-weight: bold;
            margin-bottom: 10px;
            font-size: 18px;
            color: #444;
        }
        .info {
            margin: 6px 0;
            font-size: 14px;
            color: #555;
        }
        .jenis {
            margin-top: 10px;
            padding: 8px;
            text-align: center;
            border-radius: 8px;
            font-weight: bold;
            background: #eee;
        }
    </style>
</head>
<body>
    <h1>🔺 Informasi Segitiga 🔺</h1>
    <?php foreach ($segitigas as $i => $sgt): ?>
        <div class="card">
            <div class="title">Segitiga <?= $i+1; ?></div>
            <div class="info">Alas : <?= $sgt->getAlas(); ?></div>
            <div class="info">Tinggi : <?= $sgt->getTinggi(); ?></div>
            <div class="info">Sisi : <?= $sgt->getSisi1(); ?>, <?= $sgt->getSisi2(); ?>, <?= $sgt->getSisi3(); ?></div>
            <div class="info">Luas : <?= $sgt->hitungLuas(); ?></div>
            <div class="info">Keliling : <?= $sgt->hitungKeliling(); ?></div>
            <div class="jenis">Jenis : <?= $sgt->cekJenis(); ?></div>
        </div>
    <?php endforeach; ?>
</body>
</html>
