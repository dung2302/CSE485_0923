<?php
function converToLowercase($arr){
    $result= array();
    foreach ($arr as $item){
        if(string($item)){
            $result[]= strtolower($item);
        }
        else{
            $result[]=$item;
        }
    }
    return $result;
}
$arrs1 = [‘1’, ‘b, ‘c’, ‘d’];
$arrs2 = [‘a’, 0, null, false];
$result1= converToLowercase($arrs1);
$result2= converToLowercase($arrs2);

print_r($result1);
echo "<br>";
print_r($result2);
?>