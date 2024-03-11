<?php
function tambah($nilai1,$nilai2){
    echo $nilai1 + $nilai2;
}
tambah(2,4);
echo"<br>";

function hitungumur($tahunlahir,$tahunsekarang = 2024){
    echo$tahunsekarang - $tahunlahir;
}
hitungumur(2004)
?>