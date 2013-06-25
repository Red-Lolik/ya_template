<?php
/**
 * @package     Joomla.Site
 * @subpackage  Layout
 *
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;?>
<?php
// Create a shortcut for params.
$params = $this->item->params;
JHtml::addIncludePath(JPATH_COMPONENT.'/helpers/html');
$canEdit = $this->item->params->get('access-edit');
JHtml::_('behavior.tooltip');
JHtml::_('behavior.framework');
?>
<?php if ($this->item->state == 0) : ?>
	<span class="label label-warning"><?php echo JText::_('JUNPUBLISHED'); ?></span>
<?php endif; ?>

<?php echo JLayoutHelper::render('joomla.content.blog_style_default_item_title', $this->item); ?>

<?php echo JLayoutHelper::render('joomla.content.icons', array('params' => $params, 'item' => $this->item, 'print' => false)); ?>

<?php echo JLayoutHelper::render('joomla.content.content_intro_image', $this->item); ?>

<?php //echo $this->item->event->afterDisplayTitle; ?>


<?php echo $this->item->event->beforeDisplayContent; ?>
<a href="<?php echo json_decode($this->item->urls)->urla;?>">
	<?php echo $this->item->introtext;?>
	</a>
	<a href="<?php echo json_decode($this->item->urls)->urla;?>" class="rounded">
		<?php echo json_decode($this->item->urls)->urlatext;?>
	</a>

<?php if ($this->item->state == 0) : ?>
</div>
<?php endif; ?>

<?php echo $this->item->event->afterDisplayContent; ?>
