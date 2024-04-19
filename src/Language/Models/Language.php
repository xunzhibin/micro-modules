<?php

// 命名空间
namespace Xzb\Modules\Language\Models;

use Xzb\CodeIgniter3\Database\Eloquent\Model;

/**
 * 语言 模型类
 */
class Language extends Model
{
	// /**
	//  * 是否开启 软删除
	//  * 
	//  * @var bool
	//  */
	// protected $softDelete = true;

	/**
	 * 日期列 存储格式
	 * 
	 * @var string
	 */
	protected $dateFormat = 'U';

	/**
	 * 强制转换 属性
	 * 
	 * @var array
	 */
	protected $casts = [
		// 属性 => 数据类型
		'is_disabled' => 'bool',
		'created_at' => 'datetime',
		'updated_at' => 'datetime',
	];

}
