<?php

class Thumb {
	// 生成缩略图
  public function make($file, $to, $width, $height, $type = 3) {
    $image = $this->resource($file);
    $info = $this->size(
      $width,
      $height,
      imagesx($image),
      imagesy($image),
			$type
    );
    $canvas = imagecreatetruecolor($info[0], $info[1]);

    imagecopyresampled(
      $canvas, $image, 0, 0, 0, 0,
      $info[0], $info[1], $info[2], $info[3],
    );
    header('Content-Type:image/jpeg');
    imagejpeg($canvas);
		$this->action($file)($canvas,$to);
  }
	// 生成方法
	protected function action($image) {
		$info = getimagesize($image);
		$functions = [
			1=>'imagegif',
			2=>'imagejpeg',
			3=>'imagepng',
		];
		return $functions[$info[2]];
	}
  // 计算尺寸
  protected function size($rw, $rh, $iw, $ih,$type) {
		switch ($type){
			case 1: // 保留宽度
				$rh = $rw/$iw * $ih;
				break;
			case 2: // 保留高度
				$rw = $rh/$ih*$iw;
				break;
			case 3: // 保留画布尺寸
				if ($iw / $rw > $ih / $rh) {
					$iw = $ih / $rh * $rw;
				} else {
					$ih = $iw / $rw * $rh;
				}
		}
    return [$rw, $rh, $iw, $ih];
  }
  // 生成资源
  protected function resource($image) {
    $this->check($image);
    $info = getimagesize($image);
    $functions = [
      1 => 'imagecreatefromgif',
      2 => 'imagecreatefromjpeg',
      3 => 'imagecreatefrompng',
    ];
    $call = $functions[$info[2]];
    return $call($image);
  }
  // 检测错误
  protected function check($image) {
    if (!is_file($image) || getimagesize($image) == false) {
      throw new Exception('异常: file is not image');
    }
  }
}