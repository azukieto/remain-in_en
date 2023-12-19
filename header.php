<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="format-detection" content="telephone=no"/>

    <!-- css -->
    <link href="<?= get_stylesheet_directory_uri() ?>/assets/css/style.css" rel="stylesheet"/>

    <!-- vendor -->

    <?php wp_head(); ?>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-M929HRC');</script>
    <!-- End Google Tag Manager -->
    <?php
    $bodyClass = '';
    if (is_front_page()) {
        $bodyClass .= 'page-front';
    }
    ?>
</head>
<body id="body" <?php body_class( $bodyClass ); ?> data-src="<?= str_replace(HOST, '', get_stylesheet_directory_uri()) ?>">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M929HRC"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<a id="top"></a>
<div class="l-body-wrap">
    <header class="l-header">
        <div class="l-header__bar">
            <p class="l-header-logo"><a href="<?= home_url() ?>/"><img src="<?= get_stylesheet_directory_uri() ?>/assets/img/logo.svg" alt="Remain in"/></a></p>
            <ul class="l-header-language">
                <li><a href="https://www.remain-in.com/">JP</a></li>
                <li><a href="<?= home_url() ?>" class="is-current">EN</a></li>
            </ul>
            <div class="l-header-contact"><a href="<?= home_url() ?>/contact">CONTACT</a></div>
            <button class="l-header-menu">
                <div><span></span><span></span></div>
            </button>
        </div>
        <div class="l-header-drawer">
            <div class="l-header-drawer__bg"></div>
            <div class="l-header-drawer__wrap">
                <div class="l-header-drawer__container">
                    <nav class="l-header-drawer__nav">
                        <div class="l-header-drawer-nav-item"><a class="l-header-drawer-nav-item__link u-gradientIn" href="<?= home_url() ?>/"><span class="_en">Top</span></a></div>
                        <div class="l-header-drawer-nav-item"><a class="l-header-drawer-nav-item__link u-gradientIn" href="<?= home_url() ?>/who-we-are"><span class="_en">Who We Are</span></a></div>
                        <div class="l-header-drawer-nav-item">
                            <div class="l-header-drawer-nav-item__link js-drawer-nav-btn u-gradientIn"><span class="_en">BUSINESS</span><i class="c-btn-plus"></i></div>
                            <div class="l-header-drawer-nav-item__body">
                                <div class="l-header-drawer-nav-item__business">
                                    <ul>
                                        <li><a href="<?= home_url() ?>/business/marketing"><span class="_en">Re:Marketing</span></a></li>
                                        <li><a href="<?= home_url() ?>/business/branding"><span class="_en">Re:Branding</span></a></li>
                                        <!--<li><a href="<?= home_url() ?>/business/agency"><span class="_en">Re:Agency</span></a></li>-->
                                    </ul>
                                    <div class="_more"><a class="c-link-text" href="<?= home_url() ?>/business"><span class="c-link-text__en">VIEW ALL</span></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="l-header-drawer-nav-item"><a class="l-header-drawer-nav-item__link u-gradientIn" href="<?= home_url() ?>/member"><span class="_en">MEMBERS</span></a></div>
                        <div class="l-header-drawer-nav-item">
                            <div class="l-header-drawer-nav-item__link js-drawer-nav-btn u-gradientIn"><span class="_en">NEWS</span><i class="c-btn-plus"></i></div>
                            <div class="l-header-drawer-nav-item__body">
                                <div class="l-header-drawer-nav-item__news">
                                    <div class="l-header-drawer-nav-item__newsList">
                                        <div class="cm-list-news">

                                            <?php
                                            $args = [
                                                'post_type' => 'post',
                                                'paged' => 1,
                                                'posts_per_page' => 3,
                                            ];
                                            $wp_query = new WP_Query($args);
                                            ?>
                                            <?php if (have_posts()) : ?>
                                                <?php get_template_part('template/loop-post') ?>
                                            <?php endif; wp_reset_query(); ?>

                                        </div>
                                    </div>
                                    <div class="l-header-drawer-nav-item__newsMore"><a class="c-link-text" href="<?= home_url() ?>/news"><span class="c-link-text__en">VIEW ALL</span></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="l-header-drawer-nav-item"><a class="l-header-drawer-nav-item__link u-gradientIn" href="<?= home_url() ?>/recruit"><span class="_en">RECRUIT</span></a></div>
                        <div class="l-header-drawer-nav-item"><a class="l-header-drawer-nav-item__link u-gradientIn" href="<?= home_url() ?>/contact"><span class="_en">CONTACT</span></a></div>
                    </nav>

                    <ul class="l-header-drawer__language">
                        <li><a href="https://www.remain-in.com/">JP</a></li>
                        <li><a href="<?= home_url() ?>" class="is-current">EN</a></li>
                    </ul>
                    
                    <p class="l-header-drawer__info">Riviera Minami Aoyama Building A402, 3-3-3 Minami Aoyama,<br>Minato-ku, Tokyo 107-0062 Japan<br/><br/><a class="c-link-text" href="https://goo.gl/maps/oAdAV5dcoSYXejuA9" target="_blank"><span class="c-link-text__en">Google Map</span></a></p>
                    <p class="l-header-drawer__copy">Remain in, Inc.</p>
                </div>
            </div>
        </div>
    </header>
    <div id="smooth-wrapper">
        <div id="smooth-content">
            <main class="l-main" id="main">