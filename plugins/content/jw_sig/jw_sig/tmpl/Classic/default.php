<?php
/**
 * @version		3.0.1
 * @package		Simple Image Gallery (plugin)
 * @author    	JoomlaWorks - http://www.joomlaworks.net
 * @copyright	Copyright (c) 2006 - 2014 JoomlaWorks Ltd. All rights reserved.
 * @license		GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
 */

// no direct access
defined('_JEXEC') or die('Restricted access');

?>

<div id="sigFreeId<?php echo $gal_id; ?>" class="row photos_main__row">
    <?php foreach($gallery as $count=>$photo): ?>
    <div class="col-md-3 col-sm-4 col-xs-6 photos_main__col">
        <div class="photos_main__img">
            <a href="<?php echo $photo->sourceImageFilePath; ?>" class="sigFreeLink<?php echo $extraClass; ?>" style="width:<?php echo $photo->width; ?>px;height:<?php echo $photo->height; ?>px;" data-fancybox="<?php echo $relName; ?>[gallery<?php echo $gal_id; ?>]" title="<?php echo JText::_('JW_PLG_SIG_YOU_ARE_VIEWING').' '.$photo->filename; ?>" target="_blank"<?php echo $customLinkAttributes; ?>>
                <img class="sigFreeImg" src="<?php echo $transparent; ?>" alt="<?php echo JText::_('JW_PLG_SIG_CLICK_TO_ENLARGE_IMAGE').' '.$photo->filename; ?>" title="<?php echo JText::_('JW_PLG_SIG_CLICK_TO_ENLARGE_IMAGE').' '.$photo->filename; ?>" style="width:<?php echo $photo->width; ?>;height:<?php echo $photo->height; ?>;background-image:url(<?php echo $photo->thumbImageFilePath; ?>);" />
            </a>
        </div>
    </div>
    <?php endforeach; ?>
</div>

