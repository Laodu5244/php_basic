<?php

class DB {
	protected $conn;
	protected $options = [
		'table' => '', 
		'field' => ' * ', 
		'order' => '',
		'limit' => '', 
		'where' => '',
	];

  // 构造函数
	public function __construct($dsn) {
		$this->connect($dsn);
	}
	// 初始化
	protected function connect($dsn) {
		$this->conn = new PDO($dsn, 'root', 'sisisi');
	}

	// 查询
	public function select($sql) {
		$stat = $this->conn->query($sql);
		$heros = $stat->fetchAll(PDO::FETCH_ASSOC);
		return $heros;
	}
	// 增删改
	public function make($sql) {
		$data = ['success' => true];
		$res = $this->conn->query($sql);
		if (!$res) $data['success'] = false;
		return $data;
	}

	// 表格
	public function table($table) {
		$this->options['table'] = $table;
		return $this;
	}
	// 字段
	public function field(...$fields){
		$this->options['field'] = '`'.implode('`,`',$fields).'`';
		return $this;
	}
	// 条数
	public function limit(...$limit){
		$this->options['limit'] = " LIMIT ".implode(',',$limit);
		return $this;
	}
	// 索引
	public function where($where) {
		$this->options['where'] = " WHERE ".$where;
		return $this;
	}
	// 排序
	public function order($order) {
		$this->options['order'] = "ORDER BY ".$order;
		return $this;
	}

	// 链式查询
	public function get() {
		$sql = "SELECT {$this->options['field']} FROM {$this->options['table']} {$this->options['where']} {$this->options['order']} {$this->options['limit']}";
		return $this->select($sql);
	}

	// 插入
	public function insert($arr) {
		$keys = '`'.implode('`,`',array_keys($arr)).'`';
		$values = "'".implode("','",array_values($arr))."'";
		$sql = "INSERT INTO {$this->options['table']} ($keys) VALUES ($values)";
		return $this->make($sql);
	}

	// 更新
	public function update($arr) {
		$str = '';
		foreach($arr as $key => $item){
			$i =  $key.'='."'$item'";
			$str.=$i . ',';
		}
		$str = substr($str,0,strlen($str)-1);
		$sql = "UPDATE {$this->options['table']} set $str  {$this->options['where']}";
		return $this->make($sql);
	}

	// 删除
	public function delete() {
		$sql = "DELETE FROM {$this->options['table']} {$this->options['where']}";
		return $this->make($sql);
	}
}

try {
	$dsn = 'mysql: host=localhost;dbname=basic';
	$db = new DB($dsn);
} catch (Exception $error) {
	exit($error->getMessage());
}

$sql_all = "SELECT * FROM heros";
$sql_one = "SELECT * FROM heros WHERE id=5";
$sql_insert = "INSERT INTO heros (name,skill,age,sex)VALUES ('韦小宝','嘴炮',18,'男')";

// 链式查询
$res = $db->field('name','skill')->table('heros')->where('id>10')->order('id')->limit(5)->get();

// 添加
// $hero = ['name' => '郭襄','skill' => '倚天剑','age' => '16','sex' => '女'];
// $res = $db->table('heros')->insert($hero);

// 修改
// $hero = ['id'=>8,'name' => '武松', 'skill' => '鸳鸯腿', 'age' => '24','sex' => '男'];
// $res = $db->table('heros')->where('id=24')->update($hero);

// 删除
// $res = $db->table('heros')->where('id=25')->delete();

echo json_encode($res);