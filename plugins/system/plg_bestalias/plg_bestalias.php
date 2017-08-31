<?php
/**
 * Best Alias -  plugin is designed for instant transfer of title to the alias.
 *
 * @version 1.0
 * @author Sergey Dima Kuprijanov (ageent.ua@gmail.com)
 * @copyright (C) 2010 by Dima Kuprijanov (http://www.ageent.ru)
 * @license GNU/GPL: http://www.gnu.org/copyleft/gpl.html
 **/
(defined('_VALID_MOS') OR defined('_JEXEC')) or die('Direct Access to this location is not allowed.');
jimport('joomla.html.parameter');
if (defined('JPATH_ROOT') && defined('JPATH_LIBRARIES')) {
    $mainframe = JFactory::getApplication();
    $mainframe->registerEvent('onAfterRoute', 'plgSystemAgeent');
} 


function plgSystemAgeent()
{
        $mainframe = JFactory::getApplication();
        $document = & JFactory::getDocument();
        $plugin =& JPluginHelper::getPlugin('system', 'plg_bestalias');
        $params = new JParameter( $plugin->params );

        $lang = JComponentHelper::getParams('com_languages');
        $lang=$lang->get("site", 'en-GB');
        if(!empty($lang)) {
            $lang=substr($lang,0,2);
        } else {
            $lang="en";
        }
        $document = & JFactory::getDocument();
        if ($mainframe->isAdmin()) {
            $document->addScript('http://www.google.com/jsapi');
            $document->addScript(JURI::root() . 'plugins/system/plg_bestalias/jquery/joker_ageent.js');
            $on = $params->get("on_or_off");
            if($on==1) {
                $document->addScriptDeclaration(' var source_lang_best_alias="'.$lang.'" ');
                $document->addScript(JURI::root() . 'plugins/system/plg_bestalias/jquery/ajax_translate.js');  
            } else {
                $document->addScriptDeclaration(' var source_lang_best_alias=""; ');
                $document->addScript(JURI::root() . 'plugins/system/plg_bestalias/jquery/standart.js');  
            }
             
        }
} 
?>
