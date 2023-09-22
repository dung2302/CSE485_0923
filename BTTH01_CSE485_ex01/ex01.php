<!DOCTYPE html>
<html>
<body>

<?php
    echo "EX1:<br>";
    $arrs = [2, 5, 6, 9, 2, 5, 6, 12, 5];
    $sum = array_sum($arrs);
    $product = array_product($arrs);
    $diff = $arrs[0];
    for ($i = 1; $i < count($arrs); $i++) {
        $diff -= $arrs[$i];
    }
    $quotient = $arrs[0];
    for ($i = 1; $i < count($arrs); $i++) {
        $quotient /= $arrs[$i];
    }
    echo "Tổng các phần tử = " . implode(" + ", $arrs) . " = " . $sum . "<br>";
    echo "Tích các phần tử = " . implode(" * ", $arrs) . " = " . $product . "<br>";
    echo "Hiệu các phần tử = " . implode(" - ", $arrs) . " = " . $diff . "<br>";
    echo "Thương các phần tử = " . implode(" / ", $arrs) . " = " . $quotient . "<br>";
    echo "<br>";
?>


</body>
</html>