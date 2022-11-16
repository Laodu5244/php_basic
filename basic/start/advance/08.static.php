<?php

// static: 静态属性和方法
class Person {
  public static $msg = '静态属性';

  public static function index() {
    return "这是一个静态方法";
  }
}
echo '<hr>'; 
// 访问静态属性的格式
echo Person::$msg;
echo '<br>'; 
echo Person::index();
echo '<hr>'; 

// 静态属性作为参数传给静态方法
class Method {
  public static $msg = '静态属性作为参数传给静态方法使用';

  public static function index($msg) {
    return $msg;
  }
}
echo Method::index(Method::$msg);
echo '<hr>'; 

// 如果在函数中访问静态属性,用self方法
class Self_ {
  public static $msg = 'self调用静态属性';

  public static function index() {
    return self::$msg;
  }
}
echo Self_::index();
