<?php
/*
Template Name: Страница одного сотрудника
*/

get_header();


$page = get_post();

$postID = get_the_ID();
$photos = array_merge((array)get_post_meta($postID, 'photos_page', false), (array)get_post_meta($postID, 'photos_page_second', false));
$videos = get_post_meta($postID, 'connected_video', false);

$pageMeta = get_post_meta($page->ID);

$employee = get_post($pageMeta['employee'][0]);
$eMeta = get_post_meta($employee->ID);

$hrono = [];
$achievments = [];

foreach($pageMeta AS $key => $value) {
    if (strpos($key, 'hrono') !== false) {
        $hrono[str_replace( 'hrono_',  '', $key)] = $value;
    }

    if (strpos($key, 'achievments') !== false) {
        if (preg_match('/achievments_(\d)_prize/', $key, $matches)) {
            $achievments[$matches[1]]['prize'] = $value[0];
        }
        if (preg_match('/achievments_(\d)_desc/', $key, $matches)) {
            $achievments[$matches[1]]['desc'] = $value[0];
        }
    }
}

?>

    <section class="alexandr">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="alexandr__wrapper">
                        <div class="alexandr__content">
                            <div class="alexandr__header">
                                <h1><?= $page->post_title ?></h1>
                                <p><?= $eMeta['role'][0] ?></p>
                            </div>
                            <div class="alexandr__desc">
                                <div class="text">
                                    <?= $pageMeta['welcome_text'][0] ?>
                                    <a class="btn btn-small" href="#takeAleksandrAnswer" data-fancybox>задать вопрос <?= $eMeta['name_dat'][0] ?></a>
                                    <a class="btn btn-small" href="tel:<?= $eMeta['phone'][0] ?? '78125092230' ?>">позвонить</a>
                                </div>
                                <?php if (has_post_thumbnail($page->ID)): ?>
                                    <?php $img_src = get_the_post_thumbnail_url($page->ID, '343_503'); ?>
                                    <div class="img"><img src=<?= $img_src ?>></div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="alexandr__form">
                            <?php get_template_part('template-parts/forms/contact-form') ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php if (count($hrono) > 0): ?>
        <section class="history">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="history__wrapper">
                            <?php
                                $total = count($hrono);
                                $current = 0;

                                for ($i = 3; $i >= 1; $i--) {
                                    $col = array_slice($hrono, $current, ceil($total / $i), true);
                                    $total -= count($col);
                                    $current += count($col);
                            ?>
                                <div class="history__item">
                                    <?php foreach($col AS $year => $list): ?>
                                        <div class="history__year"><?= $year ?></div>
                                        <ul class="history__list">
                                            <?php foreach ($list AS $l): ?>
                                                <li><?= $l ?></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    <?php endforeach; ?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php if (count($pageMeta['experience']) > 0): ?>
        <section class="experience">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="experience__wrapper">

                            <?php
                            $total = count($pageMeta['experience']);
                            $current = 0;

                            for ($i = 3; $i >= 1; $i--) {
                                $col = array_slice($pageMeta['experience'], $current, ceil($total / $i), true);
                                $total -= count($col);
                                $current += count($col);
                            ?>
                            <div class="experience__item">
                                <ul class="experience__fact">
                                    <?php foreach($col AS $l): ?>
                                    <li><?= $l ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php
        /*
        $args = [
            'posts_per_page' => 12,
            'meta_query' => [
                [
                    'key' => 'format',
                    'value' => 'case',
                ],
            ]
        ];

        $cases = get_posts($args);*/
    ?>

    <?php if (count($cases) > 0): ?>
        <section class="cases">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="cases__wrapper">
                            <div class="cases__header">
                                <div class="section__header">
                                    <h2>Публикации</h2>
                                    <div class="cases__dots slick-slider-numbers hidden-xs display-flex-lg"></div><a class="link link--more" href="/blog/?format=case">все кейсы<img src="/wp-content/themes/<?= get_template() ?>/assets/images/S_link.svg"></a>
                                </div>
                            </div>
                            <div class="cases__slider">
                                <?php foreach($cases as $post ): ?>
                                    <?php setup_postdata($post); ?>
                                    <?php get_template_part('template-parts/content'); ?>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php
        /*
        $args = [
            'posts_per_page' => 12,
            'meta_query' => [
                [
                    'key' => 'format',
                    'value' => 'article',
                ],
            ]
        ];

        $articles = get_posts($args);
        */
    ?>

    <?php if (count($articles) > 0): ?>
        <section class="articles">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="articles__header">
                            <div class="section__header">
                                <h2>Статьи</h2>
                                <div class="articles__dots slick-slider-numbers hidden-xs display-flex-lg"></div><a class="link link--more" href="/blog/?format=article">все статьи<img src="/wp-content/themes/<?= get_template() ?>/assets/images/S_link.svg"></a>
                            </div>
                        </div>
                        <div class="articles__slider">
                            <?php foreach($articles as $post ): ?>
                                <?php setup_postdata($post); ?>
                                <?php get_template_part('template-parts/content'); ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php
        /*
        $conf_arr = get_posts(
            array(
                'post_type' => 'conferences',
                'numberposts' => 6,
                'orderby' => 'date',
                'order' => 'DESC',
                'meta_key' => '',
                'meta_value' => '',
                'parent' => 0,
                'suppress_filters' => true,
                'post_status' => 'publish'
            )
        );
        */
    ?>

    <?php if (count($articles) > 0): ?>
        <section class="confs">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="confs__wrapper">
                            <div class="confs__header">
                                <div class="section__header">
                                    <h2>Конференции</h2>
                                    <div class="confs__dots slick-slider-numbers hidden-xs display-flex-lg"></div>
                                </div>
                            </div>
                            <div class="confs__slider">
                                <?php foreach ($conf_arr as $conf): ?>
                                    <?php
                                    if (has_post_thumbnail($conf->ID)) {
                                        $img_src = get_the_post_thumbnail_url($conf->ID, '460_250');
                                    }
                                    ?>

                                    <div class="confs__item">
                                        <div class="conf">
                                            <div class="conf__image"><img src="<?php echo $img_src; ?>" alt=""></div>
                                            <?php if ($conf->post_title): ?>
                                                <div class="conf__title"><?php echo $conf->post_title; ?></div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php if (count($photos) > 0): ?>
        <section class="photos">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="photos__wrapper">
                            <div class="photos__header">
                                <div class="section__header">
                                    <h2>Фотографии</h2>
                                    <div class="photos__dots slick-slider-numbers hidden-xs display-flex-lg"></div>
                                    <?php /*<a class="link link--more" href="#">все фотографии<img src="/wp-content/themes/<?= get_template() ?>/assets/images/S_link.svg"></a> */ ?>
                                </div>
                            </div>
                            <div class="photos__slider">
                                <?php foreach ($photos as $key_photo => $value_photo): ?>
                                    <div class="photos__item">
                                        <div class="photo"><a data-fancybox="gallery" href="<?php echo wp_get_attachment_image_url($value_photo['ID'], 'full'); ?>"><img src="<?php echo wp_get_attachment_image_url($value_photo['ID'], 463); ?>"></a></div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php if (count($videos) > 0): ?>
        <section class="videos">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="videos__wrapper">
                            <div class="videos__header">
                                <div class="section__header">
                                    <h2>Видео</h2>
                                    <div class="videos__dots slick-slider-numbers hidden-xs display-flex-lg"></div><?php /*<a class="link link--more" href="/blog/videos/">больше видео<img src="/wp-content/themes/<?= get_template() ?>/assets/images/S_link.svg"></a> */ ?>
                                </div>
                            </div>
                            <div class="videos__slider">
                                <?php foreach ($videos as $video): ?>
                                    <div class="videos__item">
                                        <div class="video">
                                            <figure><iframe width="100%" height="250px" src="https://www.youtube.com/embed/<?= get_post_meta($video['ID'], 'video_link', true) ?>" title="<?= $video['post_title'] ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                <figcaption><?= $video['post_title'] ?></figcaption>
                                            </figure>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php if (count($achievments) > 0): ?>
    <section class="achievments">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="achievments__header">
                        <h2>Достижения</h2>
                    </div>
                    <div class="achievments__content">
                        <?php foreach ($achievments as $a): ?>
                            <div class="achievments__item">
                                <div class="achievment">
                                    <div class="achievment__icon"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M13 28C13 29.1046 13.8954 30 15 30C16.1046 30 17 29.1046 17 28V17H28C29.1046 17 30 16.1046 30 15C30 13.8954 29.1046 13 28 13H17V2C17 0.895431 16.1046 0 15 0C13.8954 0 13 0.89543 13 2V13H2C0.895431 13 0 13.8954 0 15C0 16.1046 0.89543 17 2 17H13V28Z" fill="#FFFFFF"/></svg></div>
                                    <div class="achievment__title"><?= $a['prize'] ?></div>
                                    <div class="achievment__desc"><?= $a['desc'] ?></div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <?php if (count($pageMeta['facts']) > 0): ?>
        <section class="facts">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="facts__wrapper">
                            <div class="facts__content">
                                <div class="facts__header">
                                    <h2>Факты об <?= $eMeta['name_predl'][0] ?></h2>
                                </div>
                                <div class="facts__list">
                                    <?php foreach ($pageMeta['facts'] AS $f): ?>
                                    <div class="facts__item">
                                        <div class="fact">
                                            <div class="fact__icon"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M13 28C13 29.1046 13.8954 30 15 30C16.1046 30 17 29.1046 17 28V17H28C29.1046 17 30 16.1046 30 15C30 13.8954 29.1046 13 28 13H17V2C17 0.895431 16.1046 0 15 0C13.8954 0 13 0.89543 13 2V13H2C0.895431 13 0 13.8954 0 15C0 16.1046 0.89543 17 2 17H13V28Z" fill="#A9A5A0"/></svg></div>
                                            <div class="fact__desc"><?= $f ?></div>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <div class="facts__form">
                                <?php get_template_part('template-parts/forms/contact-form') ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

<?php
get_footer();
