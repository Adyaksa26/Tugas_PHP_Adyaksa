<?php
error_reporting(0);
require_once 'Mahasiswa.php';

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$kuliah = $_POST['kuliah'];
$matkul = $_POST['matkul'];
$nilai = $_POST['nilai'];
$proses = $_POST['proses'];

$ns1 = new Mahasiswa($nim, $nama, $kuliah, $matkul, $nilai);
?>

<h2 align="center">Daftar Nilai Ujian Mahasiswa</h2>
<table border="1" cellspacing="1" cellpadding="10" width="90%" align="center" bgcolor="darkblue">
    <thead style="color: white; text-align: left;">
        <tr>
            <th>Nim</th>
            <th>Nama</th>
            <th>Kuliah</th>
            <th>Mata Kuliah</th>
            <th>Nilai</th>
            <th>Grade</th>
            <th>Predikat</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody style="color: white;">
        <?php
            echo '<tr>';
            echo '<td>'. $ns1->nim.'</td>';
            echo '<td>'. $ns1->nama.'</td>';
            echo '<td>'. $ns1->kuliah.'</td>';
            echo '<td>'. $ns1->matkul.'</td>';
            echo '<td>'. $ns1->nilai.'</td>';
            echo '<td>'. $ns1->getGrade().'</td>';
            echo '<td>'. $ns1->getPredikat().'</td>';
            echo '<td>'. $ns1->getStatus().'</td>';
            echo '</tr>';
        ?>
    </tbody>
</table>
<div align="center" style="margin-top: 20px;">
    <button name="kembali" onclick="window.location.href = 'formMahasiswa.php';" type="button" class="btn btn-primary mr-4">Kembali</button>
</div>