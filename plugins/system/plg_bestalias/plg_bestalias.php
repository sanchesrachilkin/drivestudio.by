<?php
// No direct access
defined('_JEXEC') or die;
jimport('joomla.plugin.plugin');

class plgSystemPlg_bestalias extends JPlugin {
    function onBeforeRender() {
        $doc = JFactory::getDocument();
        $mainframe = JFactory::getApplication();
        if ($mainframe->isAdmin()) {
            $doc->addScript(JURI::root() . 'plugins/system/plg_bestalias/jquery/alias.js');
        }
        return true;
    }
}

























