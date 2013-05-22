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
<?php foreach ($list as $item) : ?>

	<div class="slide<?php echo $moduleclass_sfx; ?>">
		<div id="article-Visual">
			<h<?php echo $item_heading; ?>>
				<?php if ($params->get('link_titles') == 1) : ?>
					<a class="mod-articles-category-title <?php echo $item->active; ?>" href="<?php echo $item->link; ?>">
						<?php echo $item->title; ?>
						<?php if ($item->displayHits) :?>
							<span class="mod-articles-category-hits">(<?php echo $item->displayHits; ?>)  </span>
						<?php endif; ?>
					</a>
				<?php else :?>
					<?php echo $item->title; ?>
						<?php if ($item->displayHits) :?>
							<span class="mod-articles-category-hits">(<?php echo $item->displayHits; ?>)  </span>
						<?php endif; ?>
						</a>
				<?php endif; ?>
			</h<?php echo $item_heading; ?>>

			<?php if ($item->displayDate) : ?>
				<span class="mod-articles-category-date"><?php echo $item->displayDate; ?></span>
			<?php endif; ?>

			<a class="mod-articles-category-cover <?php echo $item->active; ?>" href="<?php echo $item->link; ?>">
				<img src="/<?php echo json_decode($item->images)->image_fulltext; ?>">
			</a>

			<?php echo $item->introtext; // Содержимое ?>

			<?php //echo "<!-- "; var_dump($item); echo " -->"; ?>

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
	</div>
<?php endforeach; ?>