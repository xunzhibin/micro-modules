<?php

// 命名空间
// namespace Xzb\Modules\Langue\V1\Controllers;

use Xzb\CodeIgniter3\Controller;
use Xzb\Modules\Language\Services\LanguageService;
use Xzb\Modules\Language\Resources\LanguageResource;
use Xzb\Modules\Language\Resources\LanguageCollection;

// // 创建
// use Xzb\MasterKey\Frameworks\CodeIgniter3\Traits\Controllers\Create;
// // 详情
// use Xzb\MasterKey\Frameworks\CodeIgniter3\Traits\Controllers\Show;
// // 偏移分页
// use Xzb\MasterKey\Frameworks\CodeIgniter3\Traits\Controllers\OffsetPaginate;
// // 更新
// use Xzb\MasterKey\Frameworks\CodeIgniter3\Traits\Controllers\Update;
// // 删除
// use Xzb\MasterKey\Frameworks\CodeIgniter3\Traits\Controllers\Delete;

/**
 * 语言 控制器类
 */
class Languages extends Controller
{
	// use Create;
	// use Show;
	// use OffsetPaginate;
	// use Update;
	// use Delete;

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

	public function getResponseResource($model)
	{
		// return (new LanguageResource($model));

		// return (new LanguageResource($model))->resolve();

		return (new LanguageResource($model))->toResponse();
	}

	public function getResponseCollection($collection)
	{
		// return (new LanguageCollection($collection));
		return (new LanguageCollection($collection))->toResponse();
	}

}
