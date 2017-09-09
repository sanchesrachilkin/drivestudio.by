<?php
/**
 * JUNewsUltra Pro
 *
 * @version          6.x
 * @package          UNewsUltra Pro
 * @author           Denys D. Nosov (denys@joomla-ua.org)
 * @copyright    (C) 2007-2017 by Denys D. Nosov (http://joomla-ua.org)
 * @license          GNU/GPL: http://www.gnu.org/copyleft/gpl.html
 *
 **/

/******************* PARAMS (update 05.12.2016) ************
 *
 * $params->get('moduleclass_sfx') - module class suffix
 *
 * $item->link           - article link for [href="..."] attribute
 * $item->title          - title
 * $item->title_alt      - for attribute title or alt
 *
 * $item->cattitle       - category title
 * $item->catlink        - category link for [href="..."] attribute
 *
 * $item->image          - display image thumb
 * $item->imagelink      - image thumb link for [src="..."] attribute
 * $item->imagesource    - raw image source (original image)
 *
 * $item->sourcetext        - display raw intro and fulltext
 *
 * $item->introtext      - display introtext
 * $item->fulltext       - display fulltext
 *
 * $item->author         - display author or created by alias
 * $item->created_by_alias - display created by alias (author)
 *
 * $item->sqldate        - raw date [display format: 0000-00-00 00:00:00]
 * $item->date           - display date & time with date format
 * $item->df_d           - display day from date
 * $item->df_m           - display mounth from date
 * $item->df_y           - display year from date
 *
 * $item->hits           - display hits
 *
 * $item->rating         - display rating with stars
 *
 * $item->comments        - display comments couner
 * $item->commentslink   - comment link for [href="..."] attribute
 * $item->commentstext   - display comments text
 * $item->commentscount  - comments couner (alias)
 *
 * $item->readmore       - display 'Read more...' or other text
 * $item->rmtext         - display 'Read more...' or other text
 *
 ************************************************************/

defined('_JEXEC') or die('Restricted access');

?>




<div class="content_page_menu">
    <?php if($module->title): ?>
        <div class="content_page_menu__header"><?php echo $module->title; ?></div>
    <?php endif; ?>
    <ul class="content_page_menu__body">
        <?php foreach ($list as $item) : ?>
<!--<pre>-->
<!--            --><?php //print_r($item); ?>
<!--    </pre>-->

               <li> <a href="<?php echo $item->link; ?>"><?php echo $item->title; ?></a></li>
        <?php endforeach; ?>
    </ul>
</div>

