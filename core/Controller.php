<?php

namespace Core;

class Controller {
	private $_view;
	public function __construct() {
		$view = new View ();
		$this->_view = $view;
	}
	public function assign($name, $value = '') {
		return $this->_view->assign ( $name, $value );
	}
	public function display($file) {
		return $this->_view->display ( $file );
	}
}