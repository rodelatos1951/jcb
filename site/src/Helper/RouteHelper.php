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
	@subpackage		RouteHelper.php
	@author			Llewellyn van der Merwe <https://www.vdm.io/>	
	@copyright		Copyright (C) 2015. All Rights Reserved
	@license		GNU/GPL Version 2 or later - http://www.gnu.org/licenses/gpl-2.0.html 

	A sermon distributor that links to Dropbox. 

/----------------------------------------------------------------------------------------------------------------------------------*/
namespace TrueChristianChurch\Component\Sermondistributor\Site\Helper;

use Joomla\CMS\Factory;
use Joomla\CMS\Language\Text;
use Joomla\CMS\Language\Multilanguage;
use Joomla\CMS\Component\ComponentHelper;
use Joomla\CMS\Categories\CategoryNode;
use Joomla\CMS\Categories\Categories;
use TrueChristianChurch\Joomla\Utilities\ArrayHelper;

// No direct access to this file
\defined('_JEXEC') or die;

/**
 * Sermondistributor Component Route Helper
 *
 * @since       1.5
 */
abstract class RouteHelper
{
	protected static $lookup;

	/**
	 * @param int The route of the Sermon
	 */
	public static function getSermonRoute($id = 0, $catid = 0)
	{
		if ($id > 0)
		{
			// Initialize the needel array.
			$needles = array(
				'sermon'  => array((int) $id)
			);
			// Create the link
			$link = 'index.php?option=com_sermondistributor&view=sermon&id='. $id;
		}
		else
		{
			// Initialize the needel array.
			$needles = array(
				'sermon'  => array()
			);
			// Create the link but don't add the id.
			$link = 'index.php?option=com_sermondistributor&view=sermon';
		}
		if ($catid > 1)
		{
			$categories = Categories::getInstance('sermondistributor.sermons');
			$category = $categories->get($catid);
			if ($category)
			{
				$needles['category'] = array_reverse($category->getPath());
				$needles['categories'] = $needles['category'];
				$link .= '&catid='.$catid;
			}
		}

		if ($item = self::_findItem($needles, 'sermon'))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}

	/**
	 * @param int The route of the Preachers
	 */
	public static function getPreachersRoute($id = 0, $catid = 0)
	{
		if ($id > 0)
		{
			// Initialize the needel array.
			$needles = array(
				'preachers'  => array((int) $id)
			);
			// Create the link
			$link = 'index.php?option=com_sermondistributor&view=preachers&id='. $id;
		}
		else
		{
			// Initialize the needel array.
			$needles = array(
				'preachers'  => array()
			);
			// Create the link but don't add the id.
			$link = 'index.php?option=com_sermondistributor&view=preachers';
		}
		if ($catid > 1)
		{
			$categories = Categories::getInstance('sermondistributor.preachers');
			$category = $categories->get($catid);
			if ($category)
			{
				$needles['category'] = array_reverse($category->getPath());
				$needles['categories'] = $needles['category'];
				$link .= '&catid='.$catid;
			}
		}

		if ($item = self::_findItem($needles))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}

	/**
	 * @param int The route of the Preacher
	 */
	public static function getPreacherRoute($id = 0, $catid = 0)
	{
		if ($id > 0)
		{
			// Initialize the needel array.
			$needles = array(
				'preacher'  => array((int) $id)
			);
			// Create the link
			$link = 'index.php?option=com_sermondistributor&view=preacher&id='. $id;
		}
		else
		{
			// Initialize the needel array.
			$needles = array(
				'preacher'  => array()
			);
			// Create the link but don't add the id.
			$link = 'index.php?option=com_sermondistributor&view=preacher';
		}
		if ($catid > 1)
		{
			$categories = Categories::getInstance('sermondistributor.preacher');
			$category = $categories->get($catid);
			if ($category)
			{
				$needles['category'] = array_reverse($category->getPath());
				$needles['categories'] = $needles['category'];
				$link .= '&catid='.$catid;
			}
		}

		if ($item = self::_findItem($needles, 'preacher'))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}

	/**
	 * @param int The route of the Categories
	 */
	public static function getCategoriesRoute($id = 0)
	{
		if ($id > 0)
		{
			// Initialize the needel array.
			$needles = array(
				'categories'  => array((int) $id)
			);
			// Create the link
			$link = 'index.php?option=com_sermondistributor&view=categories&id='. $id;
		}
		else
		{
			// Initialize the needel array.
			$needles = array(
				'categories'  => array()
			);
			// Create the link but don't add the id.
			$link = 'index.php?option=com_sermondistributor&view=categories';
		}

		if ($item = self::_findItem($needles))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}

	/**
	 * @param int The route of the Category
	 */
	public static function getCategoryRoute($id = 0)
	{
		if ($id > 0)
		{
			// Initialize the needel array.
			$needles = array(
				'category'  => array((int) $id)
			);
			// Create the link
			$link = 'index.php?option=com_sermondistributor&view=category&id='. $id;
		}
		else
		{
			// Initialize the needel array.
			$needles = array(
				'category'  => array()
			);
			// Create the link but don't add the id.
			$link = 'index.php?option=com_sermondistributor&view=category';
		}

		if ($item = self::_findItem($needles, 'category'))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}

