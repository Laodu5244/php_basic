<?php

$color = '';
echo '<ul>';
	for ($i = 0; $i <= 5; $i++) {
		if ($i % 2 == 0) {
			$color = 'green';
		} else {
			$color = 'orange';
		}
		echo "<li style='background:{$color};width:200px'>第{$i}行内容</li>";
	}
echo '</ur>';
