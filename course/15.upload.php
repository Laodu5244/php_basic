<!-- 单文件上传 -->
<?php if (!$_FILES): ?>
<h2>单文件上传</h2>
<form action="./15.upload.php" method="post" enctype="multipart/form-data">
	<input type="file" name="upload">
	<button>提交</button>
</form>
<?php endif; ?>

<?php
$data = ['success'=>true];
if (is_uploaded_file($_FILES['upload']['tmp_name'])) {
	$name = microtime(true);
	$to = './file/'.$name.$_FILES['upload']['name'];
	if(move_uploaded_file($_FILES['upload']['tmp_name'],$to)){
		$data['file'] = $to;
		echo json_encode($data);
		return $to;
	}
} else {
	$data['success'] = false;
} ?>

<!-- 多文件上传 -->
<?php if (!$_FILES): ?>
<h2>多文件上传</h2>
<form action="./15.upload.php" method="post" enctype="multipart/form-data">
	<input type="file" name="images[]">
	<input type="file" name="images[]">
	<button>提交</button>
</form>
<?php endif; ?>

<?php
class Uploader{
	// 定义受保护的变量
	protected $path;

	// 上传图片
	public function make() {
		$this->dir();
		$files = $this->format();
		$saveFiles = [];
		foreach($files as $item) {
			if($item['error'] == 0) {
				if(is_uploaded_file($item['tmp_name'])){
					$to = $this->path.'/'.microtime(true).mt_rand(1,9999).'.'.$item['name'];
					if(move_uploaded_file($item['tmp_name'],$to)){
						$saveFiles[] = [
							'path' => $to,
							'size' => $item['size'],
							'name' => $item['name'],
						];
					}
				}
			}
		}
		return $saveFiles;
	}

	// 格式化数据格式
	private function format() {
		$files = [];
		foreach($_FILES as $item){
			if(is_array($item['name'])){
				foreach($item['name'] as $keys=>$values){
					$files[] =[
						'name'=>$item['name'][$keys],
						'type'=>$item['type'][$keys],
						'error'=>$item['error'][$keys],
						'tmp_name'=>$item['tmp_name'][$keys],
						'size'=>$item['size'][$keys],
					];
				}
			} else {
				$files[] = $item;
			}
		}
		return $files;
	}

	// 创建目录
	private function dir() {
		$path = './file/'.microtime(true);
		$this->path = $path;
		return is_dir($path) or mkdir($path,0755,true);
	}
}
$uploader = new Uploader();
if($_FILES){
	$images = $uploader->make();
	echo json_encode($images);
}