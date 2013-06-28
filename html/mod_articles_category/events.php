<?php
/**
 * @package		Joomla.Site
 * @subpackage	mod_articles_category
 * @copyright	Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */
//TODO Сделать возможность использования на любых страницах сайта, т.е. с выводом либо картинки справа, либо с фоновой картинкой.
//В зависимости от того, какая ссылка указана (картинка превью или картинка полного текста материала).
//
// no direct access
defined('_JEXEC') or die;
?>
<div class="<?php echo $moduleclass_sfx; ?>">

<?php if ($module->showtitle) : ?>
	<h1><?php echo $module->title; ?></h1>
<?php endif; ?>
	
	<div class="slider">
	<?php foreach ($list as $item) : ?>

		<div class="slide">
			
			<?php if (json_decode($item->images)->image_fulltext) : ?>
				<div class="visualImg" style="background: url('<?php echo json_decode($item->images)->image_fulltext; ?>') no-repeat scroll center 0px transparent;"></div>
			<?php endif; ?>
			
			<div class="article-Visual">

				<?php if (json_decode($item->images)->image_intro) : ?>
					<img class="big_img" src="/ya/<?php echo json_decode($item->images)->image_intro; /*FIXME При выводе на продакшн удалить сегмент ya в начале строки!!!*/?>">
				<?php endif; ?>
				<?php if (json_decode($item->attribs)->show_title != '0') : ?>
					<h<?php echo $item_heading; ?>>
						<?php if ($params->get('link_titles') == 1) : ?>
							<a class="mod-articles-category-title <?php echo $item->active; ?>" href="<?php echo $item->link; ?>">
								<?php echo $item->title; ?>
							</a>
						<?php else :?>
							<?php echo $item->title; ?>
								</a>
						<?php endif; ?>
					</h<?php echo $item_heading; ?>>
				<?php endif; ?>

				<?php if ($item->displayDate) : ?>
					<span class="mod-articles-category-date"><?php echo $item->displayDate; ?></span>
				<?php endif; ?>

				<?php echo $item->introtext; // Содержимое ?>

				<?php if ($params->get('show_readmore')) :?>
					<p class="mod-articles-category-readmore">
						<a class="mod-articles-category-title <?php echo $item->active; ?>" href="<?php echo $item->link; ?>">
						<?php if ($item->params->get('access-view')== FALSE) :
								echo JText::_('MOD_ARTICLES_CATEGORY_REGISTER_TO_READ_MORE');
							elseif ($readmore = $item->alternative_readmore) :
								echo $readmore;
								echo JHtml::_('string.truncate', $item->title, $params->get('readmore_limit'));
							elseif ($params->get('show_readmore_title', 0) == 0) :
								echo JText::sprintf('MOD_ARTICLES_CATEGORY_READ_MORE_TITLE');
							else :
								echo JText::_('MOD_ARTICLES_CATEGORY_READ_MORE');
								echo JHtml::_('string.truncate', $item->title, $params->get('readmore_limit'));
							endif; ?>
						</a>
					</p>
				<?php endif; ?>

				<?php if ($item->displayCategoryTitle) :?>
					<span class="mod-articles-category-category">
						Смотреть все <?php echo $item->displayCategoryTitle; ?>
					</span>
				<?php endif; ?>
			</div>

			<?php if (json_decode($item->urls)->urla) : ?>
				<a <?php if (json_decode($item->urls)->targeta) : echo "target='_blank' "; endif; ?>href="<?php echo json_decode($item->urls)->urla;?>" class="visualImg"></a>
			<?php endif; ?>
				
		</div>
	<?php endforeach; ?>
	</div>
</div>