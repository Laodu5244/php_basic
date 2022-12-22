<?php

$str = '<b>文字加粗</b>';
echo $str;
echo '<br>';

echo __FILE__;

$script = <<<script
<script>
	alert('php中动态输出java script脚本');
</script>
script;
echo $script;

echo '<hr>';
$pic = '1.png';
$pics = explode('.',$pic);
$num = count($pics);
echo $pics[$num-1];