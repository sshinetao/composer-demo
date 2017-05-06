<?php

namespace App\Controllers;

use App\Models;

class Test extends \Core\Controller {
	public function index() {
		$index = new Models\Index ();
		 $index->insertData ();
		 
	}
}