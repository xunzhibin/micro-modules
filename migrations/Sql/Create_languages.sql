CREATE TABLE `languages` (
	`id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '表自增主键',

	`title` VARCHAR(255) NOT NULL DEFAULT '' COMMENT '标题',
	`en_title` VARCHAR(255) NOT NULL DEFAULT '' COMMENT '英文标题',
	`locale_title` VARCHAR(255) NOT NULL DEFAULT '' COMMENT '本地标题',
	`abbr` VARCHAR(10) NOT NULL COMMENT '缩写',

	`sort` BIGINT NOT NULL DEFAULT 0 COMMENT '排序',
	`is_disabled` BIGINT NOT NULL DEFAULT 0 COMMENT '是否禁用 false否 true是',
	`is_deleted` BIGINT NOT NULL DEFAULT 0 COMMENT '是否删除 false否 true是',

	`created_at` BIGINT DEFAULT NULL COMMENT '创建时间',
	`updated_at` BIGINT DEFAULT NULL COMMENT '更新时间',
	`deleted_at` BIGINT DEFAULT NULL COMMENT '删除时间',

	PRIMARY KEY(`id`),
	UNIQUE INDEX `languages_abbr_unique`(`abbr`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='语言 表';
