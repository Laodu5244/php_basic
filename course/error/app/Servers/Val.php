<?php

namespace App\Servers;

use App\Exceptions\Validate;

class Val{
	public static function make(){
		if(empty($_POST['title'])){
			throw new Validate('标题不能为空');
		}
	}
}