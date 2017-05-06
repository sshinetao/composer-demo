<?php

namespace Core;

use Medoo\Medoo;

class Model extends Medoo {
	public function __construct() {
		parent::__construct ( require_once '../config/database.php' );
	}
}