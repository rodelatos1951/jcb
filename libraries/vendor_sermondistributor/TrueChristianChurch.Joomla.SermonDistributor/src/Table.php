<?php
/*-------------------------------------------------------------------------------------------------------------|  www.vdm.io  |------/
 ____                                                  ____                 __               __               __
/\  _`\                                               /\  _`\   __         /\ \__         __/\ \             /\ \__
\ \,\L\_\     __   _ __    ___ ___     ___     ___    \ \ \/\ \/\_\    ____\ \ ,_\  _ __ /\_\ \ \____  __  __\ \ ,_\   ___   _ __
 \/_\__ \   /'__`\/\`'__\/' __` __`\  / __`\ /' _ `\   \ \ \ \ \/\ \  /',__\\ \ \/ /\`'__\/\ \ \ '__`\/\ \/\ \\ \ \/  / __`\/\`'__\
   /\ \L\ \/\  __/\ \ \/ /\ \/\ \/\ \/\ \L\ \/\ \/\ \   \ \ \_\ \ \ \/\__, `\\ \ \_\ \ \/ \ \ \ \ \L\ \ \ \_\ \\ \ \_/\ \L\ \ \ \/
   \ `\____\ \____\\ \_\ \ \_\ \_\ \_\ \____/\ \_\ \_\   \ \____/\ \_\/\____/ \ \__\\ \_\  \ \_\ \_,__/\ \____/ \ \__\ \____/\ \_\
    \/_____/\/____/ \/_/  \/_/\/_/\/_/\/___/  \/_/\/_/    \/___/  \/_/\/___/   \/__/ \/_/   \/_/\/___/  \/___/   \/__/\/___/  \/_/

/------------------------------------------------------------------------------------------------------------------------------------/

	@version		5.0.x
	@created		22nd October, 2015
	@package		Sermon Distributor
	@subpackage		Table.php
	@author			Llewellyn van der Merwe <https://www.vdm.io/>	
	@copyright		Copyright (C) 2015. All Rights Reserved
	@license		GNU/GPL Version 2 or later - http://www.gnu.org/licenses/gpl-2.0.html 

	A sermon distributor that links to Dropbox. 

/----------------------------------------------------------------------------------------------------------------------------------*/

namespace TrueChristianChurch\Joomla\SermonDistributor;


use TrueChristianChurch\Joomla\Interfaces\Tableinterface;
use TrueChristianChurch\Joomla\Abstraction\BaseTable;


/**
 * Sermon Distributor Tables
 * 
 * @since 2.0.1
 */
