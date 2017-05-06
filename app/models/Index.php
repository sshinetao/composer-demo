<?php

namespace App\Models;

use Core\Model;
use Core\Page;
class Index extends Model {
	public function index() {
		//$datas = $this->select ( "user", "*" );
		
		
		//分页
		$pagenum = isset($_GET['page']) ? $_GET['page'] : 1;
		$page_row = 5; //每页显示条数
		$count = $this->count("user", '*');
		$start = ($pagenum - 1) * $page_row;
		$end = $page_row;
		$datas = $this->select("user", '*', ["LIMIT" => ["$start", "$end"]]);
		$p = new Page($count, 4, $pagenum, $page_row);
		$data['list'] = $datas;
		$data['showPages'] = $p->showPages(1);
		//View::display('index/list', $data);
		return $data;
		
		
		
		
		
		
	}
	public function insertData() {
		$username = rand ( 1000, 2000 );
		$password = md5 ( $username );
		$result = $this->insert ( 'user', [ 
				"username" => $username,
				"password" => $password,
				"lasttime" => time () 
		] );
		if ($result) {
			echo "success ";
		}
	}
	
	public function json() {
		$pagenum = isset($_GET['page']) ? $_GET['page'] : 1;
		$page_row = 5; //每页显示条数
		$count = $this->count("user", '*');
		$start = ($pagenum - 1) * $page_row;
		$end = $page_row;
		$datas = $this->select("user", '*', ["LIMIT" => ["$start", "$end"]]);
		$data['success'] = true;
		$data['total'] = $count;
		$data['rows'] = $datas;
		$data = json_encode($data);
		return $data;
	}
	
	
	
	
	
	
	
	
	
	
}