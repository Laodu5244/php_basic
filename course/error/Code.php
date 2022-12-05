<?php

class Code{
	public function make(int $len) {
		$this->line($len);
	}
	// 绘制干扰线
	protected function line(int $len){
		if($len > 5) {
			throw new Exception('抛出错误: throw new Exception.');
		}
	}
}