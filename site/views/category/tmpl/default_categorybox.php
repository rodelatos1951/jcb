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

	@version		3.0.x
	@created		22nd October, 2015
	@package		Sermon Distributor
	@subpackage		default_categorybox.php
	@author			Llewellyn van der Merwe <https://www.vdm.io/>	
	@copyright		Copyright (C) 2015. All Rights Reserved
	@license		GNU/GPL Version 2 or later - http://www.gnu.org/licenses/gpl-2.0.html 

	A sermon distributor that links to Dropbox. 

/----------------------------------------------------------------------------------------------------------------------------------*/

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

use Joomla\CMS\Language\Text;
use Joomla\CMS\HTML\HTMLHelper as Html;
use Joomla\CMS\Layout\LayoutHelper;

// build the list class
$style = $this->params->get('category_list_style');
switch ($style)
{
	case 1:
		// Lines
		$listClass = ' uk-list-line';
	break;
	case 2:
		// Striped
		$listClass = ' uk-list-striped';
	break;
	case 3:
		// Spaced
		$listClass = ' uk-list-space';
	break;
	default:
		// Plain
		$listClass = '';
	break;
}

// build the contrast text option
$contrast = $this->params->get('category_box_contrast');
$contrastClass = '';
if ($contrast)
{
	$contrastClass = 'uk-text-contrast';
}

// set Panal Size
$mediumMain = '1-4';
if (($this->params->get('category_sermon_count') || $this->params->get('category_sermons_download_counter'))
	&& ($this->params->get('category_desc') && $this->category->description))
{
	$mediumDesc = '2-4';
	$mediumMid = '1-4';
}
elseif (($this->params->get('category_sermon_count') || $this->params->get('category_sermons_download_counter')) 
	|| ($this->params->get('category_desc') && $this->category->description))
{
	$mediumDesc = '3-4';
	$mediumMid = '3-4';
}
elseif (!$this->params->get('category_icon'))
{
	$mediumMain = '1-1';
}

?>
<div class="uk-block uk-block-primary">
	<div class="uk-container">
	<h1 class="<?php echo $contrastClass; ?>"><?php echo $this->category->name; ?></h1>
	<div class="uk-grid" data-uk-grid-margin="{target:'.uk-panel'}">
	<div class="uk-width-medium-<?php echo $mediumMain; ?>">
		<div class="uk-panel">
		<?php if ($this->params->get('category_hits')): ?>
			<?php
				$hits_state	= ($this->category->hits > 0) ? true:false;
				$badge_class	= ($hits_state) ? 'uk-badge-success':'uk-badge-warning';
				$badge_icon	= ($hits_state) ? 'check-circle':'minus-circle';
			?>
			<div class="uk-panel-badge uk-badge <?php echo $badge_class; ?>">
				<i class="uk-icon-<?php echo $badge_icon; ?>"></i>
				<?php echo Text::_('COM_SERMONDISTRIBUTOR_HITS'); ?>: <?php echo $this->category->hits; ?>
			</div>
		<?php endif ;?>
		<?php if ($this->params->get('category_icon')): ?>
			<?php $this->category->icon = (isset($this->category->icon) && $this->category->icon) ? $this->category->icon : $this->params->get('category_default_icon'); ?>
			<?php if ($this->category->icon): ?>
				<img class="uk-thumbnail uk-thumbnail-expand" src="<?php echo $this->category->icon; ?>" alt="<?php echo $this->category->name; ?>">
			<?php endif; ?>
		<?php endif; ?>
		</div>
	</div>
	<?php if ($this->params->get('category_sermon_count') || $this->params->get('category_sermons_download_counter')): ?>
		<div class="uk-width-medium-<?php echo $mediumMid; ?>">
			<div class="uk-panel">
				<ul class="uk-list<?php echo $listClass; ?>">
					<?php if ($this->params->get('category_sermon_count')): ?>
						<li class="<?php echo $contrastClass; ?>"><?php echo Text::_('COM_SERMONDISTRIBUTOR_SERMON_COUNT'); ?>: <?php echo $this->sermonTotal; ?></li>
					<?php endif; ?>
					<?php if ($this->params->get('category_sermons_download_counter')): ?>
						<li class="<?php echo $contrastClass; ?>"><?php echo Text::_('COM_SERMONDISTRIBUTOR_TOTAL_DOWNLOADS'); ?>: <?php echo $this->downloadTotal; ?></li>
					<?php endif; ?>
				</ul>
			</div>
		</div>
	<?php endif; ?>
	<?php if ($this->params->get('category_desc') && $this->category->description): ?>
		<div class="uk-width-medium-<?php echo $mediumDesc; ?>">
			<div class="uk-panel <?php echo $contrastClass; ?>">
				<?php echo $this->category->description; ?>
			</div>
		</div>
	<?php endif; ?>
	</div>
	</div>
</div>
