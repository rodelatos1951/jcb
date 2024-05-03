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

	@version		4.0.x
	@created		22nd October, 2015
	@package		Sermon Distributor
	@subpackage		Schema.php
	@author			Llewellyn van der Merwe <https://www.vdm.io/>	
	@copyright		Copyright (C) 2015. All Rights Reserved
	@license		GNU/GPL Version 2 or later - http://www.gnu.org/licenses/gpl-2.0.html 

	A sermon distributor that links to Dropbox. 

/----------------------------------------------------------------------------------------------------------------------------------*/

namespace TrueChristianChurch\Joomla\SermonDistributor\Table;


use TrueChristianChurch\Joomla\SermonDistributor\Table;
use TrueChristianChurch\Joomla\Interfaces\SchemaInterface;
use TrueChristianChurch\Joomla\Abstraction\Schema as ExtendingSchema;


/**
 * SermonDistributor Tables Schema
 * 
 * @since 3.0.8
 */
final class Schema extends ExtendingSchema implements SchemaInterface
{
	/**
	 * Constructor.
	 *
	 * @param Table   $table   The Table Class.
	 *
	 * @since 3.0.8
	 */
	public function __construct(?Table $table = null)
	{
		$table ??= new Table;

		parent::__construct($table);
	}

	/**
	 * Get the targeted component code
	 *
	 * @return  string
	 * @since 3.0.8
	 */
	protected function getCode(): string
	{
		return 'sermondistributor';
	}
}

