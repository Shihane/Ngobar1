<?php
function hitungLuasLingkaran($jariJari) {
    $luas = pi() * pow($jariJari, 2);
    return $luas;
}


$jariJari = 5;
echo "Luas lingkaran adalah: " . hitungLuasLingkaran($jariJari);
?>