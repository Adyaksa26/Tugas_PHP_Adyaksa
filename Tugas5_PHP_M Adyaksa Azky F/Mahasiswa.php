<?php
class Mahasiswa{
    public $nim;
    public $nama;
    public $kuliah;
    public $matkul;
    public $nilai;

public function __construct($nim,$nama,$kuliah,$matkul,$nilai){
    $this->nim = $nim;
    $this->nama = $nama;
    $this->kuliah = $kuliah;
    $this->matkul = $matkul;
    $this->nilai = $nilai;
}

    public function getStatus() {
        if ($this->nilai > 65) return "Lulus";
        else return "Tidak Lulus";
    }

    Public function getGrade(){
        if ($this->nilai >= 85) {
            return 'A';
        } elseif ($this->nilai >= 75) {
            return 'B';
        } elseif ($this->nilai >= 60) {
            return 'C';
        } elseif ($this->nilai >= 40) {
            return 'D';
        } else {
            return 'E';
        }
    }

    Public function getPredikat(){
        if ($this->nilai >= 85) {
            return 'Sangat Memuaskan';
        } elseif ($this->nilai >= 75) {
            return 'Memuaskan';
        } elseif ($this->nilai >= 60) {
            return 'Cukup';
        } elseif ($this->nilai >= 40) {
            return 'Kurang';
        } else {
            return 'Sangat Kurang';
        }
    }
}    
?>