<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_content
 *
 * @copyright   Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>

<ol class="nav nav-tabs nav-stacked">
	<?php foreach ($this->link_items as &$item) : ?>
		<a href="<?php echo JRoute::_(ContentHelperRoute::getArticleRoute($item->slug, $item->catid, $item->language)); ?>">
			<li>
				<i class="fa fa-chevron-right"></i>
				<?php echo $item->title; ?>
			</li>
		</a>
	<?php endforeach; ?>
</ol>
