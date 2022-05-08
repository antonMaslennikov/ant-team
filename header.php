<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>

	<?php
    if(is_single()) {
        $hreflang = get_post_meta(get_the_ID(), 'hreflang_meta', true);
        if ($hreflang) {
            ?>
            <link rel="alternate" href="<?= $hreflang ?>" hreflang="en"/>
        <?php
        }
        if (get_the_ID() == "4103") {
            ?>
            <link rel="alternate"
                  href="https://www.pathinteractive.com/blog/seo/what-does-it-mean-to-have-good-e-a-t/"
                  hreflang="en"/>
        <?php
        }
    }
    ?>

    <link rel="apple-touch-icon" sizes="57x57" href="/wp-content/themes/<?= get_template() ?>/assets/images/favicons/smaller-blue-flat@3x.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/wp-content/themes/<?= get_template() ?>/assets/images/favicons/smaller-blue-flat@3x.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/wp-content/themes/<?= get_template() ?>/assets/images/favicons/smaller-blue-flat@3x.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/wp-content/themes/<?= get_template() ?>/assets/images/favicons/smaller-blue-flat@3x.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/wp-content/themes/<?= get_template() ?>/assets/images/favicons/smaller-blue-flat@3x.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/wp-content/themes/<?= get_template() ?>/assets/images/favicons/smaller-blue-flat@3x.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/wp-content/themes/<?= get_template() ?>/assets/images/favicons/smaller-blue-flat@3x.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/wp-content/themes/<?= get_template() ?>/assets/images/favicons/smaller-blue-flat@3x.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/wp-content/themes/<?= get_template() ?>/assets/images/favicons/smaller-blue-flat@3x.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/wp-content/themes/<?= get_template() ?>/assets/images/favicons/smaller-blue-flat@3x.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/wp-content/themes/<?= get_template() ?>/assets/images/favicons/smaller-blue-flat@3x.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/wp-content/themes/<?= get_template() ?>/assets/images/favicons/smaller-blue-flat@3x.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/wp-content/themes/<?= get_template() ?>/assets/images/favicons/smaller-blue-flat@3x.png">
    <link rel="manifest" href="/wp-content/themes/<?= get_template() ?>/assets/images/favicons/manifest.json">

    <meta name="msapplication-TileColor" content="#8ed0ef">
    <meta name="msapplication-TileImage" content="/wp-content/themes/<?= get_template() ?>/assets/images/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#8ed0ef">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-127070389-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-127070389-1');
    </script>
</head>

<?php
    if (in_array(get_the_ID(), [2653, 2753, 3896, 3898])) {
        $bodyClass = 'page--singlePage';
    } elseif (is_singular('post')) {
        $bodyClass = 'page--article';
    }
?>

