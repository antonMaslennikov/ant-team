<?php
get_header();
?>

    <section class="page__header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <?php if (is_author()): ?>
                        <?php $author_meta = get_user_meta(get_the_author_ID()); ?>
                        <?php if ($author_meta['first_name_rod'][0] || $author_meta['last_name_rod'][0]): ?>
                            <h1>Публикации автора <?= $author_meta['first_name_rod'][0] ?> <?= $author_meta['last_name_rod'][0] ?></h1>
                        <?php else: ?>
                            <h1><?php the_archive_title() ?></h1>
                        <?php endif; ?>
                    <?php else: ?>
                        <h1>Блог</h1>
                        <?php if (get_the_archive_title() != 'Архивы'): ?>
                            <h3><?php the_archive_title() ?></h3>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <section class="page__subheader">
                    <section class="page__search">
                        <form class="blog-search__form" id="blog-search-form" action="" method="get">
                            <div class="form-ctrl blog-search__input">
                                <input type="text" name="s" placeholder="Поиск" value="<?php if(!empty($_GET['s'])){echo $_GET['s'];}?>">
                                <button type="submit"><svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15.7066 13.29L12.7466 10.33C13.5266 9.25 13.9966 7.93 13.9966 6.5C13.9966 2.91 11.0866 0 7.49658 0C3.90658 0 0.996582 2.91 0.996582 6.5C0.996582 10.09 3.90658 13 7.49658 13C8.92658 13 10.2466 12.53 11.3266 11.74L14.2866 14.7C14.4666 14.89 14.7166 15 14.9966 15C15.5466 15 15.9966 14.55 15.9966 14C15.9966 13.72 15.8866 13.47 15.7066 13.29ZM2.99658 6.5C2.99658 4.01 5.00658 2 7.49658 2C9.98658 2 11.9966 4.01 11.9966 6.5C11.9966 8.99 9.98658 11 7.49658 11C5.00658 11 2.99658 8.99 2.99658 6.5Z" fill="#A9A5A0"/></svg></button>
                            </div>
                        </form>
                    </section>
                    <section class="page__nav">
                        <ul class="blog-menu">
                            <li class="blog-menu__item"><a class="blog-menu__link" href="#">
                                    Темы<svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.8494 12.265L3.86658 9.31C3.42658 8.98 3.32658 8.35 3.65658 7.91C3.85658 7.65 4.15658 7.51 4.45658 7.51C4.66658 7.51 4.87658 7.57 5.05658 7.71L7.49658 9.51584V2.5C7.49658 1.95 7.94658 1.5 8.49658 1.5C9.04658 1.5 9.49658 1.95 9.49658 2.5V9.51569L11.9364 7.71C12.1164 7.57 12.3264 7.51 12.5364 7.51C12.8364 7.51 13.1364 7.65 13.3364 7.91C13.6664 8.35 13.5664 8.98 13.1264 9.31L9.14356 12.265C9.08911 12.3114 9.03009 12.3512 8.96774 12.3842C8.82164 12.4634 8.66219 12.4991 8.50257 12.5C8.50058 12.5 8.49858 12.5 8.49658 12.5C8.49452 12.5 8.49245 12.5 8.49039 12.5C8.49238 12.5 8.49438 12.5 8.49638 12.5M8.02522 12.3842C7.96286 12.3512 7.90385 12.3114 7.8494 12.265L8.02522 12.3842Z" fill="#2F80ED"/>
                                    </svg></a>
                                <div class="sub-menu">
                                    <div class="sub-menu__header">Темы</div>
                                    <div class="sub-menu__close"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/close.svg"></div>

                                    <?php
                                        $categories = get_categories( array(
                                            'taxonomy'     => 'category',
                                            'type'         => 'post',
                                            'child_of'     => 0,
                                            'parent'       => '',
                                            'orderby'      => 'name',
                                            'order'        => 'ASC',
                                            'hide_empty'   => 1,
                                            'hierarchical' => 1,
                                            'exclude'      => '1',
                                            'include'      => '',
                                            'number'       => 0,
                                            'pad_counts'   => false,
                                        ));
                                    ?>
                                    <ul class="sub-menu__list">
                                        <?php foreach ($categories as $tag): ?>
                                            <?php $tag_link = get_tag_link($tag->term_id); ?>
                                            <li class="sub-menu__item"><a class="sub-menu__link link" href="<?= $tag_link ?>" title="<?= $tag->name ?>"><?= $tag->name ?><img src="/wp-content/themes/<?= get_template() ?>/assets/images/S_link.svg"></a></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </li>
                            <li class="blog-menu__item"><a class="blog-menu__link" href="#">
                                    Форматы<svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.8494 12.265L3.86658 9.31C3.42658 8.98 3.32658 8.35 3.65658 7.91C3.85658 7.65 4.15658 7.51 4.45658 7.51C4.66658 7.51 4.87658 7.57 5.05658 7.71L7.49658 9.51584V2.5C7.49658 1.95 7.94658 1.5 8.49658 1.5C9.04658 1.5 9.49658 1.95 9.49658 2.5V9.51569L11.9364 7.71C12.1164 7.57 12.3264 7.51 12.5364 7.51C12.8364 7.51 13.1364 7.65 13.3364 7.91C13.6664 8.35 13.5664 8.98 13.1264 9.31L9.14356 12.265C9.08911 12.3114 9.03009 12.3512 8.96774 12.3842C8.82164 12.4634 8.66219 12.4991 8.50257 12.5C8.50058 12.5 8.49858 12.5 8.49658 12.5C8.49452 12.5 8.49245 12.5 8.49039 12.5C8.49238 12.5 8.49438 12.5 8.49638 12.5M8.02522 12.3842C7.96286 12.3512 7.90385 12.3114 7.8494 12.265L8.02522 12.3842Z" fill="#2F80ED"/>
                                    </svg></a>
                                <div class="sub-menu">
                                    <div class="sub-menu__header">Форматы</div>
                                    <div class="sub-menu__close"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/close.svg"></div>
                                    <ul class="sub-menu__list">
                                        <?php if ($_GET['format']):?>
                                            <li class="sub-menu__item"><a class="sub-menu__link link" href="/blog/">Все<img src="/wp-content/themes/<?= get_template() ?>/assets/images/S_link.svg"></a></li>
                                        <?php endif; ?>
                                        <?php foreach ($POST_FORMATS AS $kf => $f): ?>
                                            <li class="sub-menu__item"><a class="sub-menu__link link" href="/blog/?format=<?= $kf ?>"><?= $f ?><img src="/wp-content/themes/<?= get_template() ?>/assets/images/S_link.svg"></a></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </li>

                            <?php $tags = get_tags(); ?>

                            <?php if (count($tags) > 0): ?>
                                <li class="blog-menu__item"><a class="blog-menu__link" href="#">
                                        Теги<svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.8494 12.265L3.86658 9.31C3.42658 8.98 3.32658 8.35 3.65658 7.91C3.85658 7.65 4.15658 7.51 4.45658 7.51C4.66658 7.51 4.87658 7.57 5.05658 7.71L7.49658 9.51584V2.5C7.49658 1.95 7.94658 1.5 8.49658 1.5C9.04658 1.5 9.49658 1.95 9.49658 2.5V9.51569L11.9364 7.71C12.1164 7.57 12.3264 7.51 12.5364 7.51C12.8364 7.51 13.1364 7.65 13.3364 7.91C13.6664 8.35 13.5664 8.98 13.1264 9.31L9.14356 12.265C9.08911 12.3114 9.03009 12.3512 8.96774 12.3842C8.82164 12.4634 8.66219 12.4991 8.50257 12.5C8.50058 12.5 8.49858 12.5 8.49658 12.5C8.49452 12.5 8.49245 12.5 8.49039 12.5C8.49238 12.5 8.49438 12.5 8.49638 12.5M8.02522 12.3842C7.96286 12.3512 7.90385 12.3114 7.8494 12.265L8.02522 12.3842Z" fill="#2F80ED"/>
                                        </svg></a>
                                    <div class="sub-menu">
                                        <div class="sub-menu__header">Теги</div>
                                        <div class="sub-menu__close"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/close.svg"></div>
                                        <ul class="sub-menu__list">
                                            <?php foreach ($tags as $tag): ?>
                                                <li class="sub-menu__item"><a class="sub-menu__link link" href="<?= get_tag_link($tag->term_id) ?>"><?= $tag->name ?><img src="/wp-content/themes/<?= get_template() ?>/assets/images/S_link.svg"></a></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                </li>
                            <?php endif; ?>

                            <li class="blog-menu__item"><a class="blog-menu__link" href="#">
                                    Сложноcть<svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.8494 12.265L3.86658 9.31C3.42658 8.98 3.32658 8.35 3.65658 7.91C3.85658 7.65 4.15658 7.51 4.45658 7.51C4.66658 7.51 4.87658 7.57 5.05658 7.71L7.49658 9.51584V2.5C7.49658 1.95 7.94658 1.5 8.49658 1.5C9.04658 1.5 9.49658 1.95 9.49658 2.5V9.51569L11.9364 7.71C12.1164 7.57 12.3264 7.51 12.5364 7.51C12.8364 7.51 13.1364 7.65 13.3364 7.91C13.6664 8.35 13.5664 8.98 13.1264 9.31L9.14356 12.265C9.08911 12.3114 9.03009 12.3512 8.96774 12.3842C8.82164 12.4634 8.66219 12.4991 8.50257 12.5C8.50058 12.5 8.49858 12.5 8.49658 12.5C8.49452 12.5 8.49245 12.5 8.49039 12.5C8.49238 12.5 8.49438 12.5 8.49638 12.5M8.02522 12.3842C7.96286 12.3512 7.90385 12.3114 7.8494 12.265L8.02522 12.3842Z" fill="#2F80ED"/>
                                    </svg></a>
                                <div class="sub-menu">
                                    <div class="sub-menu__header">Сложноcть</div>
                                    <div class="sub-menu__close"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/close.svg"></div>
                                    <ul class="sub-menu__list">
                                        <?php if ($_GET['complexity']):?>
                                        <li class="sub-menu__item"><a class="sub-menu__link link" href="/blog/">Любая<img src="/wp-content/themes/<?= get_template() ?>/assets/images/S_link.svg"></a></li>
                                        <?php endif; ?>
                                        <li class="sub-menu__item"><a class="sub-menu__link link" href="/blog/?complexity=Junior">Junior<img src="/wp-content/themes/<?= get_template() ?>/assets/images/S_link.svg"></a></li>
                                        <li class="sub-menu__item"><a class="sub-menu__link link" href="/blog/?complexity=Middle">Middle<img src="/wp-content/themes/<?= get_template() ?>/assets/images/S_link.svg"></a></li>
                                        <li class="sub-menu__item"><a class="sub-menu__link link" href="/blog/?complexity=Senior">Senior<img src="/wp-content/themes/<?= get_template() ?>/assets/images/S_link.svg"></a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </section>
                </section>
            </div>
        </div>
    </div>
    <section class="page__content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content">

                        <?php

                        global $query_string;

                        // добавляем базовые параметры в массив $args
                        parse_str($query_string, $args);

                        // кол-во постов на страницу
                        $args['posts_per_page'] = $_GET['posts_per_page'] ?? 20;

                        $args['meta_query'] = [];

                        // фильтр по формату
                        if (in_array($_GET['format'], ['instruction', 'article', 'study', 'case', 'check-list', 'patent', 'test', 'interview'])) {
                            $args['meta_query'][] = [
                                [
                                    'key' => 'format',
                                    'value' => $_GET['format'],
                                ],
                            ];
                        }

                        // фильтр по сложности
                        if (in_array($_GET['complexity'], ['Junior', 'Middle', 'Senior'])) {
                            $args['meta_query'][] = [
                                [
                                    'key' => 'complexity',
                                    'value' => $_GET['complexity'],
                                ],
                            ];
                        }

                        query_posts($args);

                        ?>

                        <?php if (have_posts()): ?>

                            <?php $post_counter = 0; ?>

                            <?php while (have_posts()):  the_post(); ?>

                                <?php if (get_query_var('paged') == 0): ?>

                                    <?php if ($post_counter == 2): ?>

                                        <div class="content__item">

                                            <?php $formId = 11002; ?>

                                            <div role="form" class="wpcf7" id="wpcf7-f<?= $formId ?>-o1" lang="ru-RU" dir="ltr">
                                                <form action="/" class="wpcf7-form form init subscribe-form feedback" method="post" data-status="init">
                                                    <div class="form__success">
                                                        <h3>Спасибо, что подписались на рассылку!</h3>
                                                        <p>Мы будем отправлять вам только полезный контент не чаще 2 раз в месяц.</p>
                                                    </div>
                                                    <div class="form-ctrl">
                                                        <h3>Подпишитесь на рассылку</h3>
                                                        <p>Мы будем отправлять вам письма с самыми интересными и полезными статьями 2 раза в месяц.</p>
                                                    </div>
                                                    <div class="form-ctrl">
                                                        <input type="text" name="your-name" value="" class="wpcf7-form-control wpcf7-text gtmPriceFormName" aria-invalid="false" placeholder="Имя (Александр)">
                                                        <label>Имя</label>
                                                    </div>
                                                    <div class="form-ctrl">
                                                        <input type="email" name="your-email" value="" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form__input" aria-required="true" aria-invalid="false" placeholder="Почта" required>
                                                        <label>E-mail</label>
                                                    </div>
                                                    <div>
                                                        <button class="btn">Отправить</button>
                                                        <div>
                                                            <div class="form-ctrl">
                                                                <label class="checkbox">Я ознакомлен и согласен с <a href='/politika-konfidentsialnosti/'>Политикой в отношении обработки персональных данных</a>
                                                                    <input type="checkbox"><span class="check"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/check.svg"></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="wpcf7-response-output" aria-hidden="true"></div>

                                                    <input type="hidden" name="your-check-bot" value="" class="wpcf7-form-control wpcf7-hidden">

                                                    <input type="hidden" name="_wpcf7" value="<?= $formId ?>">
                                                    <input type="hidden" name="_wpcf7_version" value="5.3.2">
                                                    <input type="hidden" name="_wpcf7_locale" value="ru_RU">
                                                    <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f<?= $formId ?>-o1">
                                                    <input type="hidden" name="_wpcf7_container_post" value="0">
                                                    <input type="hidden" name="_wpcf7_posted_data_hash" value="">
                                                </form>
                                            </div>
                                        </div>

                                    <?php elseif ($post_counter == 5 && 1 == 2): ?>

                                        <div class="content__item">
                                        <div class="now-commenting">
                                            <h4>Сейчас комментируют:</h4>
                                            <div class="comments">
                                                <div class="comment">
                                                    <div class="comment__username">Username</div>
                                                    <div class="comment__desc">Большинство видов рода обитают на юге Китая и в Юго-Восточной Азии. Исключение составляют два вида. Первый — обыкновенный сазан lorem ipsum Первый обыкновенный сазан lorem ipsum Первый обыкновенный сазан lorem ipsum</div>
                                                    <div class="comment__link"><a class="link" href="#">Название статьи
                                                      <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M13.7616 7.64718L10.8066 11.63C10.4766 12.07 9.84658 12.17 9.40658 11.84C9.14658 11.64 9.00658 11.34 9.00658 11.04C9.00658 10.83 9.06658 10.62 9.20658 10.44L11.0124 8H3.99658C3.44658 8 2.99658 7.55 2.99658 7C2.99658 6.45 3.44658 6 3.99658 6H11.0123L9.20658 3.5602C9.06658 3.3802 9.00658 3.1702 9.00658 2.9602C9.00658 2.6602 9.14658 2.3602 9.40658 2.1602C9.84658 1.8302 10.4766 1.9302 10.8066 2.3702L13.7616 6.35303C13.808 6.40747 13.8478 6.46649 13.8808 6.52884C13.96 6.67495 13.9957 6.83439 13.9966 6.99401C13.9966 6.99601 13.9966 6.998 13.9966 7C13.9966 7.00207 13.9966 7.00413 13.9966 7.0062C13.9966 7.0042 13.9966 7.0022 13.9966 7.0002M13.8808 7.47136C13.8478 7.53372 13.808 7.59273 13.7616 7.64718L13.8808 7.47136Z" fill="#2F80ED"/>
                                                      </svg>
                                                    </a></div>
                                                </div>
                                                <div class="comment">
                                                    <div class="comment__username">Username</div>
                                                    <div class="comment__desc">Большинство видов рода обитают на юге Китая и в Юго-Восточной Азии. Исключение составляют два вида. Первый — обыкновенный сазан lorem ipsum Первый обыкновенный сазан lorem ipsum Первый обыкновенный сазан lorem ipsum</div>
                                                    <div class="comment__link"><a class="link" href="#">Название статьи
                                                      <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M13.7616 7.64718L10.8066 11.63C10.4766 12.07 9.84658 12.17 9.40658 11.84C9.14658 11.64 9.00658 11.34 9.00658 11.04C9.00658 10.83 9.06658 10.62 9.20658 10.44L11.0124 8H3.99658C3.44658 8 2.99658 7.55 2.99658 7C2.99658 6.45 3.44658 6 3.99658 6H11.0123L9.20658 3.5602C9.06658 3.3802 9.00658 3.1702 9.00658 2.9602C9.00658 2.6602 9.14658 2.3602 9.40658 2.1602C9.84658 1.8302 10.4766 1.9302 10.8066 2.3702L13.7616 6.35303C13.808 6.40747 13.8478 6.46649 13.8808 6.52884C13.96 6.67495 13.9957 6.83439 13.9966 6.99401C13.9966 6.99601 13.9966 6.998 13.9966 7C13.9966 7.00207 13.9966 7.00413 13.9966 7.0062C13.9966 7.0042 13.9966 7.0022 13.9966 7.0002M13.8808 7.47136C13.8478 7.53372 13.808 7.59273 13.7616 7.64718L13.8808 7.47136Z" fill="#2F80ED"/>
                                                      </svg></a></div>
                                                </div>
                                                <div class="comment">
                                                    <div class="comment__username">Username</div>
                                                    <div class="comment__desc">Большинство видов рода обитают на юге Китая и в Юго-Восточной Азии. Исключение составляют два вида. Первый — обыкновенный сазан lorem ipsum Первый обыкновенный сазан lorem ipsum Первый обыкновенный сазан lorem ipsum</div>
                                                    <div class="comment__link"><a class="link" href="#">Название статьи
                                                      <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M13.7616 7.64718L10.8066 11.63C10.4766 12.07 9.84658 12.17 9.40658 11.84C9.14658 11.64 9.00658 11.34 9.00658 11.04C9.00658 10.83 9.06658 10.62 9.20658 10.44L11.0124 8H3.99658C3.44658 8 2.99658 7.55 2.99658 7C2.99658 6.45 3.44658 6 3.99658 6H11.0123L9.20658 3.5602C9.06658 3.3802 9.00658 3.1702 9.00658 2.9602C9.00658 2.6602 9.14658 2.3602 9.40658 2.1602C9.84658 1.8302 10.4766 1.9302 10.8066 2.3702L13.7616 6.35303C13.808 6.40747 13.8478 6.46649 13.8808 6.52884C13.96 6.67495 13.9957 6.83439 13.9966 6.99401C13.9966 6.99601 13.9966 6.998 13.9966 7C13.9966 7.00207 13.9966 7.00413 13.9966 7.0062C13.9966 7.0042 13.9966 7.0022 13.9966 7.0002M13.8808 7.47136C13.8478 7.53372 13.808 7.59273 13.7616 7.64718L13.8808 7.47136Z" fill="#2F80ED"/>
                                                    </svg>
                                                    </a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <?php elseif ($post_counter == 9): ?>

                                        <div class="content__item">
                                            <div class="suggest">
                                                <h3>Есть тема для статьи?</h3>
                                                <p>Пришлите нам свою идею и возможно мы напишем по ней статью</p>
                                                <p><a class="link" data-fancybox href="#modal-article-theme">прислать идею
                                                    <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M13.7616 7.64718L10.8066 11.63C10.4766 12.07 9.84658 12.17 9.40658 11.84C9.14658 11.64 9.00658 11.34 9.00658 11.04C9.00658 10.83 9.06658 10.62 9.20658 10.44L11.0124 8H3.99658C3.44658 8 2.99658 7.55 2.99658 7C2.99658 6.45 3.44658 6 3.99658 6H11.0123L9.20658 3.5602C9.06658 3.3802 9.00658 3.1702 9.00658 2.9602C9.00658 2.6602 9.14658 2.3602 9.40658 2.1602C9.84658 1.8302 10.4766 1.9302 10.8066 2.3702L13.7616 6.35303C13.808 6.40747 13.8478 6.46649 13.8808 6.52884C13.96 6.67495 13.9957 6.83439 13.9966 6.99401C13.9966 6.99601 13.9966 6.998 13.9966 7C13.9966 7.00207 13.9966 7.00413 13.9966 7.0062C13.9966 7.0042 13.9966 7.0022 13.9966 7.0002M13.8808 7.47136C13.8478 7.53372 13.808 7.59273 13.7616 7.64718L13.8808 7.47136Z" fill="#2F80ED"/>
                                                    </svg>
                                                </a></p>
                                            </div>
                                        </div>

                                    <?php elseif ($post_counter == 13): ?>

                                        <div class="content__item">
                                            <div class="subscribe">
                                                <h4>Подпишитесь, чтобы получать информацию о публикациях</h4>
                                                <div class="subscribe__socials">
                                                    <div class="subscribe__social"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/tg.svg"><a class="link" href="<?= THEME_OPTIONS['social-tg'] ?>">@seoantteam<svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M13.7616 7.64718L10.8066 11.63C10.4766 12.07 9.84658 12.17 9.40658 11.84C9.14658 11.64 9.00658 11.34 9.00658 11.04C9.00658 10.83 9.06658 10.62 9.20658 10.44L11.0124 8H3.99658C3.44658 8 2.99658 7.55 2.99658 7C2.99658 6.45 3.44658 6 3.99658 6H11.0123L9.20658 3.5602C9.06658 3.3802 9.00658 3.1702 9.00658 2.9602C9.00658 2.6602 9.14658 2.3602 9.40658 2.1602C9.84658 1.8302 10.4766 1.9302 10.8066 2.3702L13.7616 6.35303C13.808 6.40747 13.8478 6.46649 13.8808 6.52884C13.96 6.67495 13.9957 6.83439 13.9966 6.99401C13.9966 6.99601 13.9966 6.998 13.9966 7C13.9966 7.00207 13.9966 7.00413 13.9966 7.0062C13.9966 7.0042 13.9966 7.0022 13.9966 7.0002M13.8808 7.47136C13.8478 7.53372 13.808 7.59273 13.7616 7.64718L13.8808 7.47136Z" fill="#2F80ED"/>
                                                    </svg></a></div>
                                                    <?php /*
                                                    <div class="subscribe__social"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/fb.svg"><a class="link" href="<?= THEME_OPTIONS['social-fb'] ?>">antteam.ru<svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M13.7616 7.64718L10.8066 11.63C10.4766 12.07 9.84658 12.17 9.40658 11.84C9.14658 11.64 9.00658 11.34 9.00658 11.04C9.00658 10.83 9.06658 10.62 9.20658 10.44L11.0124 8H3.99658C3.44658 8 2.99658 7.55 2.99658 7C2.99658 6.45 3.44658 6 3.99658 6H11.0123L9.20658 3.5602C9.06658 3.3802 9.00658 3.1702 9.00658 2.9602C9.00658 2.6602 9.14658 2.3602 9.40658 2.1602C9.84658 1.8302 10.4766 1.9302 10.8066 2.3702L13.7616 6.35303C13.808 6.40747 13.8478 6.46649 13.8808 6.52884C13.96 6.67495 13.9957 6.83439 13.9966 6.99401C13.9966 6.99601 13.9966 6.998 13.9966 7C13.9966 7.00207 13.9966 7.00413 13.9966 7.0062C13.9966 7.0042 13.9966 7.0022 13.9966 7.0002M13.8808 7.47136C13.8478 7.53372 13.808 7.59273 13.7616 7.64718L13.8808 7.47136Z" fill="#2F80ED"/>
                                                    </svg></a></div>
                                                    */ ?>
                                                    <div class="subscribe__social"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/yt.svg"><a class="link" href="<?= THEME_OPTIONS['social-youtube'] ?>">SEO от Ant-Team<svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M13.7616 7.64718L10.8066 11.63C10.4766 12.07 9.84658 12.17 9.40658 11.84C9.14658 11.64 9.00658 11.34 9.00658 11.04C9.00658 10.83 9.06658 10.62 9.20658 10.44L11.0124 8H3.99658C3.44658 8 2.99658 7.55 2.99658 7C2.99658 6.45 3.44658 6 3.99658 6H11.0123L9.20658 3.5602C9.06658 3.3802 9.00658 3.1702 9.00658 2.9602C9.00658 2.6602 9.14658 2.3602 9.40658 2.1602C9.84658 1.8302 10.4766 1.9302 10.8066 2.3702L13.7616 6.35303C13.808 6.40747 13.8478 6.46649 13.8808 6.52884C13.96 6.67495 13.9957 6.83439 13.9966 6.99401C13.9966 6.99601 13.9966 6.998 13.9966 7C13.9966 7.00207 13.9966 7.00413 13.9966 7.0062C13.9966 7.0042 13.9966 7.0022 13.9966 7.0002M13.8808 7.47136C13.8478 7.53372 13.808 7.59273 13.7616 7.64718L13.8808 7.47136Z" fill="#2F80ED"/>
                                                    </svg></a></div>
                                                    <div class="subscribe__social"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/vk.svg"><a class="link" href="<?= THEME_OPTIONS['social-vk'] ?>">ant_team_ru<svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M13.7616 7.64718L10.8066 11.63C10.4766 12.07 9.84658 12.17 9.40658 11.84C9.14658 11.64 9.00658 11.34 9.00658 11.04C9.00658 10.83 9.06658 10.62 9.20658 10.44L11.0124 8H3.99658C3.44658 8 2.99658 7.55 2.99658 7C2.99658 6.45 3.44658 6 3.99658 6H11.0123L9.20658 3.5602C9.06658 3.3802 9.00658 3.1702 9.00658 2.9602C9.00658 2.6602 9.14658 2.3602 9.40658 2.1602C9.84658 1.8302 10.4766 1.9302 10.8066 2.3702L13.7616 6.35303C13.808 6.40747 13.8478 6.46649 13.8808 6.52884C13.96 6.67495 13.9957 6.83439 13.9966 6.99401C13.9966 6.99601 13.9966 6.998 13.9966 7C13.9966 7.00207 13.9966 7.00413 13.9966 7.0062C13.9966 7.0042 13.9966 7.0022 13.9966 7.0002M13.8808 7.47136C13.8478 7.53372 13.808 7.59273 13.7616 7.64718L13.8808 7.47136Z" fill="#2F80ED"/>
                                                    </svg></a></div>
                                                </div>
                                            </div>
                                        </div>

                                    <?php elseif ($post_counter == 14): ?>

                                        <?php $formId = 11003; ?>

                                        <div class="content__item">
                                            <div role="form" class="wpcf7" id="wpcf7-f<?= $formId ?>-o1" lang="ru-RU" dir="ltr">
                                                <form action="/#wpcf7-f<?= $formId ?>-o1" method="post" class="wpcf7-form init form subscribe-form" novalidate="novalidate" data-status="init">
                                                    <div class="form__success">
                                                        <h3>Заявка принята</h3>
                                                        <p>Мы свяжемся с вами в ближайшее время и обсудим возможности для продвижения вашего сайта.</p>
                                                    </div>
                                                    <div class="form-ctrl">
                                                        <h3>Заявка на SEO-продвижение сайта от Ant-Team.ru</h3>
                                                        <p>Оставьте заявку, и наши специалисты подробно расскажут о том, как именно мы можем помочь вашему сайту занять лучшие позиции в поисковой выдаче.</p>
                                                    </div>
                                                    <div class="form-ctrl">
                                                        <input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text gtmPriceFormName" aria-invalid="false" placeholder="Имя (Александр)">
                                                        <label>Имя</label>
                                                    </div>
                                                    <div class="form-ctrl">
                                                        <input type="tel" name="your-phone" value="" class="wpcf7-form-control wpcf7mf-mask wpcf7-mask wpcf7-validates-as-required gtmPriceFormPhone" size="40" aria-required="1" placeholder="+7 (___) ___-__-__" data-mask="+7 (___) ___-__-__">
                                                        <label>Телефон</label>
                                                    </div>
                                                    <div class="form-ctrl">
                                                        <input type="url" name="your-site" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-url wpcf7-validates-as-url gtmPriceFormUrl" aria-invalid="false" placeholder="Сайт (www.site.ru)">
                                                        <label>Адрес сайта</label>
                                                    </div>
                                                    <div>
                                                        <button class="btn">Отправить</button>
                                                        <div>
                                                            <div class="form-ctrl">
                                                                <label class="checkbox">Я ознакомлен и согласен с <a href='/politika-konfidentsialnosti/'>Политикой в отношении обработки персональных данных</a>
                                                                    <input type="checkbox"><span class="check"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/check.svg"></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="wpcf7-response-output" aria-hidden="true"></div>

                                                    <input type="hidden" name="your-check-bot" value="" class="wpcf7-form-control wpcf7-hidden">

                                                    <div style="display: none;">
                                                        <input type="hidden" name="_wpcf7" value="<?= $formId ?>">
                                                        <input type="hidden" name="_wpcf7_version" value="5.3.2">
                                                        <input type="hidden" name="_wpcf7_locale" value="ru_RU">
                                                        <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f<?= $formId ?>-o1">
                                                        <input type="hidden" name="_wpcf7_container_post" value="0">
                                                        <input type="hidden" name="_wpcf7_posted_data_hash" value="">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>

                                    <?php endif; ?>

                                <?php endif; ?>

                                <?php get_template_part('template-parts/content'); ?>

                                <?php $post_counter++; ?>

                            <?php endwhile; ?>

                        <?php else: ?>

                            <?php get_template_part('template-parts/content', 'none'); ?>

                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pagination">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="pagination__wrapper">
                        <div class="pages">
                            <?php
                            $args = array(
                                'show_all' => false,
                                'end_size' => 3,
                                'mid_size' => 3,
                                'prev_next' => true,
                                'prev_text' => '',
                                'next_text' => '',
                                'screen_reader_text' => ''
                            );
                            ?>

                            <?php if (function_exists('antteam_navigation_markup_template')) echo antteam_navigation_markup_template($args); ?>
                        </div>
                        <div class="pages-amount"><span>Показывать по:</span>
                            <ul class="pages-amount__list">
                                <li class="pages-amount__item <?php if (!$_GET['posts_per_page'] || $_GET['posts_per_page'] == 20): ?>active<?php endif; ?>"><a href="?">20</a></li>
                                <li class="pages-amount__item <?php if ($_GET['posts_per_page'] == 50): ?>active<?php endif; ?>"><a href="?posts_per_page=50">50</a></li>
                                <li class="pages-amount__item <?php if ($_GET['posts_per_page'] == 100): ?>active<?php endif; ?>"><a href="?posts_per_page=100">100</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php

wp_reset_query();

get_footer();
?>
