<?php

// 命名空间
namespace Xzb\Modules\Language\Services;

use Xzb\MasterKey\Service;
use Xzb\Modules\Language\Models\Language;

/**
 * 语言 业务类
 */
class LanguageService extends Service
{
	/**
	 * 排序 列
	 * 
	 * @var array
	 */
	protected $sorts = [
		'sort' => []
	];

	/**
	 * 是否开启 插入排序
	 * 
	 * @var bool
	 */
	protected $insertSorting = true;

	/**
	 * 唯一 列
	 * 
	 * @var array
	 */
	protected $uniques = [
		'abbr'
	];


	/**
	 * 是否开启 唯一写入验证
	 * 
	 * @var bool
	 */
	protected $uniqueWriteVerify = true;

	/**
	 * 模糊匹配 列
	 * 
	 * @var array
	 */
	protected $likes = [
		'title'
	];

	/**
	 * 查询 排序
	 * 
	 * @var string
	 */
	protected $querySort = '-sort';

	/**
	 * 构造函数
	 * 
	 * @return void
	 */
	public function __construct()
	{
		$this->model = new Language;
	}

}
