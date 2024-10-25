<?php
function hitungLuasPersegiPanjang($panjang, $lebar) {
    $luas = $panjang * $lebar;
    return $luas;
}


$panjang = 10;
$lebar = 5;
echo "Luas persegi panjang adalah: " . hitungLuasPersegiPanjang($panjang, $lebar);
?>
