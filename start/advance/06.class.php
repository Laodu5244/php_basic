<?php
/**
 * 修饰符
 *   public: 公共的, 所有作用域可见
 *   protected: 受保护的, 只有本身和子类父类可见
 *   private: 私有的, 只有本作用域可见
 */
class Person {
  public $sex = '老爷们'.'<br>';
  protected $name = 'Lisa'.'<br>';
  private $age = '19'.'<br>';

  public function work () {
    echo '我工作了'.'<br>';
  }

  protected function drink() {
    echo '我喝酒了'.'<br>';
  }

  private function money() {
    echo '我有很多钱'.'<br>';
  }
}

// 实例化一个对象
$Jack = new Person();

// public
echo $Jack->sex;
echo $Jack->work();