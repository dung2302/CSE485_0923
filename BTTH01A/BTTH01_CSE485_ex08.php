<?php
    $array = ['programming', 'php', 'basic', 'dev', 'is', 'program is PHP'];
    $maxlenght = 0;
    $minlenght = PHP_INT_MAX;
    $lstring ='';
    $mstring = '';
    foreach($array as $string){
        $len= strlen($string);// chieu dai chuoi
        if($len > $maxlenght){
            $maxlenght=$lenght;
            $lstring = $string;
        }
        if($lenght <$minlenght){
            $minstring= $lenght;
            $mstring =$string;

        }
    }
    echo "Chuỗi lớn nhất là $longestString, độ dài = $maxLength<br>";
    echo "Chuỗi nhỏ nhất là $shortestString, độ dài = $minLength<br>";

?>