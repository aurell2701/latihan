<?php
class Segitiga {
    // Atribut private
    private $alas;
    private $tinggi;
    private $sisi1;
    private $sisi2;
    private $sisi3;

    // Constructor
    public function __construct($a, $t, $s1, $s2, $s3) {
        $this->alas = $a;
        $this->tinggi = $t;
        $this->sisi1 = $s1;
        $this->sisi2 = $s2;
        $this->sisi3 = $s3;
    }

    // Hitung Luas
    public function hitungLuas() {
        return 0.5 * $this->alas * $this->tinggi;
    }

    // Hitung Keliling
    public function hitungKeliling() {
        return $this->sisi1 + $this->sisi2 + $this->sisi3;
    }

    // Cek jenis segitiga
    public function cekJenis() {
        if ($this->sisi1 == $this->sisi2 && $this->sisi2 == $this->sisi3) {
            return "Sama Sisi";
        } elseif ($this->sisi1 == $this->sisi2 || $this->sisi2 == $this->sisi3 || $this->sisi1 == $this->sisi3) {
            return "Sama Kaki";
        } else {
            return "Sembarang";
        }
    }

    // Tampilkan informasi lengkap
    public function tampilkanInfo() {
        echo "===== INFORMASI SEGITIGA ======\n";
        echo "Alas : " . $this->alas . "\n";
        echo "Tinggi : " . $this->tinggi . "\n";
        echo "Sisi : " . $this->sisi1 . ", " . $this->sisi2 . ", " . $this->sisi3 . "\n";
        echo "Luas : " . $this->hitungLuas() . "\n";
        echo "Keliling : " . $this->hitungKeliling() . "\n";
        echo "Jenis : " . $this->cekJenis() . "\n";
        echo "===============================\n\n";
    }
}
?>
