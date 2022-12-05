<?php

namespace App\Exceptions;

use App\Servers\Show;
use Exception;

class View extends Exception {
	public function render() {
		Show::make('error', [
			'msg' => $this->getMessage()
		]);
	}
}