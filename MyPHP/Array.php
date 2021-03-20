<?php

//配列
//arrayを使う
$a = array();

$a[0] = "sato";
$a[1] = "suzuki";
$a[2] = "takahashi";

echo ($a[0])."\n";
echo ($a[1])."\n";
echo ($a[2])."\n";

//直接データを入れる
$b = array("sato","suzuki","takahashi");

echo ($b[0])."\n";
echo ($b[1])."\n";
echo ($b[2])."\n";
?>

<?php

//各括弧を使う
$a = ["sato","suzuki","takahashi"];

$a[1] = "tanaka";

echo ($a[0])."\n";
echo ($a[1])."\n";
echo ($a[2])."\n";

//多次元配列
$b = [["sato","suzuki"],["takahasi","tanaka"]];

echo ($b[0][0])."\n";
echo ($b[0][1])."\n";
echo ($b[1][0])."\n";
echo ($b[1][1])."\n";