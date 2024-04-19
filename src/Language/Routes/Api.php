<?php

$route['api/v([1-9]+\d*)/languages'] = [
	'get'		=> 'languages/index', // 列表
	'post'		=> 'languages/store', // 创建
];
$route['api/v([1-9]+\d*)/languages/stat'] = [
	'get'		=> 'languages/stat', // 统计数据
];
$route['api/v([1-9]+\d*)/languages/(:any)'] = [
	'get'		=> 'languages/read/$2', // 读取
	'put'		=> 'languages/update/$2', // 更新
	'delete'	=> 'languages/destroy/$2', // 删除
];