class Table extends BaseTable implements Tableinterface
{
	/**
	 * All areas/views/tables with their field details
	 *
	 * @var     array
	 * @since  2.0.1
	 **/
	protected array $tables = [
		'preacher' => [
			'name' => [
				'name' => 'name',
				'label' => 'COM_SERMONDISTRIBUTOR_PREACHER_NAME_LABEL',
				'type' => 'text',
				'title' => true,
				'list' => 'preachers',
				'store' => NULL,
				'tab_name' => 'Details',
				'db' => [
					'type' => 'VARCHAR(255)',
					'default' => '',
					'null_switch' => 'NOT NULL',
					'unique_key' => false,
					'key' => true,
				],
			],
			'description' => [
				'name' => 'description',
				'label' => 'COM_SERMONDISTRIBUTOR_PREACHER_DESCRIPTION_LABEL',
				'type' => 'editor',
				'title' => false,
				'list' => 'preachers',
				'store' => NULL,
				'tab_name' => 'Details',
				'db' => [
					'type' => 'TEXT',
					'default' => 'EMPTY',
					'null_switch' => 'NOT NULL',
					'unique_key' => false,
					'key' => false,
				],
			],
			'website' => [
				'name' => 'website',
				'label' => 'COM_SERMONDISTRIBUTOR_PREACHER_WEBSITE_LABEL',
				'type' => 'url',
				'title' => false,
				'list' => 'preachers',
				'store' => NULL,
				'tab_name' => 'Details',
				'db' => [
					'type' => 'VARCHAR(255)',
					'default' => '',
					'null_switch' => 'NOT NULL',
					'unique_key' => false,
					'key' => false,
				],
			],
			'email' => [
				'name' => 'email',
				'label' => 'COM_SERMONDISTRIBUTOR_PREACHER_EMAIL_LABEL',
				'type' => 'text',
				'title' => false,
				'list' => 'preachers',
				'store' => NULL,
				'tab_name' => 'Details',
				'db' => [
					'type' => 'VARCHAR(255)',
					'default' => '',
					'null_switch' => 'NOT NULL',
					'unique_key' => false,
					'key' => false,
				],
			],
			'icon' => [
				'name' => 'icon',
				'label' => 'COM_SERMONDISTRIBUTOR_PREACHER_ICON_LABEL',
				'type' => 'media',
				'title' => false,
				'list' => 'preachers',
				'store' => NULL,
				'tab_name' => 'Details',
				'db' => [
					'type' => 'CHAR(64)',
					'default' => '',
					'null_switch' => 'NOT NULL',
					'unique_key' => false,
					'key' => false,
				],
			],
			'alias' => [
				'name' => 'alias',
				'label' => 'COM_SERMONDISTRIBUTOR_PREACHER_ALIAS_LABEL',
				'type' => 'text',
				'title' => false,
				'list' => 'preachers',
				'store' => NULL,
				'tab_name' => 'Details',
				'db' => [
					'type' => 'CHAR(64)',
					'default' => '',
					'null_switch' => 'NOT NULL',
					'unique_key' => false,
					'key' => true,
				],
			],
			'access' => [
				'name' => 'access',
				'label' => 'Access',
				'type' => 'accesslevel',
				'title' => false,
				'store' => NULL,
				'tab_name' => NULL,
				'db' => [
					'type' => 'INT(10) unsigned',
					'default' => '0',
					'key' => true,
					'null_switch' => 'NOT NULL',
				],
			],
			'metakey' => [
				'name' => 'metakey',
				'label' => 'Meta Keywords',
				'type' => 'textarea',
				'title' => false,
				'store' => NULL,
				'tab_name' => 'publishing',
				'db' => [
					'type' => 'TEXT',
					'default' => '',
				],
			],
			'metadesc' => [
				'name' => 'metadesc',
				'label' => 'Meta Description',
				'type' => 'textarea',
				'title' => false,
				'store' => NULL,
				'tab_name' => 'publishing',
				'db' => [
					'type' => 'TEXT',
					'default' => '',
				],
			],
			'metadata' => [
				'name' => 'metadata',
				'label' => 'Meta Data',
				'type' => NULL,
				'title' => false,
				'store' => 'json',
				'tab_name' => 'publishing',
				'db' => [
					'type' => 'TEXT',
					'default' => '',
				],
			],
		],
		'sermon' => [
			'name' => [
				'name' => 'name',
				'label' => 'COM_SERMONDISTRIBUTOR_SERMON_NAME_LABEL',
				'type' => 'text',
				'title' => true,
				'list' => 'sermons',
				'store' => NULL,
				'tab_name' => 'Details',
				'db' => [
					'type' => 'VARCHAR(255)',
					'default' => '',
					'null_switch' => 'NOT NULL',
					'unique_key' => false,
					'key' => true,
				],
			],
			'preacher' => [
				'name' => 'preacher',
				'label' => 'COM_SERMONDISTRIBUTOR_SERMON_PREACHER_LABEL',
				'type' => 'preachers',
				'title' => false,
				'list' => 'sermons',
				'store' => NULL,
				'tab_name' => 'Details',
				'db' => [
					'type' => 'INT(11)',
					'default' => '0',
					'null_switch' => 'NOT NULL',
					'unique_key' => false,
					'key' => true,
				],
			],
			'series' => [
				'name' => 'series',
				'label' => 'COM_SERMONDISTRIBUTOR_SERMON_SERIES_LABEL',
				'type' => 'series',
				'title' => false,
				'list' => 'sermons',
				'store' => NULL,
				'tab_name' => 'Details',
				'db' => [
					'type' => 'INT(11)',
					'default' => '0',
					'null_switch' => 'NOT NULL',
					'unique_key' => false,
					'key' => true,
				],
			],
			'short_description' => [
				'name' => 'short_description',
				'label' => 'COM_SERMONDISTRIBUTOR_SERMON_SHORT_DESCRIPTION_LABEL',
				'type' => 'text',
				'title' => false,
				'list' => 'sermons',
				'store' => NULL,
				'tab_name' => 'Details',
				'db' => [
					'type' => 'VARCHAR(255)',
					'default' => '',
					'null_switch' => 'NOT NULL',
					'unique_key' => false,
					'key' => false,
				],
			],
			'catid' => [
				'name' => 'catid',
				'label' => 'COM_SERMONDISTRIBUTOR_SERMON_CATID_LABEL',
				'type' => 'category',
				'title' => false,
				'list' => 'sermons',
				'store' => NULL,
				'tab_name' => 'Details',
				'db' => [
					'type' => 'INT(11)',
					'default' => '0',
					'null_switch' => 'NOT NULL',
					'unique_key' => false,
					'key' => true,
				],
			],
			'link_type' => [
				'name' => 'link_type',
				'label' => 'COM_SERMONDISTRIBUTOR_SERMON_LINK_TYPE_LABEL',
				'type' => 'radio',
				'title' => false,
				'list' => 'sermons',
				'store' => NULL,
				'tab_name' => 'Files',
				'db' => [
					'type' => 'TINYINT(1)',
					'default' => '1',
					'null_switch' => 'NOT NULL',
					'unique_key' => false,
					'key' => true,
				],
			],
			'source' => [
				'name' => 'source',
				'label' => 'COM_SERMONDISTRIBUTOR_SERMON_SOURCE_LABEL',
				'type' => 'list',
				'title' => false,
				'list' => 'sermons',
				'store' => NULL,
				'tab_name' => 'Files',
				'db' => [
					'type' => 'TINYINT(1)',
					'default' => '0',
					'null_switch' => 'NOT NULL',
					'unique_key' => false,
					'key' => false,
				],
			],
			'local_files' => [
				'name' => 'local_files',
				'label' => 'COM_SERMONDISTRIBUTOR_SERMON_LOCAL_FILES_LABEL',
				'type' => 'localfiles',
				'title' => false,
				'list' => 'sermons',
				'store' => 'json',
				'tab_name' => 'Files',
				'db' => [
					'type' => 'TEXT',
					'default' => 'EMPTY',
					'null_switch' => 'NOT NULL',
					'unique_key' => false,
					'key' => false,
				],
			],
			'alias' => [
				'name' => 'alias',
				'label' => 'COM_SERMONDISTRIBUTOR_SERMON_ALIAS_LABEL',
				'type' => 'text',
				'title' => false,
				'list' => 'sermons',
				'store' => NULL,
				'tab_name' => 'Details',
				'db' => [
					'type' => 'CHAR(64)',
					'default' => '',
					'null_switch' => 'NOT NULL',
					'unique_key' => false,
					'key' => true,
				],
			],
			'description' => [
				'name' => 'description',
				'label' => 'COM_SERMONDISTRIBUTOR_SERMON_DESCRIPTION_LABEL',
				'type' => 'editor',
				'title' => false,
				'list' => 'sermons',
				'store' => NULL,
				'tab_name' => 'Details',
				'db' => [
					'type' => 'TEXT',
					'default' => 'EMPTY',
					'null_switch' => 'NOT NULL',
					'unique_key' => false,
					'key' => false,
				],
			],
			'tags' => [
				'name' => 'tags',
				'label' => 'COM_SERMONDISTRIBUTOR_SERMON_TAGS_LABEL',
				'type' => 'tag',
				'title' => false,
				'list' => 'sermons',
				'store' => NULL,
				'tab_name' => 'Details',
				'db' => [
					'type' => 'CHAR(11)',
					'default' => '0',
					'null_switch' => 'NOT NULL',
					'unique_key' => false,
					'key' => false,
				],
			],
			'icon' => [
				'name' => 'icon',
				'label' => 'COM_SERMONDISTRIBUTOR_SERMON_ICON_LABEL',
				'type' => 'media',
				'title' => false,
				'list' => 'sermons',
				'store' => NULL,
				'tab_name' => 'Details',
				'db' => [
					'type' => 'CHAR(64)',
					'default' => '',
					'null_switch' => 'NOT NULL',
					'unique_key' => false,
					'key' => false,
				],
			],
			'build' => [
				'name' => 'build',
				'label' => 'COM_SERMONDISTRIBUTOR_SERMON_BUILD_LABEL',
				'type' => 'list',
				'title' => false,
				'list' => 'sermons',
				'store' => NULL,
				'tab_name' => 'Files',
				'db' => [
					'type' => 'TINYINT(1)',
					'default' => '0',
					'null_switch' => 'NOT NULL',
					'unique_key' => false,
					'key' => true,
				],
			],
			'manual_files' => [
				'name' => 'manual_files',
				'label' => 'COM_SERMONDISTRIBUTOR_SERMON_MANUAL_FILES_LABEL',
				'type' => 'externalsourcefiles',
				'title' => false,
				'list' => 'sermons',
				'store' => 'json',
				'tab_name' => 'Files',
				'db' => [
					'type' => 'TEXT',
					'default' => 'EMPTY',
					'null_switch' => 'NOT NULL',
					'unique_key' => false,
					'key' => false,
				],
			],
			'auto_sermons' => [
				'name' => 'auto_sermons',
				'label' => '',
				'type' => 'hidden',
				'title' => false,
				'list' => 'sermons',
				'store' => NULL,
				'tab_name' => 'Details',
				'db' => [
					'type' => 'TEXT',
					'default' => 'EMPTY',
					'null_switch' => 'NOT NULL',
					'unique_key' => false,
					'key' => false,
				],
			],
			'url' => [
				'name' => 'url',
				'label' => 'COM_SERMONDISTRIBUTOR_SERMON_URL_LABEL',
				'type' => 'url',
				'title' => false,
				'list' => 'sermons',
				'store' => NULL,
				'tab_name' => 'Files',
				'db' => [
					'type' => 'VARCHAR(255)',
					'default' => '',
					'null_switch' => 'NOT NULL',
					'unique_key' => false,
					'key' => false,
				],
			],
			'scripture' => [
				'name' => 'scripture',
				'label' => 'COM_SERMONDISTRIBUTOR_SERMON_SCRIPTURE_LABEL',
				'type' => 'text',
				'title' => false,
				'list' => 'sermons',
				'store' => NULL,
				'tab_name' => 'Details',
				'db' => [
					'type' => 'VARCHAR(255)',
					'default' => '',
					'null_switch' => 'NOT NULL',
					'unique_key' => false,
					'key' => false,
				],
			],
			'access' => [
				'name' => 'access',
				'label' => 'Access',
				'type' => 'accesslevel',
				'title' => false,
				'store' => NULL,
				'tab_name' => NULL,
				'db' => [
					'type' => 'INT(10) unsigned',
					'default' => '0',
					'key' => true,
					'null_switch' => 'NOT NULL',
				],
			],
			'metakey' => [
				'name' => 'metakey',
				'label' => 'Meta Keywords',
				'type' => 'textarea',
				'title' => false,
				'store' => NULL,
				'tab_name' => 'publishing',
				'db' => [
					'type' => 'TEXT',
					'default' => '',
				],
			],
			'metadesc' => [
				'name' => 'metadesc',
				'label' => 'Meta Description',
				'type' => 'textarea',
				'title' => false,
				'store' => NULL,
				'tab_name' => 'publishing',
				'db' => [
					'type' => 'TEXT',
					'default' => '',
				],
			],
			'metadata' => [
				'name' => 'metadata',
				'label' => 'Meta Data',
				'type' => NULL,
				'title' => false,
				'store' => 'json',
				'tab_name' => 'publishing',
				'db' => [
					'type' => 'TEXT',
					'default' => '',
				],
			],
		],
		'series' => [
			'name' => [
				'name' => 'name',
				'label' => 'COM_SERMONDISTRIBUTOR_SERIES_NAME_LABEL',
				'type' => 'text',
				'title' => true,
				'list' => 'series_list',
				'store' => NULL,
				'tab_name' => 'Details',
				'db' => [
					'type' => 'VARCHAR(255)',
					'default' => '',
					'null_switch' => 'NOT NULL',
					'unique_key' => false,
					'key' => true,
				],
			],
			'description' => [
				'name' => 'description',
				'label' => 'COM_SERMONDISTRIBUTOR_SERIES_DESCRIPTION_LABEL',
				'type' => 'editor',
				'title' => false,
				'list' => 'series_list',
				'store' => NULL,
				'tab_name' => 'Details',
				'db' => [
					'type' => 'TEXT',
					'default' => 'EMPTY',
					'null_switch' => 'NOT NULL',
					'unique_key' => false,
					'key' => false,
				],
			],
			'scripture' => [
				'name' => 'scripture',
				'label' => 'COM_SERMONDISTRIBUTOR_SERIES_SCRIPTURE_LABEL',
				'type' => 'text',
				'title' => false,
				'list' => 'series_list',
				'store' => NULL,
				'tab_name' => 'Details',
				'db' => [
					'type' => 'VARCHAR(255)',
					'default' => '',
					'null_switch' => 'NOT NULL',
					'unique_key' => false,
					'key' => false,
				],
			],
			'icon' => [
				'name' => 'icon',
				'label' => 'COM_SERMONDISTRIBUTOR_SERIES_ICON_LABEL',
				'type' => 'media',
				'title' => false,
				'list' => 'series_list',
				'store' => NULL,
				'tab_name' => 'Details',
				'db' => [
					'type' => 'CHAR(64)',
					'default' => '',
					'null_switch' => 'NOT NULL',
					'unique_key' => false,
					'key' => false,
				],
			],
			'alias' => [
				'name' => 'alias',
				'label' => 'COM_SERMONDISTRIBUTOR_SERIES_ALIAS_LABEL',
				'type' => 'text',
				'title' => false,
				'list' => 'series_list',
				'store' => NULL,
				'tab_name' => 'Details',
				'db' => [
					'type' => 'CHAR(64)',
					'default' => '',
					'null_switch' => 'NOT NULL',
					'unique_key' => false,
					'key' => true,
				],
			],
			'access' => [
				'name' => 'access',
				'label' => 'Access',
				'type' => 'accesslevel',
				'title' => false,
				'store' => NULL,
				'tab_name' => NULL,
				'db' => [
					'type' => 'INT(10) unsigned',
					'default' => '0',
					'key' => true,
					'null_switch' => 'NOT NULL',
				],
			],
			'metakey' => [
				'name' => 'metakey',
				'label' => 'Meta Keywords',
				'type' => 'textarea',
				'title' => false,
				'store' => NULL,
				'tab_name' => 'publishing',
				'db' => [
					'type' => 'TEXT',
					'default' => '',
				],
			],
			'metadesc' => [
				'name' => 'metadesc',
				'label' => 'Meta Description',
				'type' => 'textarea',
				'title' => false,
				'store' => NULL,
				'tab_name' => 'publishing',
				'db' => [
					'type' => 'TEXT',
					'default' => '',
				],
			],
			'metadata' => [
				'name' => 'metadata',
				'label' => 'Meta Data',
				'type' => NULL,
				'title' => false,
				'store' => 'json',
				'tab_name' => 'publishing',
				'db' => [
					'type' => 'TEXT',
					'default' => '',
				],
			],
		],
		'statistic' => [
			'filename' => [
				'name' => 'filename',
				'label' => 'COM_SERMONDISTRIBUTOR_STATISTIC_FILENAME_LABEL',
				'type' => 'text',
				'title' => true,
				'list' => 'statistics',
				'store' => NULL,
				'tab_name' => 'Details',
				'db' => [
					'type' => 'VARCHAR(255)',
					'default' => '',
					'null_switch' => 'NOT NULL',
					'unique_key' => false,
					'key' => true,
				],
			],
			'sermon' => [
				'name' => 'sermon',
				'label' => 'COM_SERMONDISTRIBUTOR_STATISTIC_SERMON_LABEL',
				'type' => 'sermon',
				'title' => false,
				'list' => 'statistics',
				'store' => NULL,
				'tab_name' => 'Details',
				'db' => [
					'type' => 'INT(11)',
					'default' => '0',
					'null_switch' => 'NOT NULL',
					'unique_key' => false,
					'key' => true,
				],
			],
			'preacher' => [
				'name' => 'preacher',
				'label' => 'COM_SERMONDISTRIBUTOR_STATISTIC_PREACHER_LABEL',
				'type' => 'preachers',
				'title' => false,
				'list' => 'statistics',
				'store' => NULL,
				'tab_name' => 'Details',
				'db' => [
					'type' => 'INT(11)',
					'default' => '0',
					'null_switch' => 'NOT NULL',
					'unique_key' => false,
					'key' => true,
				],
			],
			'series' => [
				'name' => 'series',
				'label' => 'COM_SERMONDISTRIBUTOR_STATISTIC_SERIES_LABEL',
				'type' => 'series',
				'title' => false,
				'list' => 'statistics',
				'store' => NULL,
				'tab_name' => 'Details',
				'db' => [
					'type' => 'INT(11)',
					'default' => '0',
					'null_switch' => 'NOT NULL',
					'unique_key' => false,
					'key' => true,
				],
			],
			'counter' => [
				'name' => 'counter',
				'label' => 'COM_SERMONDISTRIBUTOR_STATISTIC_COUNTER_LABEL',
				'type' => 'text',
				'title' => false,
				'list' => 'statistics',
				'store' => NULL,
				'tab_name' => 'Details',
				'db' => [
					'type' => 'INT(64)',
					'default' => '0',
					'null_switch' => 'NOT NULL',
					'unique_key' => false,
					'key' => false,
				],
			],
			'access' => [
				'name' => 'access',
				'label' => 'Access',
				'type' => 'accesslevel',
				'title' => false,
				'store' => NULL,
				'tab_name' => NULL,
				'db' => [
					'type' => 'INT(10) unsigned',
					'default' => '0',
					'key' => true,
					'null_switch' => 'NOT NULL',
				],
			],
			'metakey' => [
				'name' => 'metakey',
				'label' => 'Meta Keywords',
				'type' => 'textarea',
				'title' => false,
				'store' => NULL,
				'tab_name' => 'publishing',
				'db' => [
					'type' => 'TEXT',
					'default' => '',
				],
			],
			'metadesc' => [
				'name' => 'metadesc',
				'label' => 'Meta Description',
				'type' => 'textarea',
				'title' => false,
				'store' => NULL,
				'tab_name' => 'publishing',
				'db' => [
					'type' => 'TEXT',
					'default' => '',
				],
			],
			'metadata' => [
				'name' => 'metadata',
				'label' => 'Meta Data',
				'type' => NULL,
				'title' => false,
				'store' => 'json',
				'tab_name' => 'publishing',
				'db' => [
					'type' => 'TEXT',
					'default' => '',
				],
			],
		],
		'external_source' => [
			'description' => [
				'name' => 'description',
				'label' => 'COM_SERMONDISTRIBUTOR_EXTERNAL_SOURCE_DESCRIPTION_LABEL',
				'type' => 'text',
				'title' => true,
				'list' => 'external_sources',
				'store' => NULL,
				'tab_name' => 'Details',
				'db' => [
					'type' => 'VARCHAR(255)',
					'default' => '',
					'null_switch' => 'NOT NULL',
					'unique_key' => false,
					'key' => true,
				],
			],
			'externalsources' => [
				'name' => 'externalsources',
				'label' => 'COM_SERMONDISTRIBUTOR_EXTERNAL_SOURCE_EXTERNALSOURCES_LABEL',
				'type' => 'list',
				'title' => false,
				'list' => 'external_sources',
				'store' => NULL,
				'tab_name' => 'Details',
				'db' => [
					'type' => 'INT(11)',
					'default' => '0',
					'null_switch' => 'NOT NULL',
					'unique_key' => false,
					'key' => true,
				],
			],
			'update_method' => [
				'name' => 'update_method',
				'label' => 'COM_SERMONDISTRIBUTOR_EXTERNAL_SOURCE_UPDATE_METHOD_LABEL',
				'type' => 'radio',
				'title' => false,
				'list' => 'external_sources',
				'store' => NULL,
				'tab_name' => 'Details',
				'db' => [
					'type' => 'TINYINT',
					'default' => '0',
					'null_switch' => 'NOT NULL',
					'unique_key' => false,
					'key' => true,
				],
			],
			'filetypes' => [
				'name' => 'filetypes',
				'label' => 'COM_SERMONDISTRIBUTOR_EXTERNAL_SOURCE_FILETYPES_LABEL',
				'type' => 'list',
				'title' => false,
				'list' => 'external_sources',
				'store' => 'json',
				'tab_name' => 'Details',
				'db' => [
					'type' => 'TEXT',
					'default' => 'EMPTY',
					'null_switch' => 'NOT NULL',
					'unique_key' => false,
					'key' => false,
				],
			],
			'build' => [
				'name' => 'build',
				'label' => 'COM_SERMONDISTRIBUTOR_EXTERNAL_SOURCE_BUILD_LABEL',
				'type' => 'list',
				'title' => false,
				'list' => 'external_sources',
				'store' => NULL,
				'tab_name' => 'Build Option',
				'db' => [
					'type' => 'TINYINT(1)',
					'default' => '0',
					'null_switch' => 'NOT NULL',
					'unique_key' => false,
					'key' => true,
				],
			],
			'not_required' => [
				'name' => 'not_required',
				'label' => '',
				'type' => 'hidden',
				'title' => false,
				'list' => 'external_sources',
				'store' => NULL,
				'tab_name' => 'Details',
				'db' => [
					'type' => 'INT(1)',
					'default' => '0',
					'null_switch' => 'NOT NULL',
					'unique_key' => false,
					'key' => false,
				],
			],
			'folder' => [
				'name' => 'folder',
				'label' => 'COM_SERMONDISTRIBUTOR_EXTERNAL_SOURCE_FOLDER_LABEL',
				'type' => 'repeatable',
				'title' => false,
				'list' => 'external_sources',
				'store' => NULL,
				'tab_name' => 'Details',
				'db' => [
					'type' => 'TEXT',
					'default' => 'EMPTY',
					'null_switch' => 'NOT NULL',
					'unique_key' => false,
					'key' => false,
				],
			],
			'update_timer' => [
				'name' => 'update_timer',
				'label' => 'COM_SERMONDISTRIBUTOR_EXTERNAL_SOURCE_UPDATE_TIMER_LABEL',
				'type' => 'integer',
				'title' => false,
				'list' => 'external_sources',
				'store' => NULL,
				'tab_name' => 'Details',
				'db' => [
					'type' => 'INT(1)',
					'default' => '0',
					'null_switch' => 'NOT NULL',
					'unique_key' => false,
					'key' => false,
				],
			],
			'dropboxoptions' => [
				'name' => 'dropboxoptions',
				'label' => 'COM_SERMONDISTRIBUTOR_EXTERNAL_SOURCE_DROPBOXOPTIONS_LABEL',
				'type' => 'radio',
				'title' => false,
				'list' => 'external_sources',
				'store' => NULL,
				'tab_name' => 'Details',
				'db' => [
					'type' => 'TINYINT(1)',
					'default' => '1',
					'null_switch' => 'NOT NULL',
					'unique_key' => false,
					'key' => true,
				],
			],
			'permissiontype' => [
				'name' => 'permissiontype',
				'label' => 'COM_SERMONDISTRIBUTOR_EXTERNAL_SOURCE_PERMISSIONTYPE_LABEL',
				'type' => 'radio',
				'title' => false,
				'list' => 'external_sources',
				'store' => NULL,
				'tab_name' => 'Details',
				'db' => [
					'type' => 'VARCHAR(64)',
					'default' => '',
					'null_switch' => 'NOT NULL',
					'unique_key' => false,
					'key' => true,
				],
			],
			'sharedurl' => [
				'name' => 'sharedurl',
				'label' => 'COM_SERMONDISTRIBUTOR_EXTERNAL_SOURCE_SHAREDURL_LABEL',
				'type' => 'repeatable',
				'title' => false,
				'list' => 'external_sources',
				'store' => NULL,
				'tab_name' => 'Details',
				'db' => [
					'type' => 'TEXT',
					'default' => 'EMPTY',
					'null_switch' => 'NOT NULL',
					'unique_key' => false,
					'key' => false,
				],
			],
			'oauthtoken' => [
				'name' => 'oauthtoken',
				'label' => 'COM_SERMONDISTRIBUTOR_EXTERNAL_SOURCE_OAUTHTOKEN_LABEL',
				'type' => 'text',
				'title' => false,
				'list' => 'external_sources',
				'store' => 'basic_encryption',
				'tab_name' => 'Details',
				'db' => [
					'type' => 'TEXT',
					'default' => 'EMPTY',
					'null_switch' => 'NOT NULL',
					'unique_key' => false,
					'key' => false,
				],
			],
		],
		'local_listing' => [
			'name' => [
				'name' => 'name',
				'label' => 'COM_SERMONDISTRIBUTOR_LOCAL_LISTING_NAME_LABEL',
				'type' => 'text',
				'title' => true,
				'list' => 'local_listings',
				'store' => NULL,
				'tab_name' => 'Details',
				'db' => [
					'type' => 'VARCHAR(255)',
					'default' => '',
					'null_switch' => 'NOT NULL',
					'unique_key' => false,
					'key' => true,
				],
			],
			'build' => [
				'name' => 'build',
				'label' => 'COM_SERMONDISTRIBUTOR_LOCAL_LISTING_BUILD_LABEL',
				'type' => 'list',
				'title' => false,
				'list' => 'local_listings',
				'store' => NULL,
				'tab_name' => 'Details',
				'db' => [
					'type' => 'TINYINT(1)',
					'default' => '0',
					'null_switch' => 'NOT NULL',
					'unique_key' => false,
					'key' => true,
				],
			],
			'size' => [
				'name' => 'size',
				'label' => 'COM_SERMONDISTRIBUTOR_LOCAL_LISTING_SIZE_LABEL',
				'type' => 'text',
				'title' => false,
				'list' => 'local_listings',
				'store' => NULL,
				'tab_name' => 'Details',
				'db' => [
					'type' => 'INT(50)',
					'default' => '0',
					'null_switch' => 'NOT NULL',
					'unique_key' => false,
					'key' => false,
				],
			],
			'external_source' => [
				'name' => 'external_source',
				'label' => 'COM_SERMONDISTRIBUTOR_LOCAL_LISTING_EXTERNAL_SOURCE_LABEL',
				'type' => 'externalsource',
				'title' => false,
				'list' => 'local_listings',
				'store' => NULL,
				'tab_name' => 'Details',
				'db' => [
					'type' => 'INT(11)',
					'default' => '0',
					'null_switch' => 'NOT NULL',
					'unique_key' => false,
					'key' => false,
				],
			],
			'key' => [
				'name' => 'key',
				'label' => 'COM_SERMONDISTRIBUTOR_LOCAL_LISTING_KEY_LABEL',
				'type' => 'text',
				'title' => false,
				'list' => 'local_listings',
				'store' => NULL,
				'tab_name' => 'Details',
				'db' => [
					'type' => 'VARCHAR(255)',
					'default' => '',
					'null_switch' => 'NOT NULL',
					'unique_key' => false,
					'key' => true,
				],
			],
			'url' => [
				'name' => 'url',
				'label' => 'COM_SERMONDISTRIBUTOR_LOCAL_LISTING_URL_LABEL',
				'type' => 'text',
				'title' => false,
				'list' => 'local_listings',
				'store' => 'basic_encryption',
				'tab_name' => 'Details',
				'db' => [
					'type' => 'TEXT',
					'default' => 'EMPTY',
					'null_switch' => 'NOT NULL',
					'unique_key' => false,
					'key' => false,
				],
			],
		],
		'help_document' => [
			'title' => [
				'name' => 'title',
				'label' => 'COM_SERMONDISTRIBUTOR_HELP_DOCUMENT_TITLE_LABEL',
				'type' => 'text',
				'title' => true,
				'list' => 'help_documents',
				'store' => NULL,
				'tab_name' => 'Details',
				'db' => [
					'type' => 'CHAR(64)',
					'default' => '',
					'null_switch' => 'NOT NULL',
					'unique_key' => false,
					'key' => true,
				],
			],
			'type' => [
				'name' => 'type',
				'label' => 'COM_SERMONDISTRIBUTOR_HELP_DOCUMENT_TYPE_LABEL',
				'type' => 'list',
				'title' => false,
				'list' => 'help_documents',
				'store' => NULL,
				'tab_name' => 'Details',
				'db' => [
					'type' => 'TINYINT(1)',
					'default' => '0',
					'null_switch' => 'NOT NULL',
					'unique_key' => false,
					'key' => true,
				],
			],
			'groups' => [
				'name' => 'groups',
				'label' => 'COM_SERMONDISTRIBUTOR_HELP_DOCUMENT_GROUPS_LABEL',
				'type' => 'usergrouplist',
				'title' => false,
				'list' => 'help_documents',
				'store' => 'json',
				'tab_name' => 'Details',
				'db' => [
					'type' => 'TEXT',
					'default' => 'EMPTY',
					'null_switch' => 'NOT NULL',
					'unique_key' => false,
					'key' => false,
				],
			],
			'location' => [
				'name' => 'location',
				'label' => 'COM_SERMONDISTRIBUTOR_HELP_DOCUMENT_LOCATION_LABEL',
				'type' => 'radio',
				'title' => false,
				'list' => 'help_documents',
				'store' => NULL,
				'tab_name' => 'Details',
				'db' => [
					'type' => 'TINYINT(1)',
					'default' => '0',
					'null_switch' => 'NOT NULL',
					'unique_key' => false,
					'key' => true,
				],
			],
			'admin_view' => [
				'name' => 'admin_view',
				'label' => 'COM_SERMONDISTRIBUTOR_HELP_DOCUMENT_ADMIN_VIEW_LABEL',
				'type' => 'adminviewfolderlist',
				'title' => false,
				'list' => 'help_documents',
				'store' => NULL,
				'tab_name' => 'Details',
				'db' => [
					'type' => 'CHAR(255)',
					'default' => '',
					'null_switch' => 'NOT NULL',
					'unique_key' => false,
					'key' => false,
				],
			],
			'site_view' => [
				'name' => 'site_view',
				'label' => 'COM_SERMONDISTRIBUTOR_HELP_DOCUMENT_SITE_VIEW_LABEL',
				'type' => 'siteviewfolderlist',
				'title' => false,
				'list' => 'help_documents',
				'store' => NULL,
				'tab_name' => 'Details',
				'db' => [
					'type' => 'CHAR(255)',
					'default' => '',
					'null_switch' => 'NOT NULL',
					'unique_key' => false,
					'key' => false,
				],
			],
			'alias' => [
				'name' => 'alias',
				'label' => 'COM_SERMONDISTRIBUTOR_HELP_DOCUMENT_ALIAS_LABEL',
				'type' => 'text',
				'title' => false,
				'list' => 'help_documents',
				'store' => NULL,
				'tab_name' => 'Details',
				'db' => [
					'type' => 'CHAR(64)',
					'default' => '',
					'null_switch' => 'NOT NULL',
					'unique_key' => false,
					'key' => true,
				],
			],
			'content' => [
				'name' => 'content',
				'label' => 'COM_SERMONDISTRIBUTOR_HELP_DOCUMENT_CONTENT_LABEL',
				'type' => 'editor',
				'title' => false,
				'list' => 'help_documents',
				'store' => NULL,
				'tab_name' => 'Details',
				'db' => [
					'type' => 'TEXT',
					'default' => 'EMPTY',
					'null_switch' => 'NOT NULL',
					'unique_key' => false,
					'key' => false,
				],
			],
			'article' => [
				'name' => 'article',
				'label' => 'COM_SERMONDISTRIBUTOR_HELP_DOCUMENT_ARTICLE_LABEL',
				'type' => 'articles',
				'title' => false,
				'list' => 'help_documents',
				'store' => NULL,
				'tab_name' => 'Details',
				'db' => [
					'type' => 'TINYINT(1)',
					'default' => '0',
					'null_switch' => 'NOT NULL',
					'unique_key' => false,
					'key' => true,
				],
			],
			'url' => [
				'name' => 'url',
				'label' => 'COM_SERMONDISTRIBUTOR_HELP_DOCUMENT_URL_LABEL',
				'type' => 'url',
				'title' => false,
				'list' => 'help_documents',
				'store' => NULL,
				'tab_name' => 'Details',
				'db' => [
					'type' => 'VARCHAR(255)',
					'default' => '',
					'null_switch' => 'NOT NULL',
					'unique_key' => false,
					'key' => false,
				],
			],
			'target' => [
				'name' => 'target',
				'label' => 'COM_SERMONDISTRIBUTOR_HELP_DOCUMENT_TARGET_LABEL',
				'type' => 'radio',
				'title' => false,
				'list' => 'help_documents',
				'store' => NULL,
				'tab_name' => 'Details',
				'db' => [
					'type' => 'TINYINT(1)',
					'default' => '0',
					'null_switch' => 'NOT NULL',
					'unique_key' => false,
					'key' => true,
				],
			],
			'access' => [
				'name' => 'access',
				'label' => 'Access',
				'type' => 'accesslevel',
				'title' => false,
				'store' => NULL,
				'tab_name' => NULL,
				'db' => [
					'type' => 'INT(10) unsigned',
					'default' => '0',
					'key' => true,
					'null_switch' => 'NOT NULL',
				],
			],
			'metakey' => [
				'name' => 'metakey',
				'label' => 'Meta Keywords',
				'type' => 'textarea',
				'title' => false,
				'store' => NULL,
				'tab_name' => 'publishing',
				'db' => [
					'type' => 'TEXT',
					'default' => '',
				],
			],
			'metadesc' => [
				'name' => 'metadesc',
				'label' => 'Meta Description',
				'type' => 'textarea',
				'title' => false,
				'store' => NULL,
				'tab_name' => 'publishing',
				'db' => [
					'type' => 'TEXT',
					'default' => '',
				],
			],
			'metadata' => [
				'name' => 'metadata',
				'label' => 'Meta Data',
				'type' => NULL,
				'title' => false,
				'store' => 'json',
				'tab_name' => 'publishing',
				'db' => [
					'type' => 'TEXT',
					'default' => '',
				],
			],
		],
	];
}

