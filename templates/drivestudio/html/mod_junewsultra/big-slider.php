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
<section class="big_slider__section">
    <div class="big_slider load_slider">
        <?php foreach ($list as $item) : ?>

            <div class="big_slider__item">
                <div class="big_slider__item__cover">
                    <img src="<?php echo $item->imagesource; ?>" alt="<?php echo $item->title; ?>">
                    <div class="big_slider__item__cover__text">
                        <div class="container">
                            <div class="big_slider__item__cover__text__box">
                                <div class="big_slider__item__cover__text__table">
                                    <h3 class="big_slider__item__cover__text__header"><?php echo $item->title;?></h3>
                                    <div class="big_slider__item__cover__text__description">
                                        <?php echo $item->introtext; ?>
                                    </div>
                                    <a href="<?php echo $item->link; ?>" class="big_slider__item__cover__text__button button_default">Узнать подробнее</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <?php endforeach; ?>

    </div>
    <div class="section_line bottom">
        <div class="color"></div>
        <div class="color"></div>
        <div class="color"></div>
        <div class="color"></div>
    </div>
</section>

