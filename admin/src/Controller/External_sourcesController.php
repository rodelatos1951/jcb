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
	@subpackage		External_sourcesController.php
	@author			Llewellyn van der Merwe <https://www.vdm.io/>	
	@copyright		Copyright (C) 2015. All Rights Reserved
	@license		GNU/GPL Version 2 or later - http://www.gnu.org/licenses/gpl-2.0.html 

	A sermon distributor that links to Dropbox. 

/----------------------------------------------------------------------------------------------------------------------------------*/
namespace TrueChristianChurch\Component\Sermondistributor\Administrator\Controller;

use Joomla\CMS\Factory;
use Joomla\CMS\Language\Text;
use Joomla\CMS\MVC\Controller\AdminController;
use Joomla\Utilities\ArrayHelper;
use Joomla\CMS\Router\Route;
use Joomla\CMS\Session\Session;
use TrueChristianChurch\Component\Sermondistributor\Administrator\Helper\SermondistributorHelper;
use TrueChristianChurch\Joomla\Utilities\ArrayHelper as UtilitiesArrayHelper;
use TrueChristianChurch\Joomla\Utilities\ObjectHelper;

// No direct access to this file
\defined('_JEXEC') or die;

/**
 * External_sources Admin Controller
 *
 * @since  1.6
 */
class External_sourcesController extends AdminController
{
	/**
	 * The prefix to use with controller messages.
	 *
	 * @var    string
	 * @since  1.6
	 */
	protected $text_prefix = 'COM_SERMONDISTRIBUTOR_EXTERNAL_SOURCES';

	/**
	 * Proxy for getModel.
	 *
	 * @param   string  $name    The model name. Optional.
	 * @param   string  $prefix  The class prefix. Optional.
	 * @param   array   $config  Configuration array for model. Optional.
	 *
	 * @return  \Joomla\CMS\MVC\Model\BaseDatabaseModel
	 *
	 * @since   1.6
	 */
	public function getModel($name = 'External_source', $prefix = 'Administrator', $config = ['ignore_request' => true])
	{
		return parent::getModel($name, $prefix, $config);
	}

	public function exportData()
	{
		// Check for request forgeries
		Session::checkToken() or die(Text::_('JINVALID_TOKEN'));
		// check if export is allowed for this user.
		$user = Factory::getApplication()->getIdentity();
		if ($user->authorise('external_source.export', 'com_sermondistributor') && $user->authorise('core.export', 'com_sermondistributor'))
		{
			// Get the input
			$input = Factory::getApplication()->input;
			$pks = $input->post->get('cid', array(), 'array');
			// Sanitize the input
			$pks = ArrayHelper::toInteger($pks);
			// Get the model
			$model = $this->getModel('External_sources');
			// get the data to export
			$data = $model->getExportData($pks);
			if (UtilitiesArrayHelper::check($data))
			{
				// now set the data to the spreadsheet
				$date = Factory::getDate();
				SermondistributorHelper::xls($data,'External_sources_'.$date->format('jS_F_Y'),'External sources exported ('.$date->format('jS F, Y').')','external sources');
			}
		}
		// Redirect to the list screen with error.
		$message = Text::_('COM_SERMONDISTRIBUTOR_EXPORT_FAILED');
		$this->setRedirect(Route::_('index.php?option=com_sermondistributor&view=external_sources', false), $message, 'error');
		return;
	}


	public function importData()
	{
		// Check for request forgeries
		Session::checkToken() or die(Text::_('JINVALID_TOKEN'));
		// check if import is allowed for this user.
		$user = Factory::getApplication()->getIdentity();
		if ($user->authorise('external_source.import', 'com_sermondistributor') && $user->authorise('core.import', 'com_sermondistributor'))
		{
			// Get the import model
			$model = $this->getModel('External_sources');
			// get the headers to import
			$headers = $model->getExImPortHeaders();
			if (ObjectHelper::check($headers))
			{
				// Load headers to session.
				$session = Factory::getSession();
				$headers = json_encode($headers);
				$session->set('external_source_VDM_IMPORTHEADERS', $headers);
				$session->set('backto_VDM_IMPORT', 'external_sources');
				$session->set('dataType_VDM_IMPORTINTO', 'external_source');
				// Redirect to import view.
				$message = Text::_('COM_SERMONDISTRIBUTOR_IMPORT_SELECT_FILE_FOR_EXTERNAL_SOURCES');
				$this->setRedirect(Route::_('index.php?option=com_sermondistributor&view=import', false), $message);
				return;
			}
		}
		// Redirect to the list screen with error.
		$message = Text::_('COM_SERMONDISTRIBUTOR_IMPORT_FAILED');
		$this->setRedirect(Route::_('index.php?option=com_sermondistributor&view=external_sources', false), $message, 'error');
		return;
	}
}