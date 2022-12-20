<?php

// 返回当前时间戳微秒
$start = microtime(true);
$total = 0;

for ($i=0;$i<1000000;$i++){
  $total += $i;
}
echo 'count: '.$i.'totla'.$total.'<br>';

$end = microtime(true);
$spend = floor(($end - $start)*1000);
echo 'php用时:'.$spend.'ms'.'<br>';
?>

<script>
let $start = Date.now();
let $total = 0;
for(let i=0;i<1000000;i++){
  $total += i;
}
let $end = Date.now();
let result = $end-$start;
document.write('js用时: '+result+'ms');
</script>


