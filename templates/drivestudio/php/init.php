<?php
/**
 * J!Blank Template for Joomla by JBlank.pro (JBZoo.com)
 *
 * @package    JBlank
 * @author     SmetDenis <admin@jbzoo.com>
 * @copyright  Copyright (c) JBlank.pro
 * @license    http://www.gnu.org/licenses/gpl.html GNU/GPL
 * @link       http://jblank.pro/ JBlank project page
 */

defined('_JEXEC') or die;


// load libs
!version_compare(PHP_VERSION, '5.3.10', '=>') or die('Your host needs to use PHP 5.3.10 or higher to run JBlank Template');
require_once dirname(__FILE__) . '/libs/template.php';

/************************* runtime configurations *********************************************************************/
$tpl = JBlankTemplate::getInstance();
$tpl

    ->css(array(
        'loader.css',
        'https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i&amp;subset=cyrillic',
        'https://fonts.googleapis.com/css?family=Roboto&amp;subset=cyrillic',
        'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css',
        'slick/slick.css',
        'slick/slick-theme.css',
        'common.css',
        'styles.css',
        'responsive.css',
        'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.20/jquery.fancybox.min.css',
    ))

    // include JavaScript files
    ->js(array(
        // '//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js', // any external lib (you can use http:// or https:// urls)
        // 'libs/jquery-1.x.min.js', // your own local lib
        //'template.js',
    ))

    // exclude css files from system or components (experimental!)
    ->excludeCSS(array(
        // 'regex pattern or filename',
        // 'jbzoo\.css',
    ))

    // exclude JS files from system or components (experimental!)
    ->excludeJS(array(
        // 'regex pattern or filename',
        'mootools',             // remove Mootools lib
        'media\/jui\/js',       // remove jQuery lib
        'media\/system\/js',    // remove system libs

        /*
         * unset($this->_scripts[JURI::root(true).'/media/jui/js/jquery.min.js']);
unset($this->_scripts[JURI::root(true).'/media/jui/js/jquery-noconflict.js']);
unset($this->_scripts[JURI::root(true).'/media/jui/js/jquery-migrate.min.js']);
unset($this->_scripts[JURI::root(true).'/media/system/js/caption.js']);
         *
         *  */
    ))

    // set custom generator
    ->generator('')// null for disable

    // set HTML5 mode (for <head> tag)
    ->html5(true)

    // add custom meta tags
    ->meta(array(
        // template customization
        '<meta http-equiv="X-UA-Compatible" content="IE=edge">',
        '<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">',
        '<link rel="apple-touch-icon" sizes="57x57" href="images/favicon/apple-icon-57x57.png">',
        '<link rel="apple-touch-icon" sizes="60x60" href="images/favicon/apple-icon-60x60.png">',
        '<link rel="apple-touch-icon" sizes="72x72" href="images/favicon/apple-icon-72x72.png">',
        '<link rel="apple-touch-icon" sizes="76x76" href="images/favicon/apple-icon-76x76.png">',
        '<link rel="apple-touch-icon" sizes="114x114" href="images/favicon/apple-icon-114x114.png">',
        '<link rel="apple-touch-icon" sizes="120x120" href="images/favicon/apple-icon-120x120.png">',
        '<link rel="apple-touch-icon" sizes="144x144" href="images/favicon/apple-icon-144x144.png">',
        '<link rel="apple-touch-icon" sizes="152x152" href="images/favicon/apple-icon-152x152.png">',
        '<link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-icon-180x180.png">',
        '<link rel="icon" type="image/png" sizes="192x192"  href="images/favicon/android-icon-192x192.png">',
        '<link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">',
        '<link rel="icon" type="image/png" sizes="96x96" href="images/favicon/favicon-96x96.png">',
        '<link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">',
        '<link rel="manifest" href="images/favicon/manifest.json">',
        '<meta name="msapplication-TileColor" content="#ffffff">',
        '<meta name="msapplication-TileImage" content="images/favicon/ms-icon-144x144.png">',
        '<meta name="theme-color" content="#ffffff">',
        '<link href="' . $tpl->baseurl . '" rel="canonical" />',

    ));

/************************* your php code below this line **************************************************************/

// mobile detect using (just for example!)
if ($tpl->isMobile()) {
    $tpl->css('media-mobile.less'); // css only for mobiles

} elseif ($tpl->isTablet()) {
    $tpl->css('media-tablet.less'); // css only for tablets
}

// USE IT ON YOUR OWN --> RISK <-- THIS IS EXPERIMENTAL FEATURES!
// After that all assets files will be included
/*
$tpl
    // merge css with compress (second arg)
    ->merge('css', true)
    // merge js with compress (second arg)
    ->merge('js', true);
*/
