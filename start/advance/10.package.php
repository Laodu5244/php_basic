<?php

# 封装方法
class Bank {
  public $money;

  # 初始化金额
  public function __construct($money){
    $this->money = $money;
  }

  # 存钱
  public function saveMoney($money){
    $this->money += $money;
  }

  # 取钱
  public function getMoney($money){
    $this->money -= $money;
  }

  # 查询余额
  public function showMoney(){
    return '余额:'.$this->money;
  }
}

$method = new Bank(10000);
echo $method->showMoney();
echo '<hr>'; 

// 存5000
$method->saveMoney(5000);
echo $method->showMoney();
echo '<hr>'; 

// 取200
$method->getMoney(200);
echo $method->showMoney();
