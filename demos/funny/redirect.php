<?php

// 重定向
// $url = 'http://www.baidu.com';

// php 
// if (isset($url)) {
// 	header("Location:$url");
// } else {
// 	echo "page is not defined";
// }

// java script
if (isset($url)) {
	echo "<script>location.href='$url';</script>";
} else {
	echo "page is not defined";
}

// html
// if(empty($url)){
// 	echo "page is not defined";
// } 
?>
<!-- <html>
	<meta http-equiv="REFRESH" 
	content="1; URL='<?=$url?>'">
</html> -->