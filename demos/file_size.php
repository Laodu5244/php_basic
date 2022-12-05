<?php

// get file size(byte)
echo 'byte file size: '.filesize('./date.php').'b';
echo '<br>';

$size = filesize('../js/vue.min.js');

function size($byte) {
	$KB = 1024;
	$MB = 1024 * $KB;
	$GB = 1024 * $MB;
	$TB = 1024 * $GB;

	if ($byte < $KB) {
		return $byte.'b';
	} elseif ($byte <$MB) {
		return round($byte / $KB, 2).'kb';
	} elseif ($byte < $GB) {
		return round($byte / $MB, 2).'mb';
	} elseif ($byte < $TB) {
		return round($byte / $GB, 2).'gb';
	} else {
		return round($byte / $TB, 2).'Tb';
	}
}

echo size($size);