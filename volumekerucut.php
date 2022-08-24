<?php
$r = 28;
$t = 40;
$phi = 22/7;
function volumekerucut ($r,$t,$phi) {
    return (1/3*($phi*$r*$t));
}
echo "volume kerucut tersebut adalah =".volumekerucut($r,$t,$phi). "cm";
?>
