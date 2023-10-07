<?php
$JualLaptops =[
    [
    "brand" => "Advan",
    "procie" => "AMD RYZEN 6600H",
    "price" => 6999999,
    "series" =>"advan WorkPlus",
    "gaming" =>" bisa banget",
    "gambar" => "laptopadvan.jpg"
    ],
    [
    "brand" => "Lenovo",
    "procie" => "AMD RYZEN 77006",
    "price" => 8000000,
    "series" =>"Lenovo gaming RYZEN",
    "gaming" =>" bisa banget",
    "gambar" => "laptoplenovo.jpg"
    ],
    [
    "brand" => "Asus",
    "procie" => "intel core i5 13300u",
    "price" => 12000000,
    "series" =>"Asus TUF gaming",
    "gaming" =>" bisa banget",
    "gambar" => "laptopasus1.jpg"
    ],
    [
    "brand" => "msi",
    "procie" => "core i7 135600",
    "price" => 8000000,
    "series" =>"MSI Gaming gold",
    "gaming" =>" bisa banget",
    "gambar" => "laptopmsi.jpg"
    ],
    [
    "brand" => "Apple",
    "procie" => "M1 GENERATION",
    "price" => 8000000,
    "series" =>"Mackbook Air M1",
    "gaming" =>" untuk gaya aja",
    "gambar" => "laptopmacbook.jpg"
    ],
]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penjualan Laptop</title>
</head>
<body>
    <h1>Rincian Laptop dan spesifikasi</h1>
    <?php foreach($JualLaptops as $jualLaptop) : ?>
    <ul>
        <li class="list"><img src="img_san/<?= $jualLaptop["gambar"]?>" alt="gambar laptop"></li>
        <li class="list">brand : <?= $jualLaptop["brand"]?></li>
        <li class="list">dengan Prosesor : <?= $jualLaptop["procie"]?></li>
        <li class="list">Jenis Laptop :<?= $jualLaptop["series"]?></li>
        <li class="list">Harga :<?= $jualLaptop["price"]?></li>
        <li class="list">apakah bisa gaming ? : <?= $jualLaptop["gaming"]?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>
