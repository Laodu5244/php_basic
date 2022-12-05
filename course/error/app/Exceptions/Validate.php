<?php

namespace App\Exceptions;
use Exception;

class Validate extends Exception {
	public function render(){
		$_SESSION['Error'] = $this->getMessage();
		header('location:index.php');
	}
}