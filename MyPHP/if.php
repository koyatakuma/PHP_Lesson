<?php
//if文
  $age = 22;

  if ($age >= 20){
    echo ("adult")."\n";
  }

  //if else文
  $age = 10;

  if ($age >= 20){
    echo ("adult")."\n";
  }else{
    echo ("child")."\n";
  }

  //if elseif文
  $age = 0;

  if ($age >= 20){
    echo ("adult")."\n";
  }elseif($age == 0){
    echo ("baby")."\n";
  }else{
    echo ("child")."\n";
  }
  ?>