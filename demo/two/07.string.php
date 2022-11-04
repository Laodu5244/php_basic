<?php

// 单引号字符串
$msg = 'php:\'www.php.cn\'中文网';
echo $msg;
echo '<hr>';

// 双引号字符串(可以解析变量和转译字符)
$str = '可以解析变量';
echo "双引号字符串:{$str},$msg";

// heredoc语句创建字符串
$heredoc = <<<LIST
<ul>
  <li>西瓜</li>
  <li>苹果</li>
  <li>香蕉</li>
  <li>$msg</li>
  <li>$str</li>
</ul>
LIST;
echo $heredoc;

// nowdoc语句创建字符串
$nowdoc = <<<'EOD'
<ul>
  <li>西瓜</li>
  <li>苹果</li>
  <li>香蕉</li>
  <li>$msg</li>
  <li>$str</li>
</ul>
EOD;
echo $nowdoc;