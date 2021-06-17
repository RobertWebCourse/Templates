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
	<div class="pl_block">
		<a href="<?php echo $item->link; ?>">
			<?php require JModuleHelper::getLayoutPath('mod_articles_news', '_item-slide2'); ?>
		</a>
	</div>
<?php endforeach; ?>




