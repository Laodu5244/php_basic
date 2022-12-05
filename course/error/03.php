<?php

class Validate extends Exception {
	// 重写错误字符串
	/* public function __toString() {
		return 'toString: '.$this->getMessage().$this->getCode();
	} */
}

// 异常类的优先级
try {
	throw new Validate('验证错误',403);
} catch (Validate $error) {
	// getMessage: 错误信息
	echo 'getMessage: '.$error->getMessage();
	echo '<br>';

	// getFile: 错误文件
	echo 'getFile: '.$error->getFile();
	echo '<br>';

	// getCode: 错误码
	echo 'getCode: '.$error->getCode();
	echo '<br>';

	// getLine: 错误行号
	echo 'getLine: '.$error->getLine();
	echo '<br>';

	// 直接输出错误
	echo $error;
} catch (Exception $error) {
	// 系统的异常捕获放最后(优先执行自定义的异常捕获)
	echo 'Exception: '.$error->getMessage();
}