<?php

/* session是存储在服务器的数据 */
session_start(); // 开启session
$_SESSION['id'] = 123; // 写入session
$_SESSION['name'] = 'Lisa';

print_r($_SESSION); // 查看session
echo '<br>';

// 删除session
unset($_SESSION['id']);
print_r($_SESSION);
echo '<br>';

// 清空所有session
$_SESSION = [];
print_r($_SESSION);
echo '<hr>';

// 查看session存储路径
echo session_save_path();
echo '<br>';

// 销毁session(连同文件一起删除)
session_destroy();

//设置session id
echo '111' . session_id('abc');

// 设置session name
echo session_name('session_name');
echo '<br>';

// 设置session存储路径
session_save_path('./session');
session_start();
$_SESSION['id'] = 666;
echo session_save_path();
session_destroy(); # 销毁session
echo '<hr>';

// 自定义session 类
class File implements SessionHandlerInterface {
  // session 保存目录
  protected $path;
  // sessdon 文件过期时间
  protected $maxlifetime;

  // 构造函数(调用立即执行)
  public function __construct($path = 'session', $maxlifetime = 1440) {
    $this->path = $this->mkdir($path);
    echo $this->path;
    echo '<br>';
    $this->maxlifetime = $maxlifetime;
  }

  // 检测并创建目录
  protected function mkdir($path) {
    is_dir($path) or mkdir($path, 0755, true);
    // 返回路径
    return realpath($path);
  }

  // 打开
  public function open($path, $name) {
    return true;
  }

  // 关闭
  public function close() {
    return true;
  }

  // 读取
  public function read($id) {
    return (string) @file_get_contents($this->path . '/' . $id);
  }

  // 写入
  public function write($id, $data) {
    return (bool) @file_put_contents($this->path . '/' . $id, $data);
  }

  // 卸载
  public function destroy($id) {
    if (is_file($this->path . '/' . $id)) {
      @unlink($this->path . '/' . $id);
    }
    return true;
  }

  // 垃圾回收
  public function gc($maxlifetime) {
    foreach (glob($this->path . '/*') as $file) {}
    if (filemtime($file) + $this->maxlifetime < time()) {
      @unlink($file);
    }
    return true;
  }
}

// 自定义session
$file = new File();
session_set_save_handler($file);
session_start();

$_SESSION['name'] = '张三';
$_SESSION['id'] = '357';
print_r($_SESSION);