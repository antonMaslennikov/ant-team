<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ant-team.ru
 */
?>

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="footer__wrapper">
                            <div class="footer__contacts">
                                <div class="footer__logo">
                                    <a href="/">
                                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 0C8.9544 0 0 8.9544 0 20C0 31.0456 8.9544 40 20 40C31.0456 40 40 31.0456 40 20C40 8.9544 31.0456 0 20 0ZM13.9688 29.84H12.4936V33.5808H11.4264V29.84H9.9512V28.9704H13.9688V29.84ZM13.4296 22.3384H10.4552L9.752 26.0184H7.84L10.9408 11.4168H12.9056L16.0256 26.0184H14.0968L13.4296 22.3384ZM18.112 33.5808H14.5424V28.9704H18.0264V29.8264H15.6V30.828H17.7408V31.6576H15.6V32.7248H18.112V33.5808ZM22.4064 33.5808L22 32.5928H19.8576L19.4496 33.5808H18.356L20.4112 28.9704H21.4648L23.5264 33.5808H22.4064ZM23.5784 18.568H22.2808L18.08 8.5992V18.568H16.3496V3.9664H17.7376L21.884 13.6648V3.9664H23.5784V18.568ZM28.2032 33.5808L28.1968 30.8144L26.8368 33.0936H26.3568L25.0072 30.8736V33.5808H24.0072V28.9704H24.8872L26.616 31.84L28.3152 28.9744H29.1912L29.204 33.5848L28.2032 33.5808ZM31.9064 12.928H29.5064V26.0152H27.472V12.928H25.0024V11.4136H31.9064V12.928Z" fill="#2F80ED"/>
                                            <path d="M10.7256 20.8775H13.1592L11.9336 14.2983L10.7256 20.8775Z" fill="#2F80ED"/>
                                            <path d="M20.2 31.7832H21.6623L20.9312 30.0176L20.2 31.7832Z" fill="#2F80ED"/>
                                        </svg>
                                    </a>
                                </div>
                                <div class="footer__phone"><a href="tel:<?= THEME_OPTIONS['contact-phone'] ?>"><?= THEME_OPTIONS['contact-phone'] ?></a></div>
                                <div class="footer__call"><a class="btn" data-fancybox href="#modal-order-form">оставить заявку</a></div>
                                <div class="footer__address"><?= THEME_OPTIONS['contact-address'] ?></div>
                                <div class="footer__socials">
                                    <div class="socials">
                                        <ul class="socials__list">
                                            <li class="socials__item">
                                                <a class="socials__link" href="<?= THEME_OPTIONS['social-vk'] ?>">
                                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M14.6557 3.60343C14.7599 3.2557 14.6557 3 14.1594 3H12.5186C12.101 3 11.9088 3.22074 11.8047 3.4643C11.8047 3.4643 10.97 5.49893 9.78796 6.82004C9.40544 7.20273 9.23129 7.32434 9.02284 7.32434C8.91858 7.32434 8.7676 7.20273 8.7676 6.85501V3.60343C8.7676 3.1862 8.64641 3 8.29865 3H5.72001C5.45931 3 5.30241 3.19355 5.30241 3.37731C5.30241 3.77328 5.89361 3.86404 5.95419 4.97711V7.39384C5.95419 7.9238 5.85865 8.0201 5.64996 8.0201C5.09384 8.0201 3.74047 5.97627 2.93803 3.6384C2.78065 3.18388 2.62296 3 2.20347 3H0.562368C0.0935381 3 0 3.22074 0 3.4643C0 3.89901 0.556122 6.05513 2.59035 8.90654C3.94636 10.8541 5.85676 11.91 7.59529 11.91C8.63863 11.91 8.7676 11.6755 8.7676 11.2714V9.79977C8.7676 9.33088 8.86613 9.23721 9.19675 9.23721C9.43997 9.23721 9.85757 9.35885 10.831 10.2977C11.9437 11.4108 12.1272 11.91 12.7529 11.91H14.394C14.8629 11.91 15.0975 11.6755 14.9619 11.2127C14.8143 10.7515 14.2829 10.0825 13.5779 9.28923C13.1952 8.83707 12.6216 8.35022 12.4479 8.10677C12.2045 7.79402 12.274 7.65458 12.4479 7.37683C12.4479 7.37683 14.4473 4.55992 14.6557 3.60343Z" fill="#2F80ED"/>
                                                    </svg>
                                                </a>
                                            </li>
                                            <?php /*
                                            <li class="socials__item">
                                                <a class="socials__link" href="<?= THEME_OPTIONS['social-fb'] ?>">
                                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M7.5 0C3.35795 0 0 3.35795 0 7.5C0 11.2602 2.76989 14.3649 6.37909 14.9073V9.48784H4.52352V7.51636H6.37909V6.20455C6.37909 4.03261 7.43727 3.07909 9.24239 3.07909C10.1069 3.07909 10.5641 3.14318 10.7806 3.1725V4.89341H9.5492C8.78284 4.89341 8.51523 5.61989 8.51523 6.43875V7.51636H10.7611L10.4564 9.48784H8.51523V14.9233C12.1759 14.4266 15 11.2967 15 7.5C15 3.35795 11.642 0 7.5 0Z" fill="#2F80ED"/>
                                                    </svg>
                                                </a>
                                            </li> */
                                            ?>
                                            <li class="socials__item">
                                                <a class="socials__link" href="<?= THEME_OPTIONS['social-tg'] ?>">
                                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M14.7158 0.689549C14.4599 0.472573 14.058 0.441528 13.6425 0.608354H13.6418C13.2048 0.783708 1.27113 5.90242 0.785324 6.11155C0.696964 6.14225 -0.0747316 6.43019 0.00475789 7.07156C0.0757185 7.64982 0.695941 7.88932 0.771678 7.91695L3.80558 8.95577C4.00687 9.6258 4.74888 12.0978 4.91298 12.6259C5.01532 12.9552 5.18215 13.3877 5.47452 13.4768C5.73107 13.5757 5.98626 13.4853 6.15138 13.3557L8.00624 11.6352L11.0006 13.9704L11.0719 14.0131C11.2752 14.1031 11.47 14.1482 11.6559 14.1482C11.7996 14.1482 11.9374 14.1212 12.0691 14.0673C12.5177 13.8831 12.6971 13.4556 12.7159 13.4072L14.9525 1.78159C15.089 1.16069 14.8993 0.844775 14.7158 0.689549ZM6.48127 9.3713L5.4578 12.1006L4.43433 8.68899L12.2809 2.88933L6.48127 9.3713Z" fill="#2F80ED"/>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="socials__item">
                                                <a class="socials__link" href="<?= THEME_OPTIONS['social-youtube'] ?>">
                                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M14.5813 3.91408C14.4426 3.14872 13.7819 2.59135 13.0152 2.41735C11.8679 2.17401 9.74443 2 7.44698 2C5.1509 2 2.99347 2.17401 1.84475 2.41735C1.07939 2.59135 0.417346 3.11338 0.278684 3.91408C0.138662 4.78412 0 6.00217 0 7.56824C0 9.13431 0.138662 10.3524 0.31267 11.2224C0.452692 11.9878 1.11338 12.5451 1.87874 12.7191C3.09679 12.9625 5.18488 13.1365 7.48233 13.1365C9.77977 13.1365 11.8679 12.9625 13.0859 12.7191C13.8513 12.5451 14.512 12.0231 14.652 11.2224C14.7906 10.3524 14.9647 9.09897 15 7.56824C14.9293 6.00217 14.7553 4.78412 14.5813 3.91408ZM5.56824 10.0043V5.13214L9.81376 7.56824L5.56824 10.0043Z" fill="#2F80ED"/>
                                                    </svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="footer__payments hidden-xs display-block-md hidden-lg">
                                    <h5>Способы оплаты</h5>
                                    <ul class="payments">
                                        <li class="payments__item"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/visa.png"></li>
                                        <li class="payments__item"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/mastercard.png"></li>
                                        <li class="payments__item"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/Apple_pay.png"></li>
                                        <li class="payments__item"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/G_pay.png"></li>
                                        <li class="payments__item"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/mir.png"></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="footer__payments hidden-md">
                                <h5>Способы оплаты</h5>
                                <ul class="payments">
                                    <li class="payments__item"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/visa.png"></li>
                                    <li class="payments__item"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/mastercard.png"></li>
                                    <li class="payments__item"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/Apple_pay.png"></li>
                                    <li class="payments__item"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/G_pay.png"></li>
                                    <li class="payments__item"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/mir.png"></li>
                                </ul>
                            </div>
                            <div class="footer__menu">
                                <div class="footer__left">
                                    <div class="footer__item">
                                        <h5>Услуги</h5>

                                        <?php
                                        $menu = wp_nav_menu( array(
                                            'theme_location' => 'footer-uslugi',
                                            'container'      => '',
                                            'menu_class'     => '',
                                            'link_after'     => '<svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M13.7616 7.64718L10.8066 11.63C10.4766 12.07 9.84658 12.17 9.40658 11.84C9.14658 11.64 9.00658 11.34 9.00658 11.04C9.00658 10.83 9.06658 10.62 9.20658 10.44L11.0124 8H3.99658C3.44658 8 2.99658 7.55 2.99658 7C2.99658 6.45 3.44658 6 3.99658 6H11.0123L9.20658 3.5602C9.06658 3.3802 9.00658 3.1702 9.00658 2.9602C9.00658 2.6602 9.14658 2.3602 9.40658 2.1602C9.84658 1.8302 10.4766 1.9302 10.8066 2.3702L13.7616 6.35303C13.808 6.40747 13.8478 6.46649 13.8808 6.52884C13.96 6.67495 13.9957 6.83439 13.9966 6.99401C13.9966 6.99601 13.9966 6.998 13.9966 7C13.9966 7.00207 13.9966 7.00413 13.9966 7.0062C13.9966 7.0042 13.9966 7.0022 13.9966 7.0002M13.8808 7.47136C13.8478 7.53372 13.808 7.59273 13.7616 7.64718L13.8808 7.47136Z" fill="#2F80ED"/></svg>',
                                            'echo'           => false,
                                        ) );

                                        echo preg_replace('/<a /', '<a class="link"', $menu);
                                        ?>
                                    </div>
                                    <div class="footer__item">
                                        <h5>Публикации</h5>
                                        <?php
                                        $menu = wp_nav_menu( array(
                                            'theme_location' => 'footer-blog',
                                            'container'      => '',
                                            'menu_class'     => '',
                                            'link_after'     => '<svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M13.7616 7.64718L10.8066 11.63C10.4766 12.07 9.84658 12.17 9.40658 11.84C9.14658 11.64 9.00658 11.34 9.00658 11.04C9.00658 10.83 9.06658 10.62 9.20658 10.44L11.0124 8H3.99658C3.44658 8 2.99658 7.55 2.99658 7C2.99658 6.45 3.44658 6 3.99658 6H11.0123L9.20658 3.5602C9.06658 3.3802 9.00658 3.1702 9.00658 2.9602C9.00658 2.6602 9.14658 2.3602 9.40658 2.1602C9.84658 1.8302 10.4766 1.9302 10.8066 2.3702L13.7616 6.35303C13.808 6.40747 13.8478 6.46649 13.8808 6.52884C13.96 6.67495 13.9957 6.83439 13.9966 6.99401C13.9966 6.99601 13.9966 6.998 13.9966 7C13.9966 7.00207 13.9966 7.00413 13.9966 7.0062C13.9966 7.0042 13.9966 7.0022 13.9966 7.0002M13.8808 7.47136C13.8478 7.53372 13.808 7.59273 13.7616 7.64718L13.8808 7.47136Z" fill="#2F80ED"/></svg>',
                                            'echo'           => false,
                                        ) );

                                        echo preg_replace('/<a /', '<a class="link"', $menu);
                                        ?>
                                    </div>
                                </div>
                                <div class="footer__item footer__right">
                                    <h5>Информация</h5>
                                    <?php
                                    $menu = wp_nav_menu( array(
                                        'theme_location' => 'footer-info',
                                        'container'      => '',
                                        'menu_class'     => '',
                                        'link_after'     => '<svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M13.7616 7.64718L10.8066 11.63C10.4766 12.07 9.84658 12.17 9.40658 11.84C9.14658 11.64 9.00658 11.34 9.00658 11.04C9.00658 10.83 9.06658 10.62 9.20658 10.44L11.0124 8H3.99658C3.44658 8 2.99658 7.55 2.99658 7C2.99658 6.45 3.44658 6 3.99658 6H11.0123L9.20658 3.5602C9.06658 3.3802 9.00658 3.1702 9.00658 2.9602C9.00658 2.6602 9.14658 2.3602 9.40658 2.1602C9.84658 1.8302 10.4766 1.9302 10.8066 2.3702L13.7616 6.35303C13.808 6.40747 13.8478 6.46649 13.8808 6.52884C13.96 6.67495 13.9957 6.83439 13.9966 6.99401C13.9966 6.99601 13.9966 6.998 13.9966 7C13.9966 7.00207 13.9966 7.00413 13.9966 7.0062C13.9966 7.0042 13.9966 7.0022 13.9966 7.0002M13.8808 7.47136C13.8478 7.53372 13.808 7.59273 13.7616 7.64718L13.8808 7.47136Z" fill="#2F80ED"/></svg>',
                                        'echo'           => false,
                                    ) );

                                    echo preg_replace('/<a /', '<a class="link"', $menu);
                                    ?>
                                </div>
                            </div>
                            <div class="footer__payments hidden-xs display-block-lg">
                                <h5>Способы оплаты</h5>
                                <ul class="payments">
                                    <li class="payments__item"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/visa.png"></li>
                                    <li class="payments__item"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/mastercard.png"></li>
                                    <li class="payments__item"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/Apple_pay.png"></li>
                                    <li class="payments__item"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/G_pay.png"></li>
                                    <li class="payments__item"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/mir.png"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <?php get_template_part('template-parts/modals') ?>

        <?php wp_footer(); ?>
        <script>

            document.addEventListener( 'wpcf7mailsent', function( event ) {
                var id = event.detail.contactFormId;
                    dataLayer.push({
                        'event': 'event',
                        'eventCategory': 'успех - '+event.detail.inputs[0].value,
                        'eventAction': id
                    });
            }, false );
            document.addEventListener( 'wpcf7mailfailed ', function( event ) {

            }, false );
            document.addEventListener( 'wpcf7submit', function( event ) {

            }, false );
            document.addEventListener( 'wpcf7invalid', function( event ) {
                var id = event.detail.contactFormId;
                console.log(event.detail);
                dataLayer.push({
                    'event': 'event',
                    'eventCategory': 'не успех - '+event.detail.inputs[0].value,
                    'eventAction': id
                });
            }, false );

        </script>

    </div>
</body>
</html>
