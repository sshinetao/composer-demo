<?php

namespace App\Controllers;
use App\Models;
use Core;
 
 

class Index extends Core\Controller {
	public function index() {
		$index = new Models\Index();
		$this->assign ( 'index',$index->index() );
		$this->display ( 'index.php' );
	}
	public function view($id) {
		echo $id;
	}
	
	public function jsonData(){
		$index = new Models\Index();
		echo $index->json();
	}
	
}