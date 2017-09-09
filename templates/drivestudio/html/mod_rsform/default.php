<?php
/**
* @version 1.4.0
* @package RSform!Pro 1.4.0
* @copyright (C) 2007-2012 www.rsjoomla.com
* @license GPL, http://www.gnu.org/copyleft/gpl.html
*/

// no direct access
defined('_JEXEC') or die('Restricted access');
?>



<section class="application_form">
    <div class="section_line top">
        <div class="color"></div>
        <div class="color"></div>
        <div class="color"></div>
        <div class="color"></div>
    </div>
    <div class="rsform<?php echo $moduleclass_sfx; ?> application_form__bg" data-parallax="scroll" data-image-src="images/application_form_bg/bg.jpg">
        <div class="container application_form__container">
            <div class="application_form__box">
                <?php
                if ($module->showtitle) {
                    echo '<h2 class="application_form__header">' . $module->title . '</h2>';
                }
                ?>

                <?php echo RSFormProHelper::displayForm($formId, true); ?>
            </div>
        </div>
    </div>
    <div class="section_line bottom">
        <div class="color"></div>
        <div class="color"></div>
        <div class="color"></div>
        <div class="color"></div>
    </div>
</section>



