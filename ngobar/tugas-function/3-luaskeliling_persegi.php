<?php
function hitungLuasPersegi($sisi) {
    $luas = $sisi * $sisi;
    return $luas;
}

function hitungKelilingPersegi($sisi) {
    $keliling = 4 * $sisi;
    return $keliling;
}


$sisi = 7;
echo "Luas persegi adalah: " . hitungLuasPersegi($sisi) . "\n";
echo "Keliling persegi adalah: " . hitungKelilingPersegi($sisi);
?>
