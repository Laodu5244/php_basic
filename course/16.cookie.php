<?php

/* cookie是存储在客户端的数据 */
// 写入cookie
setcookie('id',11);

// 读取cookie
print_r($_COOKIE);
echo '<br>';

// cookie生命周期
setcookie('name','Lisa',time() + 60); # 保存60秒
setcookie('age',18,time() + 60*60*24); # 保存一天

// cookie路径
setcookie('friend','Jack',0,'/');
// cookie域名
setcookie('hobby','music',0,'/','localhost');

// 只允许http访问cookie
setcookie('web','laodu.com',0,'/','',false,true);
?>

<!-- js使用cookie -->
<script>
	console.log(document.cookie);
</script>