<?php

//関数
//function say_hello() {
  //echo "Hello World"."\n";
//}

//say_hello();
//say_hello();

//$say_hello = function () {
  //echo "Good Morning"."\n";
//};

//$say_hello();


//引数がある関数
//function say_hello($greeting){
  //echo $greeting."\n";
//};

//say_hello("Good Morning");
// say_hello("Hello!");


// function cal($x,$y) {
  // echo ($x / $y)."\n";
// }

// cal(6,3);


//戻り値
function cal($x, $y){
  return $x / $y;
};

$result = cal(6, 3);
echo $result."\n";
