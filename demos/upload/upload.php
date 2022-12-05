<?php

$val = $_FILES['file'];

// change file to local
function upload_file($info,$upload = './files',$imgs = ['gif','png','jpg']){
	if($info['error'] == 0){
		$path = pathinfo($info['name'],PATHINFO_EXTENSION);
		$ext = strtolower($path);

		if(!in_array($ext,$imgs)) return 'file is wrong';
		if(!is_dir($upload)) mkdir($upload,0777,true);

		$file = uniqid(microtime(true),true).'.'.$ext;
		$dest = $upload.'/'.$file;

		if(!move_uploaded_file($info['tmp_name'],$dest)){
			return 'upload is failed';
		}
		return 'upload is succeed';
	} else {
		echo "upload is failed";
	}
}

var_dump(upload_file($val));