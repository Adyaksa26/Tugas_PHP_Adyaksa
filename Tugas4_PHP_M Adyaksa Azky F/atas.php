<?php
include_once 'webmenu.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website adidas</title>
    <style>
        .header {
            text-align: center;
            background-color: grey;
            color: white;
            padding: 20px;
            margin: 0;
        }

        .menu {
            text-align: center;
            background-color: lightblue;
            color: blue;
            padding: 10px;
        }

        .menu a {
            text-decoration: none;
            color: blue;
        }

        .menu a:hover {
            text-decoration: underline; 
            color: darkblue; 
        }
    </style>
</head>
<body>
    <h1 class="header">ADIDAS DEMAK</h1>

    <div class="menu">
        <!-- HOME | Produk | Pesan | Galeri | Gesbuk -->
        <?php
        // looping foreach dari webmenu.php
        foreach ($menu_atas as $key => $value) {
            // echo "$key $value <br>";
            echo "<a href='index.php?hal=$key'>$value</a> | ";
        }
        ?>
    </div>
</body>