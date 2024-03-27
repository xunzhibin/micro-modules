<?php

$route['api/v([1-9]+\d*)/languages'] = [
	'get'		=> 'languages/index',
	'post'		=> 'languages/store',
	'delete'	=> 'languages/destroy',
];
$route['api/v([1-9]+\d*)/languages/(:any)'] = [
	'get'	=> 'languages/show/$2',
	'put'	=> 'languages/update/$2',
];
