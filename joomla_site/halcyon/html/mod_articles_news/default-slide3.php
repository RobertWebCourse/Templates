<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_news
 *
 * @copyright   Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>
<div class="section-team__slider">
	<?php foreach ($list as $item) : ?>
		<div class="team-slide-block">
			<?php require JModuleHelper::getLayoutPath('mod_articles_news', '_item-slide3'); ?>
		</div>
	<?php endforeach; ?>
</div>




