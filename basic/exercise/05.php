<?php

# 循环语句
$count = 0;
while($count<5){
  echo "The number is " . $count . "<br>";
  $count++;
}
echo "<hr>";

do{
  echo "The number is " . $count . "<br>";
  $count--;
} while($count>0);
echo "<hr>";

for($i=0;$i<5;$i++){
  echo "数字为 " . $i . "<br>";
}
echo "<hr>";

$number = 5;

$array = [4,3,2,1];
foreach($array as $item){
  echo $item."<br>";
}