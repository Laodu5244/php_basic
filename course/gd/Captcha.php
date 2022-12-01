<?php

// 创建一个验证码类
class Captcha {
  // 私有变量
  protected $width;
  protected $height;
  protected $canvas;
  protected $len;
	protected $code;

  // 构造函数
  public function __construct($width = 200, $height = 50, $len = 6) {
    $this->width = $width;
    $this->height = $height;
    $this->len = $len;
  }
  // 生成画布
  public function canvas() {	
    $this->canvas = imagecreatetruecolor($this->width, $this->height);
    // 创建背景色
    $background = imagecolorAllocate($this->canvas, 240, 240, 240);
    imagefill($this->canvas, 0, 0, $background);
    $this->dot();
    $this->line();
    $this->text();
    $this->show();
		return $this->code;
  }
  // 干扰线
  protected function line() {
    for ($i = 0; $i < 3; $i++) {
      // 随机粗细
      imagesetthickness($this->canvas, mt_rand(1, 3));
      // 随机坐标点
      imageline(
        $this->canvas,
        mt_rand(0, $this->width),
        mt_rand(0, $this->height),
        mt_rand(0, $this->width),
        mt_rand(0, $this->height),
        $this->color()
      );
    }
  }
  // 干扰点
  public function dot() {
    for ($i = 0; $i < 100; $i++) {
      imagesetpixel(
        $this->canvas,
        mt_rand(0, $this->width),
        mt_rand(0, $this->height),
        $this->color(),
      );
    }
  }
  // 生成随机验证码
  protected function text() {
    $font = realpath('./SIMKAI.TTF');
    $text = '1234567890abcdefghijklmnopqrstuvwxyz';
    for ($i = 0; $i < $this->len; $i++) {
      $x = $this->width / $this->len;
			$angle = mt_rand(-20,20);
			$this->code .= $str = strtoupper($text[mt_rand(0, strlen($text) - 1)]);
			$box = imagettfbbox(24,$angle,$font,$str);
      imagettftext(
        $this->canvas,
        24,
				$angle,
        $x*$i+5,
        $this->height/2 - ($box[7]-$box[0])/2,
        $this->textColor(),
        $font,
        $str,
      );
    }
  }
  // 随机颜色
  protected function color() {
    $color = imagecolorallocate(
      $this->canvas,
      mt_rand(0, 255),
      mt_rand(0, 255),
      mt_rand(0, 255),
    );
    return $color;
  }
  // 文字颜色
  protected function textColor() {
    $color = imagecolorallocate(
      $this->canvas,
      mt_rand(0, 100),
      mt_rand(0, 100),
      mt_rand(0, 100),
    );
    return $color;
  }

  // 渲染到页面
  protected function show() {
    header('Content-type: image/png');
		imagepng($this->canvas, './images/code.png');
    imagepng($this->canvas);
  }
}