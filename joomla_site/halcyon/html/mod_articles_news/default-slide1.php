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

<?php foreach ($list as $item) : ?>
	<div class="res-blocks">
		<?php require JModuleHelper::getLayoutPath('mod_articles_news', '_item-slide1'); ?>
	</div>
<?php endforeach; ?>

