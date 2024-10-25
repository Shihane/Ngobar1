<?php
function hitungLuasSegitiga($alas, $tinggi) {
    $luas = 0.5 * $alas * $tinggi;
    return $luas;
}

$alas = 8;
$tinggi = 10;
echo "Luas segitiga adalah: " . hitungLuasSegitiga($alas, $tinggi);
?>
