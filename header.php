<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="container" role="main">
    <div class="row ep-header-links">
        <div class="row servicelinks">
            <ul>
                <li>День/Ночь</li>
                <li>Спрятать пони</li>
            </ul>
        </div>
        <nav class="navbar-ep-main" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">EveryPony.ru</a>
                    <button type="button" class="navbar-toggle offcanvas-toggle pull-right" data-toggle="offcanvas"
                            data-target="#js-bootstrap-offcanvas" style="float:left;">
                        <span class="sr-only">Toggle navigation</span>
                        <span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                        </span>
                    </button>
                </div>
                <div class="navbar-offcanvas navbar-offcanvas-touch" id="js-bootstrap-offcanvas">
                    <ul class="nav navbar-nav">
                        <li><a href="//forum.everypony.ru">Форум</a></li>
                        <li><a href="//stories.everypony.ru">Рассказы</a></li>
                        <li><a href="//wiki.everypony.ru">Вики</a></li>
                        <li><a href="//tabun.everypony.ru">Табун</a></li>
                        <li><a href="//minecraft.everypony.ru">Майнкрафт</a></li>
                        <li><a href="//radio.everypony.ru">Радио</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <ul class="nav navbar-nav navbar-right hidden-sm">
                            <li><a href="https://twitter.com/everypony_ru" target="_blank"><i class="fa fa-twitter"
                                                                                              aria-hidden="true"></i></a>
                            </li>
                            <li><a href="<?php echo esc_url(home_url('/feed')); ?>" target="_blank"><i class="fa fa-rss"
                                                                                                       aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </ul>
                </div>
            </div>
        </nav>
    </div>


    <!--<div id="page" class="site">-->
    <!--	<a class="skip-link screen-reader-text" href="#content">-->
    <?php //esc_html_e( 'Skip to content', 'everypony-new' ); ?><!--</a>-->
    <!---->
    <!--	<header id="masthead" class="site-header" role="banner">-->
    <!--		--><?php //get_template_part( 'components/header/header', 'image' ); ?>
    <!---->
    <!--		--><?php //everypony_new_the_custom_logo(); ?>
    <!---->
    <!--		--><?php //get_template_part( 'components/navigation/navigation', 'top' ); ?>
    <!---->
    <!--	</header>-->
    <div id="content" class="site-content">
