<?php

include('./Thumb.php');
$thump = new Thumb();
try {
  $thump->make('./images/Front.jpg','thump.jpg',100,200,3);
} catch (Exception $error) {
	echo $error->getMessage();
}