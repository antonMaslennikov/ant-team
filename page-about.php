<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ant-team.ru
 */

get_header();
$postID = get_the_ID();
$videos = get_post_meta(5472, 'video_link', false);
$photos = get_post_meta(5421, 'photos_page', false);
$photos2 = get_post_meta(5421, 'photos_page_second', false);

$PageID = 5421;
?>

    <section class=" tehnicheski-audit__bg semanticheskie-yadra__bg title__section page_about" id="top-picture-action">
        <div class="shadow-wrapp">
            <div class="container">
                <div class="row">

                    <div class="col-12 col-md-6 col-lg-8">
                        <div class="bread-crumbs">


                            <?php
                            if (function_exists('yoast_breadcrumb')) :
                                yoast_breadcrumb(' <nav aria-label="breadcrumb">', '</nav>');
                            endif;
                            ?>

                        </div>
                        <div class="top-section-container">

                            <h1 class="top-section_h1 h1_page_about">
                                Александр Чепукайтис, <br>
                                руководитель Ant-Team.ru
                            </h1>

                            <span class="btn top-section_btn" data-toggle="modal"
                                  data-target="#modalTakeOfferFormSemant">
                            Задать вопрос
                        </span>
                            <a href="tel:+78125092230" class="btn top-section_btn phone" data-toggle="modal">
                                <i class="fa fa-phone-square" aria-hidden="true"></i> Позвонить
                            </a>
                            <a href="mailto:che@ant-team.ru" class="top-section-link">
                                che@ant-team.ru
                            </a>
                            <a href="https://www.facebook.com/chepukaytis/" rel="nofollow,noindex" class="top-section-link facebook">
                                <i class="fa fa-facebook-square"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 title__section-content">
                        <span class="content-list_title">Содержание:</span>
                        <ul class="content-list">
                            <li><a href="#information">Информация</a></li>
                            <li><a href="#conferences">Конференции</a></li>
                            <li><a href="#achievements">Достижения</a></li>
                            <li><a href="#facts">Факты</a></li>
                            <li><a href="#publications">Публикации</a></li>
                            <li><a href="#videos">Видео</a></li>
                            <li><a href="#feedback">Есть вопросы?</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="info page_about" id="information">
        <div class="container">
            <div class="row">
                <div class="info__wrapper">
                    <div class="info__photo"><img src="/wp-content/uploads/2021/02/alexsandr.jpg" alt=""></div>
                    <div class="info__content">
                        <h3>ИНФОРМАЦИЯ</h3>
                        <?php the_content(); ?>
                    </div>

                </div>
            </div>
        </div>

    </section>

    <section class="conf page_about" id="conferences">
        <div class="container">
            <div class="row">
                <?php
                $conf_arr = get_posts(
                    array(
                        'numberposts' => -1,
                        'orderby' => 'date',
                        'order' => 'DESC',
                        'meta_key' => '',
                        'meta_value' => '',
                        'post_type' => 'conferences',
                        'parent' => 0,
                        'suppress_filters' => true,
                        'post_status' => 'publish'
                    )
                );
                ?>
                <div class="section__title revealator-slideup revealator-delay1 revealator-once revealator-below"><h2>Конференции</h2></div>
                <div class="section__description revealator-slideup revealator-delay1 revealator-once revealator-below"><p>Провел около 50 выступлений на различных конференциях и вебинарах.
                        Среди них практически все наиболее значимые в России мероприятия в сегменте SEO.</p></div>
            </div>

                <div class="row ">
                    <?php foreach ($conf_arr as $conf) {
                        $confId = $conf->ID;

                        $conf_date = get_post_meta($confId, 'item_date', true);
                        /*     	echo "<pre>";
                                         var_dump($conf_arr);
                                         echo "</pre>";*/
                        ?>
                        <?php
                        if (has_post_thumbnail($confId)) {
                            $img_src = get_the_post_thumbnail_url($confId, '160_100');
                        }
                        ?>
                        <div class="conf__item col-md-2 revealator-slideup revealator-delay1 revealator-once revealator-below">
                            <div class="conf__item-date"><?php echo $conf_date; ?></div>
                            <div class="conf__item-title"><?php echo $conf->post_title; ?>
                            </div>
                            <div class="conf__item-logo"><img src="<?php echo $img_src; ?>" alt=""></div>
                        </div>

                        <?php
                    } ?>


                </div>
        </div>
                <div class="conf-grid__wrapper">


                    <div class="conf-grid">
                        <?php
                        $i = 1;
                        $numsize=[
                                0,
                            '246_271',
                            '174_271',
                            '296_221',
                            '121_221',
                            '419_496',
                            '271_146',
                            '271_146',
                            '271_196',
                        ];
                        foreach ($photos as $key_photo => $value_photo) {

                            if ($i == 1 || $i == 5 || $i == 6) {
                                ?> <div class="conf-grid-gallery_col conf-grid-gallery_col-type-<?=$i?>"><?
                            }
                            ?>

                            <div class="gallery__item gallery__item-type-<?=$i?>">
                                <a href="<?php echo wp_get_attachment_image_url($value_photo['ID'], 'full'); ?>"
                                   data-fancybox="gallery">

                                    <img alt="<?php echo get_the_title($postID) . ' ' . $key_photo ?>"
                                         src="<?php echo wp_get_attachment_image_url($value_photo['ID'], $numsize[$i]); ?>">
                                    <!--  <div style="background: url('<?php echo wp_get_attachment_url($photos[0]['ID']); ?>')">	1</div> -->
                                </a>
                            </div>


                            <?php

                            if (($i == 4 || $i == 5 || $i == 8) || (array_key_last($photos) == $key_photo )) {
                                ?> </div><?
                            }

                            if ($i == 8) {
                                $i = 0;
                            }
                            $i++;

                        } ?>


                        <!-- second grid -->
                    </div>
                    <?php
                    // echo "<pre>";
                    // var_dump($photos[0]['ID']);
                    // echo "</pre>";
                    ?>


                </div>

            </div><!-- row -->

    </section>

    <section class="achievements page-about" id="achievements" >
        <div class="container">
            <div class="row">
                <div class="section__title revealator-slideup revealator-delay1 revealator-once revealator-below"><h2>Достижения</h2></div>
                <div class="achievements__wrapper">
                    <div class="achievements__item revealator-slideup revealator-delay1 revealator-once revealator-below">
                        <div class="achievements__item-title">1 место в конкурсе</div>
                        <div class="achievements__item-logo"><i class="fa fa-fire" aria-hidden="true"></i></div>
                        <div class="achievements__item-descr">Победитель конкурса от PromoPult «Я-Агентство: управление
                            бизнесом в формате реалити».
                        </div>
                    </div>
                    <div class="achievements__item revealator-slideup revealator-delay1 revealator-once revealator-below">
                        <div class="achievements__item-title">Популярный спикер</div>
                        <div class="achievements__item-logo"><i class="fa fa-user" aria-hidden="true"></i></div>
                        <div class="achievements__item-descr">На конференции Optimization-2019 среди более чем 70
                            спикеров занял 6 место по оценке зрителей.
                        </div>
                    </div>
                    <div class="achievements__item revealator-slideup revealator-delay1 revealator-once revealator-below">
                        <div class="achievements__item-title">Перевод асессорской инструкции</div>
                        <div class="achievements__item-logo"><i class="fa fa-exchange" aria-hidden="true"></i></div>
                        <div class="achievements__item-descr">Организовал перевод полной версии Руководства для
                            асессоров Google на русский язык и выложил его в общий доступ.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="facts" id="facts">
        <div class="container">
            <div class="section__title revealator-slideup revealator-delay1 revealator-once revealator-below"><h2>Факты</h2></div>
            <div class="row">
                <div class="facts__wrapper">
                    <div class="facts__item revealator-slideup revealator-delay1 revealator-once revealator-below">
                        <div class="facts__item-title ">Квалификация</div>
                        <div class="facts__item-descr">Над проектом одновременно работают специалисты разного уровня
                        </div>
                    </div>

                    <div class="facts__item revealator-slideup revealator-delay1 revealator-once revealator-below">
                        <div class="facts__item-title">Квалификация</div>
                        <div class="facts__item-descr">Над проектом одновременно работают специалисты разного уровня
                        </div>
                    </div>

                    <div class="facts__item revealator-slideup revealator-delay1 revealator-once revealator-below">
                        <div class="facts__item-title">Квалификация</div>
                        <div class="facts__item-descr">Над проектом одновременно работают специалисты разного уровня
                        </div>
                    </div>

                    <div class="facts__item revealator-slideup revealator-delay1 revealator-once revealator-below">
                        <div class="facts__item-title">Квалификация</div>
                        <div class="facts__item-descr">Над проектом одновременно работают специалисты разного уровня
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="publications page-about" id="publications" >
        <div class="container">
            <div class="publications-right_link revealator-slideup revealator-delay1 revealator-once revealator-below"><a href="/blog/">Смотреть публикации в блоге Ant-Team.ru</a></div>
            <div class="row">
                <div class="col-12">
                    <div class="section__title revealator-slideup revealator-delay1 revealator-once revealator-below">
                        <h2>Публикации</h2>
                    </div>
                </div>
            </div>



                <?php
                $publications_arr = get_posts(
                    array(
                        'numberposts' => -1,
                        'orderby' => 'date',
                        'order' => 'DESC',
                        'meta_key' => '',
                        'meta_value' => '',
                        'post_type' => 'publications',
                        'parent' => 0,
                        'suppress_filters' => true,
                        'post_status' => 'publish'
                    )
                );
                ?>


                <div class="row">
                    <?php
                    $i=0;
                    foreach ($publications_arr as $publication) {
                        $i++;
                        $publicationId = $publication->ID;
                        $publication_link_source = get_post_meta($publicationId, 'source_name', true);
                        $publication_class_icon = get_post_meta($publicationId, 'class_icon', true);
                        $publication_out_link = get_post_meta($publicationId, 'out_link', true);
                        // var_dump($publications_arr);

                        ?>
                        <div class="publications__item <?= !(($i % 2) == 0)?'offset-md-2':'';?> col-md-4 revealator-slideup revealator-delay1 revealator-once revealator-below">
                            <div class="publications__item-img">
                                <a href="<?=$publication_out_link ?>">
                                    <i class="fa <?=$publication_class_icon?>" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div class="publications__item-content">
                                <div class="publications__item-link"><?php echo $publication_link_source; ?></div>
                                <div class="publications__item-title">
                                    <a href="<?=$publication_out_link ?>"><?php echo $publication->post_title; ?></a>
                                </div>
                            </div>
                        </div>

                        <?php
                    } ?>


                </div>

        </div>
    </section>

    <section class="videos" id="videos">
        <?php
        $videos_arr = get_posts(
            array(
                'numberposts' => -1,
                'orderby' => 'date',
                'order' => 'DESC',
                'meta_key' => '',
                'meta_value' => '',
                'post_type' => 'videos',
                'parent' => 0,
                'suppress_filters' => true,
                'post_status' => 'publish'
            )
        );
        ?>
        <div class="section__title revealator-slideup revealator-delay1 revealator-once revealator-below"><h2>Видео</h2></div>
        <div class="container">

            <div class="videos__wrapper">
                <?php foreach ($videos_arr as $video) {
                    $videoId = $video->ID;
                    $video_link = get_post_meta($videoId, 'video_link', true);
                    var_dump($video_link);
                    ?>
                    <div class="videos__wrapper-item revealator-slideup revealator-delay1 revealator-once revealator-below">
                        <iframe width="480" height="315" src="https://www.youtube.com/embed/<?php echo $video_link ?>"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        <div class="videos__wrapper-item_descr"><p><?= $video->post_title?></p></div>
                    </div>
                    <?php
                } ?>


            </div>
        </div>
    </section>

    <section class="feedback revealator-slideup revealator-delay1 revealator-once revealator-below" id="feedback">
        <div class="container">
            <div class="row">
                <div class="section__title"><h3>Есть вопросы?</h3></div>


                <?php echo do_shortcode('[contact-form-7 id="5431" title="have_questions"]'); ?>
            </div>
        </div>
    </section>
<script>
    $=jQuery;
</script>
    <link rel="stylesheet" href="/wp-content/themes/<?= get_template() ?>/update.css">
    <link rel="stylesheet" href="/wp-content/themes/ant-team-ru/assets/libs/revealator/fm.revealator.jquery.min.css">
    <script src="/wp-content/themes/ant-team-ru/assets/libs/revealator/fm.revealator.jquery.min.js"></script>
<?php

get_footer();
