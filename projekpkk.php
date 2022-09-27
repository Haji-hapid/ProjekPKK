<?php
include("function2.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link href="style.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Noto+Sans+Mono:wght@300&display=swap" rel="stylesheet">
    <title>Produk PKK</title>
</head>
<body>
    <nav>
    <div>
        <h3>WEB KELOMPOK KAMI</h3>
        </div>
        <ul>
            <li><a href="projekpkk.php">Home</a></li>
            <li><a href="produk.php">Produk</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
        </nav>
    <hr>
    <h3>RAKGH FOOD</h3>
    <center>
    <table border="1">
        <th>Poto</th>
        <th>Identitas</th>
<?php foreach( $data as $d ) : ?>
            <tr>
                <td> <img src="<?= $d["foto"]; ?>" width="250">
                <td> <?= $d["identitas"]; ?></td>
                </td>
                </tr>
<?php endforeach; ?>
</tabel>
</body>
</html>