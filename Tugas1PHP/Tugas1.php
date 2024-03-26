<?php
$nama = 'Mohamad Adyaksa Azky Filoshofi';
$TTL = 'Demak, 26 November 2003';
$gender = 'Laki-Laki';
$alamat = 'Demak, Jawa Tengah, Indonesia';
$mi = 'Mi Bustanul Huda Morodemak';
$mts = 'Mts Sunan Barmawi Morodemak';
$smk = 'SMK Negeri 1 Demak';
$kuliah = 'Universitas Semarang';
$bola = 'Sepak Bola';
$badminton = 'Badminton';
$mancing = 'Mancing';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1 PHP</title>
</head>
<img src="https://cdn-icons-png.flaticon.com/512/149/149071.png"
alt="" width="15%" align="left" hspace="70">
<body bgcolor="lightblue">
    <h1 align="center">
        <i>BIO DATA PRIBADI</i><hr color="yellow">
    </h1>
     <h1 align="center">
        Mohamad Adyaksa Azky Filoshofi
    </h1>
    <p align="justify">Saya adalah mahasiswa S1 teknik informatika semester 5 di Universitas Semarang. memiliki minat dalam
        pemrograman, memiliki pemahaman tentang komputer dan pengembangan web. memiliki pengalaman project, organisasi dan pelatihan
        yang beragam, saya memiliki prinsip pekerja keras, mudah tertarik dan mampu belajar terhadap hal-hal baru. bersemangat untuk maju
        saya selalu siap untuk belajar lebih dan memanfaatkan keterampilan ini untuk berkarir di bidang IT
    </p><br>
    <ol style="padding:0px; margin-left:150px;">
        <h2>Bio Data</h2>
        <li>Nama : <?= $nama ?></li>
        <li>TTL  : <?= $TTL ?></li>
        <li>Jenis Kelamin : <?= $gender ?></li>
        <li>Alamat : <?= $alamat ?></li>
    </ol>
    <ol style="margin-left: 550px; margin-top:-150px;">
    <h2>Pendidikan</h2>
    <li><?= $mi ?></li>
    <li><?= $mts ?></li>
    <li><?= $smk ?></li>
    <li><?= $kuliah ?></li>
</ol>
<ol style="margin-left: 950px; margin-top:-140px;">
    <h2>Hobi</h2>
    <li><?= $bola ?></li>
    <li><?= $badminton ?></li>
    <li><?= $mancing ?></li>
</ol>
<h3 align="center" style="margin-top: 100px">Kontak</h3>
<p align="center">0882007045405   -     @adyaksa_af</p>
</body>
</html>