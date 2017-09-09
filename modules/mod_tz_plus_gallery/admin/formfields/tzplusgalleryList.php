<?php
/*------------------------------------------------------------------------

# TZ Extension

# ------------------------------------------------------------------------

# author    TuanNATemPlaza

# copyright Copyright (C) 2012 templaza.com. All Rights Reserved.

# @license - http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL

# Websites: http://www.templaza.com

# Technical Support:  Forum - http://templaza.com/Forum

-------------------------------------------------------------------------*/
defined('JPATH_BASE') or die;

JFormHelper::loadFieldClass('list');

class JFormFieldTzPlusGalleryList extends JFormFieldList
{
    protected $type = 'TzPlusGalleryList';
    protected function  getInput()
    {
        $element = $this->element;
        $doc = JFactory::getDocument();
        $doc->addStyleDeclaration('

        ');



            $doc->addScriptDeclaration('
//            (function($){
                jQuery(document).ready(function(){
                    jQuery(\'#' . $this->id . '\').on(\'change\',function(){
                        var value_' . $this->fieldname . ' = jQuery(this).val();
                        jQuery(\'.tz_type_' . $this->fieldname . '\').each(function(){
                            if(jQuery(this).hasClass(value_' . $element["name"] . ')){
                                jQuery(this).parents(\'.control-group\').first().css("display","block");
                            }else{
                                jQuery(this).parents(\'.control-group\').first().css("display","none");
                            }
                        });
                    });
                        jQuery(\'#' . $this->id . '\').trigger(\'change\');
                });
//            })(jQuery);
            ');

        return parent::getInput();
    }

}