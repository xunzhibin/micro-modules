<?php

// 命名空间
// namespace Xzb\Modules\Langue\V1\Controllers;

use Xzb\MasterKey\Controller;
use Xzb\Modules\Language\Services\LanguageService;

/**
 * 语言 控制器类
 */
class Languages extends Controller
{
	/**
	 * 构造函数
	 * 
	 * @return void
	 */
	public function __construct()
	{
		// 父类
		parent::__construct();

		// 实例化 业务类
		$this->service = new LanguageService;
	}
}
