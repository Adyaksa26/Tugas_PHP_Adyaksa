<?php
$a1 = ['nama'=>'M Adyaksa Azky F', 'nim'=>'211210106', 'nilai'=>100];
$a2 = ['nama'=>'Jay Idzes', 'nim'=>'211210145', 'nilai'=>85];
$a3 = ['nama'=>'Nathan', 'nim'=>'211217293', 'nilai'=>60];
$a4 = ['nama'=>'Ragnar', 'nim'=>'211210264', 'nilai'=>75];
$a5 = ['nama'=>'Marteen', 'nim'=>'211210167', 'nilai'=>45];
$a6 = ['nama'=>'Marcelino', 'nim'=>'211214546', 'nilai'=>25];
$a7 = ['nama'=>'Sandy Walsh', 'nim'=>'211210989', 'nilai'=>80];
$a8 = ['nama'=>'Baggot', 'nim'=>'211210026', 'nilai'=>69];
$a9 = ['nama'=>'Marc Klok', 'nim'=>'211212611', 'nilai'=>39];
$a10 = ['nama'=>'Justin Hubner', 'nim'=>'211218393', 'nilai'=>88];

$ar_nama = [$a1,$a2,$a3,$a4,$a5,$a6,$a7,$a8,$a9,$a10];

// deklarasikan nama judul pada table header menggunakan looping array
$ar_judul = ['No', 'Nama Mahasiswa', 'Nim', 'Nilai', 'Keterangan', 'Grade', 'Predikat'];

// fungsi agregat di array
$jumlah_nilai = array_column($ar_nama,'nilai');
$nilai_keseluruhan = array_sum($jumlah_nilai);
$nilai_tertinggi = max($jumlah_nilai);
$nilai_terendah = min($jumlah_nilai);
$jumlah_mahasiswa = count($ar_nama);
$nilai_rata2 = $nilai_keseluruhan / $jumlah_mahasiswa;

$keterangan = [
    'Nilai Tertinggi'=>$nilai_tertinggi,
    'Nilai Terendah'=>$nilai_terendah,
    'Nilai Rata-Rata'=>$nilai_rata2,
    'Jumlah Mahasiswa'=>$jumlah_mahasiswa,
    'Jumlah Keseluruhan Nilai'=>$nilai_keseluruhan
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar Nilai Mahasiswa</title>
</head>
<body>
    <h2 align="center">Daftar Nilai Mahasiswa</h2>
    <table border="1" cellpadding="10" cellspacing="2" width="100%">
        <thead bgcolor="yellow">
            <tr>
                <?php foreach ($ar_judul as $judul) { ?>
                    <th><?= $judul ?></th>
                <?php } ?>
            </tr>
        </thead>
        <tbody align="center">
        <?php
            $no=1;
            foreach ($ar_nama as $nama) {
                // Ternary
                $ket = ($nama['nilai'] >= 65) ? 'Lulus' : 'Gagal';

                // IF
                if ($nama['nilai'] >= 85 && $nama['nilai'] <= 100) $grade = 'A';
                else if ($nama['nilai'] >= 75 && $nama['nilai'] < 85) $grade = 'B';
                else if ($nama['nilai'] >= 65 && $nama['nilai'] < 75) $grade = 'C';
                else if ($nama['nilai'] >= 50 && $nama['nilai'] < 65) $grade = 'D';
                else if ($nama['nilai'] >= 0 && $nama['nilai'] < 50) $grade = 'E';
                else $grade = '';

                // SWITCH CASE
                switch ($grade) {
                    case 'A' : 
                        $predikat = 'Memuaskan';
                        break;
                    case 'B' : 
                        $predikat = 'Bagus';
                        break;
                    case 'C' : 
                        $predikat = 'Cukup';
                        break;
                    case 'D' : 
                        $predikat = 'Kurang';
                        break;
                    case 'E' : 
                        $predikat = 'Buruk';
                        break;
                    default:
                        $predikat = '';
                }

            ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $nama['nama'] ?></td>
                <td><?= $nama['nim'] ?></td>
                <td><?= $nama['nilai'] ?></td>
                <td><?= $ket ?></td>
                <td><?= $grade ?></td>
                <th><?= $predikat ?></th>
            </tr>
            <?php } ?>
        </tbody>
        <tfoot>
        <?php
            foreach ($keterangan as $keter => $hasil) {
            ?>
            <tr>
                <th colspan="3" align="right" bgcolor="yellow"><?= $keter ?></th>
                <th colspan="4"><?= $hasil ?></th>
            </tr>
            <?php } ?>
        </tfoot>
    </table>
</body>
</html>