<?php

// 接口(接口中不能有属性)
interface Data{
  const Name = 'Tom';
  public static function test();
}

class Person implements Data {
  public static function test() {
    echo '静态测试';
  }
}

$method = new Person();
$method->test();