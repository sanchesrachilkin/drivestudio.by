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

// Output as HTML5
$this->setHtml5(true);


if (isset($this->_script['text/javascript']))
{
    $this->_script['text/javascript'] = preg_replace('%jQuery\(window\)\.on\(\'load\',\s*function\(\)\s*{\s*new\s*JCaption\(\'img.caption\'\);\s*}\);\s*%', '', $this->_script['text/javascript']); //ищем и заменяем наш скрипт на дырку от бублика
    if (empty($this->_script['text/javascript']))
        unset($this->_script['text/javascript']); //если кроме нашего скрипта ничего нет, то убираем тег script
}



// init $tpl helper
require dirname(__FILE__) . '/php/init.php';
?><?php echo $tpl->renderHTML(); ?>
<head>
    <jdoc:include type="head" />
    <script>
        window.onload = function() {
            document.body.classList.add('loaded');
        };
    </script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<noscript>
    <div class="noscript">
    <span class="noscript__message">
        Ошибка! Ваш браузер не поддерживает JavaScript!<br>
        <a href="https://yandex.ru/support/common/browsers-settings/browsers-java-js-settings.html" target="_blank" class="button_default">Подробнее</a>
    </span>
    </div>
</noscript>
<div class="wrapper">
    <?php if ($this->countModules('header')) : ?>
    <header class="header">
        <div class="section_line top">
            <div class="color"></div>
            <div class="color"></div>
            <div class="color"></div>
            <div class="color"></div>
        </div>

        <div class="container header__container">
            <div class="row header__row">
                <jdoc:include type="modules" name="header" />
            </div>
        </div>
        <div class="section_line bottom">
            <div class="color"></div>
            <div class="color"></div>
            <div class="color"></div>
            <div class="color"></div>
        </div>
    </header>
    <?php endif; ?>


    <jdoc:include type="modules" name="navigation" />

    <div class="content">

        <div class="container">
            <?php if ($this->countModules('breadcrumbs')) : ?>
                <jdoc:include type="modules" name="breadcrumbs" />
            <?php endif; ?>
            <div class="row content__row">
            <?php if ($this->countModules('left')) : ?>
                <div class="col-md-3 content_menu__box">
                    <jdoc:include type="modules" name="left" />
                </div>
                <div class="col-md-9">
            <?php else : ?>
                <div class="col-md-12">
            <?php endif; ?>
                    <jdoc:include type="component" />
                </div>
            </div>
        </div>

        <?php if ($this->countModules('content')) : ?>
        <jdoc:include type="modules" name="content" />
        <?php endif; ?>
    </div>

        <?php if ($this->countModules('footer')) : ?>
            <jdoc:include type="modules" name="footer" />
        <?php endif; ?>
</div>
<div class="loader">
    <div class="cssload-thecube">
        <div class="cssload-cube cssload-c1"></div>
        <div class="cssload-cube cssload-c2"></div>
        <div class="cssload-cube cssload-c4"></div>
        <div class="cssload-cube cssload-c3"></div>
    </div>
</div>
<div class="burger_button">
    <div class="burger_button__icon">
        <span class="burger_button__icon__line"></span>
        <span class="burger_button__icon__line"></span>
        <span class="burger_button__icon__line"></span>
    </div>
</div>
<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="/templates/drivestudio/js/libs/libs.min.js"></script>
<script src="/templates/drivestudio/js/template.js"></script>




</body>
</html>
