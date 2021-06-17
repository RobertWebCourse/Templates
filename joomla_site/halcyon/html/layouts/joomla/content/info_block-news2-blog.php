<?php
/**
 * @package     Joomla.Site
 * @subpackage  Layout
 *
 * @copyright   Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$blockPosition = $displayData['params']->get('info_block_position', 0);
// print_r($displayData['item']);
// print_r($displayData['params']);


?>
	<dl class="article-info-blog muted">
		<?php if ($displayData['position'] === 'above' && ($blockPosition == 0 || $blockPosition == 2)
				|| $displayData['position'] === 'below' && ($blockPosition == 1)
				) : ?>
			<div class="article-params">
				<?php if ($displayData['params']->get('show_publish_date')) : ?>
					<p><i class="fa fa-calendar"></i><?php echo $displayData['item']->publish_up; ?></p>
				<?php endif; ?>

				<?php if ($displayData['params']->get('show_category')) : ?>
					<p><i class="fa fa-book" aria-hidden="true"></i><?php echo $displayData['item']->category_title; ?></p>
				<?php endif; ?>

				<?php if ($displayData['params']->get('show_author') && !empty($displayData['item']->author )) : ?>
					<p><i class="fa fa-user" aria-hidden="true"></i><?php echo $displayData['item']->author; ?></p>
				<?php endif; ?>

				<?php if ($displayData['params']->get('show_parent_category') && !empty($displayData['item']->parent_slug)) : ?>
					<p><i class="fa fa-book-reader" aria-hidden="true"></i><?php echo $displayData['item']->parent_slug; ?></p>
				<?php endif; ?>

				<?php if ($displayData['params']->get('show_associations')) : ?>
					<p><?php echo $this->sublayout('associations', $displayData); ?></p>
				<?php endif; ?>
			</div>

		<?php endif; ?>

		<?php if ($displayData['position'] === 'above' && ($blockPosition == 0)
				|| $displayData['position'] === 'below' && ($blockPosition == 1 || $blockPosition == 2)
				) : ?>
			<?php if ($displayData['params']->get('show_create_date')) : ?>
				<p><p><i class="fa fa-calendar-day" aria-hidden="true"></i><?php echo $displayData['item']->created; ?></p>
			<?php endif; ?>

			<?php if ($displayData['params']->get('show_modify_date')) : ?>
				<p><i class="fa fa-calendar-plus" aria-hidden="true"></i><?php echo $displayData['item']->modified; ?></p>
			<?php endif; ?>

			<?php if ($displayData['params']->get('show_hits')) : ?>
				<p><i class="fa fa-eye" aria-hidden="true"></i><span><?php echo $displayData['item']->hits; ?></span></p>
			<?php endif; ?>
		<?php endif; ?>
		<hr>
	</dl>
