<?php
function hitungKelilingLingkaran($jariJari) {
    $keliling = 2 * pi() * $jariJari;
    return $keliling;
}

$jariJari = 5;
echo "Keliling lingkaran adalah: " . hitungKelilingLingkaran($jariJari);
?>
