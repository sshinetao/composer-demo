<?php
namespace Core;

class View{
	
	//赋值方法
	public $assign;
	public function assign($name,$value)
	{
		$this->assign[$name] = $value;
	}
	
	//显示方法
	public function display($file)
	{
		$file = BASE_PATH.'/app/views/'.$file;
		if(is_file($file)){                                 //判断有无该文件
			extract($this->assign);                       //打散键值，能够在页面显示值
			include $file;
		}else{
			throw  new \Exception("模板文件 $file 不存在!");
		}
	}
	
}