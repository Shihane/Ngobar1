<?php
function hitungKelilingPersegiPanjang($panjang, $lebar) {
    $keliling = 2 * ($panjang + $lebar);
    return $keliling;
}


$panjang = 10;
$lebar = 5;
echo "Keliling persegi panjang adalah: " . hitungKelilingPersegiPanjang($panjang, $lebar);
?>
