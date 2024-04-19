<?php

// 命名空间
namespace Xzb\Modules\Language\Resources;

use Xzb\CodeIgniter3\Resources\JsonResource;

/**
 * 语言 资源
 */
class LanguageResource extends JsonResource
{
	/**
	 * 资源 转换为 数组
	 * 
	 * @return array
	 */
	public function toArray()
	{
		// 方法
		$method = get_instance()->router->fetch_method();

		// 统计
		if ($method == 'stat') {
			return [
				'count' => $this->count
			];
		}

		return [
			'id'			=> $this->id,
			'title'			=> $this->title,
			// 'en_title'		=> $this->en_title,
			// 'locale_title'	=> $this->locale_title,
			// 'code'			=> $this->code,
			// 'ci_package'	=> $this->ci_package,
			// 'is_disabled'	=> $this->is_disabled,
			// 'created_at'	=> $this->created_at,
			// 'updated_at'	=> $this->updated_at,
		];
	}

}
