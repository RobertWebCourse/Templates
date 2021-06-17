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
<div id="our-motivation__block">
	<?php foreach ($list as $item) : ?>
		<div class="our-motivation__blocks">
			<?php require JModuleHelper::getLayoutPath('mod_articles_news', '_item'); ?>
		</div>
	<?php endforeach; ?>
</div>