	/**
	 * @param int The route of the Serieslist
	 */
	public static function getSerieslistRoute($id = 0, $catid = 0)
	{
		if ($id > 0)
		{
			// Initialize the needel array.
			$needles = array(
				'serieslist'  => array((int) $id)
			);
			// Create the link
			$link = 'index.php?option=com_sermondistributor&view=serieslist&id='. $id;
		}
		else
		{
			// Initialize the needel array.
			$needles = array(
				'serieslist'  => array()
			);
			// Create the link but don't add the id.
			$link = 'index.php?option=com_sermondistributor&view=serieslist';
		}
		if ($catid > 1)
		{
			$categories = Categories::getInstance('sermondistributor.serieslist');
			$category = $categories->get($catid);
			if ($category)
			{
				$needles['category'] = array_reverse($category->getPath());
				$needles['categories'] = $needles['category'];
				$link .= '&catid='.$catid;
			}
		}

		if ($item = self::_findItem($needles))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}

	/**
	 * @param int The route of the Series
	 */
	public static function getSeriesRoute($id = 0, $catid = 0)
	{
		if ($id > 0)
		{
			// Initialize the needel array.
			$needles = array(
				'series'  => array((int) $id)
			);
			// Create the link
			$link = 'index.php?option=com_sermondistributor&view=series&id='. $id;
		}
		else
		{
			// Initialize the needel array.
			$needles = array(
				'series'  => array()
			);
			// Create the link but don't add the id.
			$link = 'index.php?option=com_sermondistributor&view=series';
		}
		if ($catid > 1)
		{
			$categories = Categories::getInstance('sermondistributor.series');
			$category = $categories->get($catid);
			if ($category)
			{
				$needles['category'] = array_reverse($category->getPath());
				$needles['categories'] = $needles['category'];
				$link .= '&catid='.$catid;
			}
		}

		if ($item = self::_findItem($needles, 'series'))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}

	/**
	 * @param int The route of the Api
	 */
	public static function getApiRoute($id = 0, $catid = 0)
	{
		if ($id > 0)
		{
			// Initialize the needel array.
			$needles = array(
				'api'  => array((int) $id)
			);
			// Create the link
			$link = 'index.php?option=com_sermondistributor&view=api&id='. $id;
		}
		else
		{
			// Initialize the needel array.
			$needles = array(
				'api'  => array()
			);
			// Create the link but don't add the id.
			$link = 'index.php?option=com_sermondistributor&view=api';
		}
		if ($catid > 1)
		{
			$categories = Categories::getInstance('sermondistributor.api');
			$category = $categories->get($catid);
			if ($category)
			{
				$needles['category'] = array_reverse($category->getPath());
				$needles['categories'] = $needles['category'];
				$link .= '&catid='.$catid;
			}
		}

		if ($item = self::_findItem($needles))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}

	protected static function _findItem($needles = null,$type = null)
	{
		$app      = Factory::getApplication();
		$menus    = $app->getMenu('site');
		$language = isset($needles['language']) ? $needles['language'] : '*';

		// Prepare the reverse lookup array.
		if (!isset(self::$lookup[$language]))
		{
			self::$lookup[$language] = [];

			$component  = ComponentHelper::getComponent('com_sermondistributor');

			$attributes = array('component_id');
			$values     = array($component->id);

			if ($language != '*')
			{
				$attributes[] = 'language';
				$values[]     = array($needles['language'], '*');
			}

			$items = $menus->getItems($attributes, $values);

			foreach ($items as $item)
			{
				if (isset($item->query) && isset($item->query['view']))
				{
					$view = $item->query['view'];

					if (!isset(self::$lookup[$language][$view]))
					{
						self::$lookup[$language][$view] = [];
					}

					if (isset($item->query['id']))
					{
						/**
						 * Here it will become a bit tricky
						 * language != * can override existing entries
						 * language == * cannot override existing entries
						 */
						if (!isset(self::$lookup[$language][$view][$item->query['id']]) || $item->language != '*')
						{
							self::$lookup[$language][$view][$item->query['id']] = $item->id;
						}
					}
					else
					{
						self::$lookup[$language][$view][0] = $item->id;
					}
				}
			}
		}

		if ($needles)
		{
			foreach ($needles as $view => $ids)
			{
				if (isset(self::$lookup[$language][$view]))
				{
					if (ArrayHelper::check($ids))
					{
						foreach ($ids as $id)
						{
							if (isset(self::$lookup[$language][$view][(int) $id]))
							{
								return self::$lookup[$language][$view][(int) $id];
							}
						}
					}
					elseif (isset(self::$lookup[$language][$view][0]))
					{
						return self::$lookup[$language][$view][0];
					}
				}
			}
		}

		if ($type)
		{
			// Check if the global menu item has been set.
			$params = ComponentHelper::getParams('com_sermondistributor');
			if ($item = $params->get($type.'_menu', 0))
			{
				return $item;
			}
		}

		// Check if the active menuitem matches the requested language
		$active = $menus->getActive();

		if ($active
			&& $active->component == 'com_sermondistributor'
			&& ($language == '*' || in_array($active->language, array('*', $language)) || !Multilanguage::isEnabled()))
		{
			return $active->id;
		}

		// If not found, return language specific home link
		$default = $menus->getDefault($language);

		return !empty($default->id) ? $default->id : null;
	}
}
