<?php
$a = [
        'a' => [
            'b' => 0,
            'c' => 1
        ],
        'b' => [
            'e' => 2,
            'o' => [
                'b' => 3
        ]
        ]
       ];
    $value= $a['b']['o']['b'];
    echo 'gia tri =3 mà có key là b từ mảng trên là :'.$value.'<br>';
    $value1= $a['a']['c'];
    echo 'gia tri =1 mà có key là b từ mảng trên là :'.$value1.'<br>';
    $info = $a['a'];
    echo 'Thông tin của phần tử có key là a';
    print_r($info);