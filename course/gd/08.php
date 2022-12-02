<?php

require('./Water.php');
try {
	$water = new Water('./images/code.png');
	$water->make('./images/Front.jpg','create.jpg',6);
	echo $water->$img;
} catch(Exception $error) {
	echo $error->getMessage();
}
