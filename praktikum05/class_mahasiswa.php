<?php

class Mahasiswa
{
    public $namaMahasiswa, $nim, $domisili, $prodi, $ipk;

    function __construct($namaMahasiswa, $nim, $domisili, $prodi, $ipk){

        $this->namaMahasiswa = $namaMahasiswa;
        $this->nim = $nim;
        $this->domisili = $domisili;
        $this->prodi = $prodi;
        $this->ipk = $ipk;
    }
    function setPredikatIPK($ipk)
    {
        if ($ipk > 3.5) {
            echo "cumlaude";
        }else {
            echo "nt";
        }
    }
}
$mahasiswa = new Mahasiswa("ryan", "01102", "depok", "ti", "3.7");
echo "nama : ". $mahasiswa->namaMahasiswa;
echo"<br>";
echo "nim : ". $mahasiswa->nim;
echo"<br>";
echo "dom : ". $mahasiswa->domisili;
echo"<br>";
echo "prodi : ". $mahasiswa->prodi;
echo"<br>";
echo "ipk : ". $mahasiswa->ipk;

$mahasiswa->setPredikatIPK($mahasiswa->ipk);
