<?php

class Water {
  protected $water;
	protected $img;
  public function __construct($water) {
    $this->water = $water;
  }
  // 生成水印
  public function make($image, $filename = null, $position = 3) {
    $this->check($image);
    $background = $this->resource($image);
    $water = $this->resource($this->water);
    $position = $this->position($background, $water, $position);
		$img = $this->img;

    imagecopy(
      $background,
      $water,
      $position['x'],
      $position['y'],
      0,
      0,
      imagesx($water),
      imagesy($water),
    );
		header('Content-Type:image/jpeg');
		$img = $this->action($image)($background);
    return $this->action($image)($background, $filename ?? $image);
		/* 
    return $this->action($image)($background); */
  }
  // 检测图片
  protected function check($image) {
    if (!is_file($image) || getimagesize($image) == false) {
      // 抛出异常
      throw new Exception('异常: file is not image');
    }
  }
  // 根据图片生成资源
  protected function resource($image) {
    $info = getimagesize($image);
    $functions = [
      1 => 'imagecreatefromgif',
      2 => 'imagecreatefromjpeg',
      3 => 'imagecreatefrompng',
    ];
    $call = $functions[$info[2]];
    return $call($image);
  }
  // 根据图片生成方法
  protected function action($image) {
    $info = getimagesize($image);
    $functions = [
      1 => 'imagegif',
      2 => 'imagejpeg',
      3 => 'imagepng',
    ];
    return $functions[$info[2]];
  }
  // 水印位置
  protected function position($background, $water, $position) {
    $info = ['x' => 0, 'y' => 0];
    switch ($position) {
    case 1: break;
    case 2:
			$info['x'] = (imagesx($background) - imagesx($water)) /2;
      break;
    case 3:
			$info['x'] = (imagesx($background) - imagesx($water));
      break;
    case 4:
			$info['y'] = (imagesy($background) - imagesy($water)) /2;
      break;
    case 5:
			$info['x'] = (imagesx($background) - imagesx($water)) /2;
			$info['y'] = (imagesy($background) - imagesy($water)) /2;
      break;
    case 6:
			$info['x'] = (imagesx($background) - imagesx($water));
			$info['y'] = (imagesy($background) - imagesy($water));
      break;
    }
		return $info;
  }
}