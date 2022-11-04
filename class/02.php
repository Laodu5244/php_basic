<?php

class Number {
  // 方法传参
  public function query($num1,$num2) {
    return $num1 + $num2;
  }

  // 析构函数
  public function __destruct() {
    echo "本函数自动调用,数据即将销毁";
  } 
}

$num = new Number;
echo $num->query(10,20);