<nav class="main-menu main-menu--mobile">
    <ul class="main-menu__list">
        <li class="main-menu__item hidden-md">
            <a class="main-menu__link" id="mobile-menu" href="#">
                Меню<svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.8494 12.265L3.86658 9.31C3.42658 8.98 3.32658 8.35 3.65658 7.91C3.85658 7.65 4.15658 7.51 4.45658 7.51C4.66658 7.51 4.87658 7.57 5.05658 7.71L7.49658 9.51584V2.5C7.49658 1.95 7.94658 1.5 8.49658 1.5C9.04658 1.5 9.49658 1.95 9.49658 2.5V9.51569L11.9364 7.71C12.1164 7.57 12.3264 7.51 12.5364 7.51C12.8364 7.51 13.1364 7.65 13.3364 7.91C13.6664 8.35 13.5664 8.98 13.1264 9.31L9.14356 12.265C9.08911 12.3114 9.03009 12.3512 8.96774 12.3842C8.82164 12.4634 8.66219 12.4991 8.50257 12.5C8.50058 12.5 8.49858 12.5 8.49658 12.5C8.49452 12.5 8.49245 12.5 8.49039 12.5C8.49238 12.5 8.49438 12.5 8.49638 12.5M8.02522 12.3842C7.96286 12.3512 7.90385 12.3114 7.8494 12.265L8.02522 12.3842Z" fill="#2F80ED"/>
                </svg></a>
            <div class="mobile-menu">
                <div class="mobile-menu__wrapper">
                    <div class="mobile-menu__request">
                        <button class="btn btn-small" data-fancybox href="#modal-order-form">Оставить заявку</button>
                    </div>
                    <div class="mobile-menu__close"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/close.svg"></div>
                    <div class="mobile-menu__header">Услуги</div>
                    <?php
                    $menu = wp_nav_menu( array(
                        'theme_location' => 'header-uslugi',
                        'container'      => '',
                        'menu_class'     => 'mobile-menu__list',
                        'link_after'     => '<img src="/wp-content/themes/' . get_template() . '/assets/images/S_link.svg">',
                        'echo'           => false,
                    ) );

                    echo str_replace(['<a ', 'sub-menu__item'], ['<a class="mobile-menu__link link"', 'mobile-menu__item'], $menu);
                    ?>
                    <div class="mobile-menu__header">Публикации</div>
                    <?php
                    $menu = wp_nav_menu( array(
                        'theme_location' => 'header-blog',
                        'container'      => '',
                        'menu_class'     => 'mobile-menu__list',
                        'link_after'     => '<img src="/wp-content/themes/' . get_template() . '/assets/images/S_link.svg">',
                        'echo'           => false,
                    ) );

                    echo str_replace(['<a ', 'sub-menu__item'], ['<a class="mobile-menu__link link"', 'mobile-menu__item'], $menu);
                    ?>
                    <?php /*
                    <div class="mobile-menu__header">О нас</div>
                    */
                    ?>
                    <?php
                    /*
                    $menu = wp_nav_menu( array(
                        'theme_location' => 'header-info',
                        'container'      => '',
                        'menu_class'     => 'mobile-menu__list',
                        'link_after'     => '<img src="/wp-content/themes/' . get_template() . '/assets/images/S_link.svg">',
                        'echo'           => false,
                    ) );

                    echo str_replace(['<a ', 'sub-menu__item'], ['<a class="mobile-menu__link link"', 'mobile-menu__item'], $menu);
                    */
                    ?>
                    <div class="mobile-menu__socials">
                        <div class="socials">
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
        </li>
        <li class="main-menu__item hidden-xs display-flex-md">
            <a class="main-menu__link" href="#">
                Услуги<svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.8494 12.265L3.86658 9.31C3.42658 8.98 3.32658 8.35 3.65658 7.91C3.85658 7.65 4.15658 7.51 4.45658 7.51C4.66658 7.51 4.87658 7.57 5.05658 7.71L7.49658 9.51584V2.5C7.49658 1.95 7.94658 1.5 8.49658 1.5C9.04658 1.5 9.49658 1.95 9.49658 2.5V9.51569L11.9364 7.71C12.1164 7.57 12.3264 7.51 12.5364 7.51C12.8364 7.51 13.1364 7.65 13.3364 7.91C13.6664 8.35 13.5664 8.98 13.1264 9.31L9.14356 12.265C9.08911 12.3114 9.03009 12.3512 8.96774 12.3842C8.82164 12.4634 8.66219 12.4991 8.50257 12.5C8.50058 12.5 8.49858 12.5 8.49658 12.5C8.49452 12.5 8.49245 12.5 8.49039 12.5C8.49238 12.5 8.49438 12.5 8.49638 12.5M8.02522 12.3842C7.96286 12.3512 7.90385 12.3114 7.8494 12.265L8.02522 12.3842Z" fill="#2F80ED"/>
                </svg></a>
            <div class="sub-menu">
                <?php
                $menu = wp_nav_menu( array(
                    'theme_location' => 'header-uslugi',
                    'container'      => '',
                    'menu_class'     => 'sub-menu__list',
                    'link_after'     => '<img src="/wp-content/themes/' . get_template() . '/assets/images/S_link.svg">',
                    'echo'           => false,
                ) );

                echo preg_replace('/<a /', '<a class="sub-menu__link link"', $menu);
                ?>
            </div>
        </li>
        <li class="main-menu__item hidden-xs display-flex-md"><a class="main-menu__link" href="#">
                Публикации<svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.8494 12.265L3.86658 9.31C3.42658 8.98 3.32658 8.35 3.65658 7.91C3.85658 7.65 4.15658 7.51 4.45658 7.51C4.66658 7.51 4.87658 7.57 5.05658 7.71L7.49658 9.51584V2.5C7.49658 1.95 7.94658 1.5 8.49658 1.5C9.04658 1.5 9.49658 1.95 9.49658 2.5V9.51569L11.9364 7.71C12.1164 7.57 12.3264 7.51 12.5364 7.51C12.8364 7.51 13.1364 7.65 13.3364 7.91C13.6664 8.35 13.5664 8.98 13.1264 9.31L9.14356 12.265C9.08911 12.3114 9.03009 12.3512 8.96774 12.3842C8.82164 12.4634 8.66219 12.4991 8.50257 12.5C8.50058 12.5 8.49858 12.5 8.49658 12.5C8.49452 12.5 8.49245 12.5 8.49039 12.5C8.49238 12.5 8.49438 12.5 8.49638 12.5M8.02522 12.3842C7.96286 12.3512 7.90385 12.3114 7.8494 12.265L8.02522 12.3842Z" fill="#2F80ED"/>
                </svg></a>
            <div class="sub-menu">
                <?php
                $menu = wp_nav_menu( array(
                    'theme_location' => 'header-blog',
                    'container'      => '',
                    'menu_class'     => 'sub-menu__list',
                    'link_after'     => '<img src="/wp-content/themes/' . get_template() . '/assets/images/S_link.svg">',
                    'echo'           => false,
                ) );

                echo preg_replace('/<a /', '<a class="sub-menu__link link"', $menu);
                ?>
            </div>
        </li>
        <?php /*
        <li class="main-menu__item hidden-xs display-flex-md"><a class="main-menu__link" href="#">
                О нас<svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.8494 12.265L3.86658 9.31C3.42658 8.98 3.32658 8.35 3.65658 7.91C3.85658 7.65 4.15658 7.51 4.45658 7.51C4.66658 7.51 4.87658 7.57 5.05658 7.71L7.49658 9.51584V2.5C7.49658 1.95 7.94658 1.5 8.49658 1.5C9.04658 1.5 9.49658 1.95 9.49658 2.5V9.51569L11.9364 7.71C12.1164 7.57 12.3264 7.51 12.5364 7.51C12.8364 7.51 13.1364 7.65 13.3364 7.91C13.6664 8.35 13.5664 8.98 13.1264 9.31L9.14356 12.265C9.08911 12.3114 9.03009 12.3512 8.96774 12.3842C8.82164 12.4634 8.66219 12.4991 8.50257 12.5C8.50058 12.5 8.49858 12.5 8.49658 12.5C8.49452 12.5 8.49245 12.5 8.49039 12.5C8.49238 12.5 8.49438 12.5 8.49638 12.5M8.02522 12.3842C7.96286 12.3512 7.90385 12.3114 7.8494 12.265L8.02522 12.3842Z" fill="#2F80ED"/>
                </svg></a>
            <div class="sub-menu">
                <?php
                $menu = wp_nav_menu( array(
                    'theme_location' => 'header-info',
                    'container'      => '',
                    'menu_class'     => 'sub-menu__list',
                    'link_after'     => '<img src="/wp-content/themes/' . get_template() . '/assets/images/S_link.svg">',
                    'echo'           => false,
                ) );

                echo preg_replace('/<a /', '<a class="sub-menu__link link"', $menu);
                ?>
            </div>
        </li>
        */ ?>
    </ul>
</nav>