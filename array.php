<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    // Membuat array dengan index nama dan umur
    $data = array(
        array("nama" => "Zahra", "umur" => 19),
        array("nama" => "Istya", "umur" => 19),
        array("nama" => "Hesti", "umur" => 19),
        array("nama" => "Alya", "umur" => 19),
        array("nama" => "Elin", "umur" => 18),
        array("nama" => "Ajeng", "umur" => 19),
        array("nama" => "Zizi", "umur" => 19),
        array("nama" => "Tyo", "umur" => 19),
        array("nama" => "Dimas", "umur" => 19),
        array("nama" => "Fahrul", "umur" => 19),
        array("nama" => "Dion", "umur" => 19),
        array("nama" => "Reza", "umur" => 19),
        array("nama" => "Ergi", "umur" => 19),
        array("nama" => "Erlina", "umur" => 18),
        array("nama" => "Amin", "umur" => 19)
    );

    // Konversi array menjadi JSON
    $json_data = json_encode($data, JSON_PRETTY_PRINT);

    // Tampilkan JSON
    echo $json_data;
    ?>
</body>
</html>