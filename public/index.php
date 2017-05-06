<?php
// 定义 PUBLIC_PATH
define ( 'PUBLIC_PATH', __DIR__ );

$url = $_SERVER ['SCRIPT_NAME'];
if (strrchr ( $_SERVER ['SCRIPT_NAME'], '/index.php' )) {
	$url = explode ( '/index.php', $url ) [0];
} else {
	$url = $url;
}

define ( 'APP_URL', 'http://' . $_SERVER ['SERVER_NAME'] . ':' . $_SERVER ['SERVER_PORT'] . $url );

// APP_URLecho APP_URL;
// 启动器
require PUBLIC_PATH . '/../init.php';
// 路由配置
require '../config/routes.php';