<?php
//integer型
$num01 = 123;
$num02 = 1.23;

echo $num01."\n";
echo $num02."\n";

// データ型を表示
echo gettype($num01)."\n";
echo gettype($num02)."\n";

// データ型と変数の中身表示
echo var_dump($num02)."\n";


//string型
$string_a = "Hello World";

echo $string_a."\n";
echo gettype($string_a)."\n";
echo var_dump($string_a)."\n";

//Boolean型
// tureの時
$a = 10;
$b = 1;
$bool01 = ($a > $b);

echo $bool01."\n";
echo gettype($bool01)."\n";
echo var_dump($bool01)."\n";

// falseの時
$bool02 = ($a < $b);

echo $bool02."\n";
echo gettype($bool02)."\n";
echo var_dump($bool02)."\n";