<body <?php body_class($bodyClass); ?>>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-NTK95NZ');</script>
    <!-- End Google Tag Manager -->

    <div class="page">
        <header <?php if (is_front_page()): ?>class="main-header"<?php endif; ?>>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="header-wrapper">

                            <a class="logo" href="/">
                                <?php if (is_front_page()): ?>
                                    <img class="logo--small" src="/wp-content/themes/<?= get_template() ?>/assets/images/logo_small.svg"><img class="logo--big" src="/wp-content/themes/<?= get_template() ?>/assets/images/logo_big.svg">
                                <?php else: ?>
                                    <img src="/wp-content/themes/<?= get_template() ?>/assets/images/logo_small.svg">
                                <?php endif; ?>
                            </a>

                            <?php get_template_part('template-parts/header-menu') ?>

                            <div class="search">
                                <div class="search__btn" id="search-btn"><span class="search__btn-text-1">Поиск</span><span class="search__btn-text-2">по сайту</span><img src="/wp-content/themes/<?= get_template() ?>/assets/images/loupe.svg"></div>
                                <form class="search__form" id="search-form" action="/blog/">
                                    <div class="form-ctrl search__input">
                                        <input type="text" name="s" placeholder="Поиск" value="<?php if(!empty($_GET['s'])){echo $_GET['s'];}?>">
                                        <button type="submit"><svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15.7066 13.29L12.7466 10.33C13.5266 9.25 13.9966 7.93 13.9966 6.5C13.9966 2.91 11.0866 0 7.49658 0C3.90658 0 0.996582 2.91 0.996582 6.5C0.996582 10.09 3.90658 13 7.49658 13C8.92658 13 10.2466 12.53 11.3266 11.74L14.2866 14.7C14.4666 14.89 14.7166 15 14.9966 15C15.5466 15 15.9966 14.55 15.9966 14C15.9966 13.72 15.8866 13.47 15.7066 13.29ZM2.99658 6.5C2.99658 4.01 5.00658 2 7.49658 2C9.98658 2 11.9966 4.01 11.9966 6.5C11.9966 8.99 9.98658 11 7.49658 11C5.00658 11 2.99658 8.99 2.99658 6.5Z" fill="#A9A5A0"/></svg></button>
                                    </div>
                                </form>
                            </div>

                            <div class="send-request"><a class="btn btn-small" id="send-request" data-fancybox href="#modal-order-form">Оставить заявку</a></div>

                            <div class="phone"><a class="phone__icon hidden-md" href="tel:78125092230"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M4.21551 10.0796C3.69068 9.27967 3.20311 8.42487 2.83928 7.57674C2.61058 7.04432 2.43877 6.50012 2.27247 5.95503C2.03819 5.18681 1.96647 4.20198 2.01378 3.51709C2.07139 2.68406 2.35149 2.04714 2.74978 1.53776C2.9913 1.22882 3.4631 0.770734 3.9208 0.45404C4.28688 0.201024 4.62671 0.0571234 4.96281 0.0138016C5.2928 -0.0280739 5.6255 0.0262196 5.91471 0.164722C6.44343 0.418233 6.8385 0.819842 7.17192 1.24075C7.49323 1.64564 7.75492 2.16035 7.81193 2.68275C7.87681 3.27578 7.74702 3.88299 7.31433 4.43369C7.14073 4.6539 6.89802 4.85749 6.63181 5.05999C6.28351 5.32429 5.6732 5.64882 5.60049 6.09512C5.50281 6.70113 5.98901 7.49663 6.64292 8.49515C6.65273 8.51017 6.66211 8.52457 6.6721 8.53977C7.32612 9.53769 7.86121 10.3012 8.45343 10.4503C8.89013 10.5602 9.42844 10.1251 9.80803 9.90819C10.0984 9.74259 10.3801 9.59918 10.6502 9.52619C11.3247 9.34497 11.931 9.46516 12.4476 9.75988C12.9027 10.0191 13.2692 10.4643 13.5125 10.9205C13.7653 11.3947 13.976 11.918 13.9988 12.5063C14.0112 12.828 13.9295 13.1564 13.7599 13.4442C13.5876 13.7373 13.3218 13.9942 12.9457 14.2318C12.475 14.5291 11.8697 14.7831 11.4918 14.884C10.8685 15.0502 10.1755 15.0564 9.39154 14.7801C8.74652 14.553 7.87472 14.0971 7.26523 13.5771C6.83261 13.2081 6.40293 12.8342 6.00682 12.4126C5.37531 11.7417 4.7867 10.9531 4.26339 10.1527C4.24719 10.1279 4.23171 10.1044 4.21551 10.0796Z" fill="#fff"/></svg></a><a class="phone__number hidden-xs display-inline-md" href="tel:78125092230">+7 (812) 509 22 30</a></div>

                            <div class="socials hidden-xs display-flex-md">
                                <ul class="socials__list">
                                    <li class="socials__item"><a class="socials__link" href="<?= THEME_OPTIONS['social-vk'] ?>"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/vk.svg"></a></li>
                                    <?php /*<li class="socials__item"><a class="socials__link" href="<?= THEME_OPTIONS['social-fb'] ?>"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/fb.svg"></a></li>*/ ?>
                                    <li class="socials__item"><a class="socials__link" href="<?= THEME_OPTIONS['social-tg'] ?>"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/tg.svg"></a></li>
                                    <li class="socials__item"><a class="socials__link" href="<?= THEME_OPTIONS['social-youtube'] ?>"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/yt.svg"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <?php if (!$_COOKIE['close_pannel']): ?>
        <div class="ribbon">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="ribbon__wrapper">
                            <p>Отправить заявку на SEO-продвижение сайта от Ant-Team.ru</p><a class="btn btn-small ribbon__get" data-fancybox href="#modal-order-form">Заказать</a>
                            <div class="ribbon__close close-pannel"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/close.svg"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>

        <?php if (!is_front_page()): ?>
            <?php if (function_exists('yoast_breadcrumb')) : ?>
                <div class="breadcrumbs">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <?php yoast_breadcrumb('<div class="breadcrumbs__wrapper">', '</div>'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        <?php endif; ?>