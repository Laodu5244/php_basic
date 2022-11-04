<?php

$type = [
  'jpg'=>1,
  'png'=>2,
  'jpeg'=>3,
];

# 检测下标
$file = 'hedms.jpg';
$ext = strtolower(substr(strrchr($file,'.'),1));

// 判断字符串$ext是否在$type数组中
if(!array_key_exists($ext,$type)){
  echo "error: 格式不正确";
}else{
  echo 'sueecss: '.$ext.'可以上传';
}
echo '<br>';

# 检测value
$arr = ['jpg','png','jpeg'];
$image_file = '132.webp';
$msg = strtolower(substr(strrchr($image_file,'.'),1));

if (!in_array($msg,$arr)) {
  echo "error: 格式不正确";
} else {
  echo 'sueecss: '.$msg.'可以上传';
}

