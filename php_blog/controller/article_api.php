<?php

$conn = new PDO('mysql:host=127.0.0.1;dbname=blog','root','sisisi');
$conn->query('set names utf8');

// 添加
function insert() {
	global $conn;
	$title ='Sample blog post 5';
	$date = date('Y-m-d H-i-s');
	$author = 'Mark';
	$content = 'This blog post shows a few different types of content that’s supported and styled with Bootstrap. Basic typography, lists, tables, images, code, and more are all supported as expected.';
	$featured = 0;

	$sql = "insert into articles(title,date,author,content,featured) values ('$title','$date','$author','$content','$featured')";
	$result = $conn->query($sql);
	return $result;
}

// 查询
function select(){
	global $conn;
	$stat = $conn->query('select * from articles');
  $articles = $stat->fetchAll(PDO::FETCH_ASSOC);
	return $articles;
}