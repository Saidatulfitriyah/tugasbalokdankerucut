<?php
//fungsi
$panjang = 18;
$luas = 10;
$tinggi = 12;
function balok($panjang,$lebar,$tinggi) {
    return($panjang*$luas*$tinggi);
}
//menampilkan
echo "volume balok tersebut adalah =" , balok($panjang,$lebar,$tinggi);
?>