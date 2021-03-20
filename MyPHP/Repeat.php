<?php
//繰返し、for文
for ( $i = 0;$i < 4; $i ++){
  echo ($i)."\n";
}

//break
for ( $i = 0;$i <= 4; $i ++){
  
  if($i == 3){
    break;
  }

  echo ($i)."\n";
}

//continue
for ( $i = 0;$i <= 4; $i ++){
  
  if($i == 3){
    //処理をスキップ
    continue;
  }

  echo ($i)."\n";
}

//ネスト（forの中にfor文を記述）
for($i = 0; $i <= 2; $i++){
  for($j = 0; $j <= 2; $j++){
    echo ($i."-".$j."\n");
  }
}

//配列にデータを入れて
  $arr = [2,4,6,8,10];

  for($i = 0; $i <=4; $i++){
    echo ($arr[$i])."\n";
  }