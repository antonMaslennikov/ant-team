<?php
get_header();
$post = get_post();
include __DIR__ . '/inc/simplehtmldom/simple_html_dom.php';
?>
<?php
$content = get_the_content('читать далее');
$content = apply_filters('the_content', $content);
$html = str_get_html($content);
$h2 = $html->find('h2');
$meta = get_post_meta($post->ID);

?>

<?php /*
<section class="article__header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1><?php echo get_the_title($post->ID); ?></h1>
            </div>
        </div>
    </div>
</section>
 */
?>

<section class="article">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="article__columns">
                    <div class="article__column1">

                        <section class="article__header">
                            <div>
                                <div class="row">
                                    <div class="col-12">
                                        <h1><?php echo get_the_title($post->ID); ?></h1>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <div class="article__tags">
                            <ul>
                                <?php if ($meta['complexity'][0]): ?>
                                    <li class="mark mark--<?= strtolower($meta['complexity'][0]) ?>"><?= $meta['complexity'][0] ?></li>
                                <?php endif; ?>
                                <?php /* <li>Сайты услуг</li> */ ?>
                                <?php if ($meta['format'][0]): ?>
                                    <li><?= $POST_FORMATS[$meta['format'][0]] ?></li>
                                <?php endif; ?>
                                <?php /* <li class="tag">#здесь все в 1 строчку в край экрана, если не вошло скроллится в бок</li> */ ?>
                            </ul>
                        </div>
                        <div class="article__date">
                            <div class="card__date"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/calendar.svg"><span><?php echo get_the_date('n.j.Y', $post->ID); ?></span></div>
                            <div class="card__views"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/eye.svg"><span><?php echo number_format(getPostViews($post->ID), 0, '', ' '); ?></span></div>
                            <?php
                            /*
                            <div class="card__rating"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/rating.svg"><span>4.5</span></div>
                            <div class="card__comments-count"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/comment.svg"><span>7</span></div>
                            */
                            ?>
                            <?php if ($pm = get_the_modified_date('n.j.Y', $post->ID)): ?>
                                <div class="card__update"><span>Обновлена <?= $pm ?></span></div>
                            <?php endif; ?>
                        </div>
                        <div class="article__content">
                            <div class="article__split hidden-lg">
                                <div class="left">
                                    <div class="article__contents contents"><a class="contents__header" href="#">
                                            Содержание<svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.8494 1.735L3.86658 4.69C3.42658 5.02 3.32658 5.65 3.65658 6.09C3.85658 6.35 4.15658 6.49 4.45658 6.49C4.66658 6.49 4.87658 6.43 5.05658 6.29L7.49658 4.48416V11.5C7.49658 12.05 7.94658 12.5 8.49658 12.5C9.04658 12.5 9.49658 12.05 9.49658 11.5V4.48431L11.9364 6.29C12.1164 6.43 12.3264 6.49 12.5364 6.49C12.8364 6.49 13.1364 6.35 13.3364 6.09C13.6664 5.65 13.5664 5.02 13.1264 4.69L9.14356 1.735C9.08911 1.6886 9.03009 1.64879 8.96774 1.61583C8.82164 1.53659 8.66219 1.50092 8.50257 1.50002C8.50058 1.50001 8.49858 1.5 8.49658 1.5C8.49452 1.5 8.49245 1.50001 8.49039 1.50002C8.49238 1.50001 8.49438 1.5 8.49638 1.5M8.02522 1.61583C7.96286 1.64879 7.90385 1.6886 7.8494 1.735L8.02522 1.61583Z" fill="#2F80ED"/>
                                            </svg></a>
                                        <ul>
                                            <?php $countH2 = 0;  ?>

                                            <?php foreach ($h2 as $keyH2 => $valueH2): ?>
                                                <?php
                                                $countH2++;
                                                $valueH2->id = 'article_' . $countH2;
                                                ?>
                                                <li <?php if ($keyH2 == 0): ?>class="active"<?php endif; ?>><a href="#article_<?php echo $countH2; ?>"><?php echo $valueH2->innertext; ?></a></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                </div>
                                <div class="right">
                                    <div class="no-time__form">
                                        <h3>Нет времени читать?</h3><a class="link" data-fancybox href="#get_article_to_email_form">
                                            Отправить статью на почту<svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M13.7616 7.64718L10.8066 11.63C10.4766 12.07 9.84658 12.17 9.40658 11.84C9.14658 11.64 9.00658 11.34 9.00658 11.04C9.00658 10.83 9.06658 10.62 9.20658 10.44L11.0124 8H3.99658C3.44658 8 2.99658 7.55 2.99658 7C2.99658 6.45 3.44658 6 3.99658 6H11.0123L9.20658 3.5602C9.06658 3.3802 9.00658 3.1702 9.00658 2.9602C9.00658 2.6602 9.14658 2.3602 9.40658 2.1602C9.84658 1.8302 10.4766 1.9302 10.8066 2.3702L13.7616 6.35303C13.808 6.40747 13.8478 6.46649 13.8808 6.52884C13.96 6.67495 13.9957 6.83439 13.9966 6.99401C13.9966 6.99601 13.9966 6.998 13.9966 7C13.9966 7.00207 13.9966 7.00413 13.9966 7.0062C13.9966 7.0042 13.9966 7.0022 13.9966 7.0002M13.8808 7.47136C13.8478 7.53372 13.808 7.59273 13.7616 7.64718L13.8808 7.47136Z" fill="#2F80ED"/>
                                            </svg></a>
                                    </div>
                                </div>
                            </div>

                            <?php
                                echo $html;
                            ?>

                            <div class="article__split">
                                <div class="left">
                                    <div class="article__form">
                                        <?php $formId = 11003; ?>

                                        <div role="form" class="wpcf7" id="wpcf7-f<?= $formId ?>-o1" lang="ru-RU" dir="ltr">
                                            <form action="/" class="wpcf7-form form init feedback subscribe-form" method="post" data-status="init">
                                                <div class="form__success">
                                                    <h3>Спасибо, что подписались на рассылку!</h3>
                                                    <p>Мы будем отправлять вам только полезный контент не чаще 2 раз в месяц.</p>
                                                </div>
                                                <div class="form-ctrl">
                                                    <h3>Остались вопросы или хотите заказать продвижение?</h3>
                                                </div>
                                                <div class="form-ctrl">
                                                    <input type="text" name="your-name" placeholder="Имя (Александр)" class="wpcf7-form-control wpcf7-text gtmPriceFormName wpcf7-validates-as-required" aria-required="1" required>
                                                    <label>Имя</label>
                                                </div>
                                                <div class="form-ctrl">
                                                    <input type="tel" name="your-phone" value="" class="wpcf7-form-control wpcf7mf-mask wpcf7-mask wpcf7-validates-as-required gtmPriceFormPhone" size="40" aria-required="1" placeholder="+7 (___) ___-__-__" data-mask="+7 (___) ___-__-__" required>
                                                    <label>Phone</label>
                                                </div>
                                                <div class="form-ctrl">
                                                    <input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form__input" aria-required="true" aria-invalid="false" placeholder="Почта" required>
                                                    <label>E-mail</label>
                                                </div>
                                                <div>
                                                    <button class="btn">оставить заявку</button>
                                                    <div>
                                                        <div class="form-ctrl">
                                                            <label class="checkbox">Я ознакомлен и согласен с <a href='/politika-konfidentsialnosti/'>Политикой в отношении обработки персональных данных</a>
                                                                <input type="checkbox" name="policy" required="required"><span class="check"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/check.svg"></span>
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
                                </div>
                                <div class="right">
                                    <div class="article__form">
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
                                                    <input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text gtmPriceFormName wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Имя (Александр)" required>
                                                    <label>Имя</label>
                                                </div>
                                                <div class="form-ctrl">
                                                    <input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form__input" aria-required="true" aria-invalid="false" placeholder="Почта" required>
                                                    <label>E-mail</label>
                                                </div>
                                                <div>
                                                    <button class="btn">отправить</button>
                                                    <div>
                                                        <div class="form-ctrl">
                                                            <label class="checkbox">Я ознакомлен и согласен с <a href='/politika-konfidentsialnosti/'>Политикой в отношении обработки персональных данных</a>
                                                                <input type="checkbox" name="policy" required="required"><span class="check"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/check.svg"></span>
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
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="article__column2 hidden-xs display-block-lg">
                        <div class="article__contents contents">
                            <h3>Содержание:</h3>
                            <ul>
                                <?php $countH2 = 0;  ?>

                                <?php foreach ($h2 as $keyH2 => $valueH2): ?>
                                    <?php
                                        $countH2++;
                                        $valueH2->id = 'article_' . $countH2;
                                    ?>
                                    <li <?php if ($keyH2 == 0): ?>class="active"<?php endif; ?>><a href="#article_<?php echo $countH2; ?>"><?php echo $valueH2->innertext; ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="no-time__form">
                            <h3>Нет времени читать?</h3><a class="link" data-fancybox href="#get_article_to_email_form">
                                Отправить статью на почту<svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.7616 7.64718L10.8066 11.63C10.4766 12.07 9.84658 12.17 9.40658 11.84C9.14658 11.64 9.00658 11.34 9.00658 11.04C9.00658 10.83 9.06658 10.62 9.20658 10.44L11.0124 8H3.99658C3.44658 8 2.99658 7.55 2.99658 7C2.99658 6.45 3.44658 6 3.99658 6H11.0123L9.20658 3.5602C9.06658 3.3802 9.00658 3.1702 9.00658 2.9602C9.00658 2.6602 9.14658 2.3602 9.40658 2.1602C9.84658 1.8302 10.4766 1.9302 10.8066 2.3702L13.7616 6.35303C13.808 6.40747 13.8478 6.46649 13.8808 6.52884C13.96 6.67495 13.9957 6.83439 13.9966 6.99401C13.9966 6.99601 13.9966 6.998 13.9966 7C13.9966 7.00207 13.9966 7.00413 13.9966 7.0062C13.9966 7.0042 13.9966 7.0022 13.9966 7.0002M13.8808 7.47136C13.8478 7.53372 13.808 7.59273 13.7616 7.64718L13.8808 7.47136Z" fill="#2F80ED"/>
                                </svg></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section>
        <?php
        /*
        <div class="article__rating">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="review__rating">
                            <div class="rating">
                                <div class="rating__under-layer"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/rating.svg"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/rating.svg"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/rating.svg"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/rating.svg"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/rating.svg"></div>
                                <div class="rating__top-layer" style="width:100%"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/star.svg"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/star.svg"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/star.svg"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/star.svg"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/star.svg"></div>
                            </div>
                            <div class="rating__text">Средний рейтинг: 5 из 5 (17 голосов)</div>
                        </div>
                        <div class="review__like">
                            <h3>Понравилась статья? Оцените:</h3>
                            <div class="form-ctrl">
                                <div class="score">
                                    <label>
                                        <input type="radio" name="score" value="1"><span>1</span>
                                    </label>
                                    <label>
                                        <input type="radio" name="score" value="2"><span>2</span>
                                    </label>
                                    <label>
                                        <input type="radio" name="score" value="3"><span>3</span>
                                    </label>
                                    <label>
                                        <input type="radio" name="score" value="4"><span>4</span>
                                    </label>
                                    <label>
                                        <input type="radio" name="score" value="5"><span>5</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        */
        ?>

        <?php
            get_the_ID();
            global $post;
        ?>

        <div class="article__author">
            <div class="container">
                <div class="row">
                    <div class="col-12 author">
                        <div class="author__photo">
                            <img src="<?= get_avatar_url($post->post_author) ?>">
                        </div>
                        <div class="author__desc">
                            <div class="author__text">Автор статьи:</div>
                            <div class="author__name"><a href="<?= get_author_posts_url($post->post_author) ?>"><?php echo get_the_author_meta('display_name') ?></a></div>
                            <div class="author__title">SEO-специалист</div>
                        </div>
                        <?php
                            $otherArticles = get_posts( array(
                                'numberposts' => 2,
                                'author'    => $post->post_author,
                                'orderby'     => 'date',
                                'order'       => 'DESC',
                                'exclude'     => array(get_the_ID()),
                                'meta_key'    => '',
                                'meta_value'  =>'',
                                'post_type'   => 'post',
                                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                            ) );
                        ?>

                        <?php if (count($otherArticles) > 0): ?>
                            <div class="author__articles">
                                <div class="author__text">Другие статьи автора:</div>
                                <ul>

                                    <?php foreach ($otherArticles AS $a): ?>
                                    <li><a class="link" href="<?=get_permalink($a->ID)?>">
                                            <?=get_the_title($a->ID)?><svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M13.7616 7.64718L10.8066 11.63C10.4766 12.07 9.84658 12.17 9.40658 11.84C9.14658 11.64 9.00658 11.34 9.00658 11.04C9.00658 10.83 9.06658 10.62 9.20658 10.44L11.0124 8H3.99658C3.44658 8 2.99658 7.55 2.99658 7C2.99658 6.45 3.44658 6 3.99658 6H11.0123L9.20658 3.5602C9.06658 3.3802 9.00658 3.1702 9.00658 2.9602C9.00658 2.6602 9.14658 2.3602 9.40658 2.1602C9.84658 1.8302 10.4766 1.9302 10.8066 2.3702L13.7616 6.35303C13.808 6.40747 13.8478 6.46649 13.8808 6.52884C13.96 6.67495 13.9957 6.83439 13.9966 6.99401C13.9966 6.99601 13.9966 6.998 13.9966 7C13.9966 7.00207 13.9966 7.00413 13.9966 7.0062C13.9966 7.0042 13.9966 7.0022 13.9966 7.0002M13.8808 7.47136C13.8478 7.53372 13.808 7.59273 13.7616 7.64718L13.8808 7.47136Z" fill="#2F80ED"/>
                                            </svg></a></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="article__subscribe">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="subscribe">
                            <h4>Подпишитесь, чтобы получать информацию о публикациях</h4>
                            <div class="subscribe__socials">
                                <div class="subscribe__social"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/tg.svg"><a class="link" href="<?= THEME_OPTIONS['social-tg'] ?>">@seoantteam<img src="/wp-content/themes/<?= get_template() ?>/assets/images/S_link.svg"></a></div>
                                <?php /*<div class="subscribe__social"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/fb.svg"><a class="link" href="<?= THEME_OPTIONS['social-fb'] ?>">antteam.ru<img src="/wp-content/themes/<?= get_template() ?>/assets/images/S_link.svg"></a></div>*/ ?>
                                <div class="subscribe__social"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/yt.svg"><a class="link" href="<?= THEME_OPTIONS['social-youtube'] ?>">SEO от Ant-Team<img src="/wp-content/themes/<?= get_template() ?>/assets/images/S_link.svg"></a></div>
                                <div class="subscribe__social"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/vk.svg"><a class="link" href="<?= THEME_OPTIONS['social-vk'] ?>">ant_team_ru<img src="/wp-content/themes/<?= get_template() ?>/assets/images/S_link.svg"></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php
        $tags = get_tags( [
            'orderby'      => 'count',
            'order'        => 'DESC',
            'hide_empty'   => true,
            'fields'       => 'all',
            'pad_counts'   => false,
        ] );
        ?>

        <?php if (count($tags) > 0): ?>
            <div class="article__popular-tags">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h6>Популярные теги:</h6>
                            <ul>
                                <?php foreach (array_slice($tags, 0, 10) AS $tag): ?>
                                <li>
                                    <a class="link" href="<?= get_tag_link( $tag->term_id ) ?>">
                                        <?= $tag->name ?><svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.7616 7.64718L10.8066 11.63C10.4766 12.07 9.84658 12.17 9.40658 11.84C9.14658 11.64 9.00658 11.34 9.00658 11.04C9.00658 10.83 9.06658 10.62 9.20658 10.44L11.0124 8H3.99658C3.44658 8 2.99658 7.55 2.99658 7C2.99658 6.45 3.44658 6 3.99658 6H11.0123L9.20658 3.5602C9.06658 3.3802 9.00658 3.1702 9.00658 2.9602C9.00658 2.6602 9.14658 2.3602 9.40658 2.1602C9.84658 1.8302 10.4766 1.9302 10.8066 2.3702L13.7616 6.35303C13.808 6.40747 13.8478 6.46649 13.8808 6.52884C13.96 6.67495 13.9957 6.83439 13.9966 6.99401C13.9966 6.99601 13.9966 6.998 13.9966 7C13.9966 7.00207 13.9966 7.00413 13.9966 7.0062C13.9966 7.0042 13.9966 7.0022 13.9966 7.0002M13.8808 7.47136C13.8478 7.53372 13.808 7.59273 13.7616 7.64718L13.8808 7.47136Z" fill="#2F80ED"/>
                                        </svg>
                                    </a>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <?php
        /*
        <section class="comments-block">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="article__comments">
                            <h2>Коментарии:</h2>
                            <div class="article-comment l-0">
                                <div class="article-comment__user">
                                    <div class="user__avatar"></div>
                                    <div class="user__name">Никадим Овсянкин</div>
                                </div>
                                <div class="article-comment__text">Очень заинтересовался Вашей статьёй. Буду изучать!</div>
                                <div class="article-comment__date">22.09.2015</div>
                                <div class="article__reply"><a class="link" href="#">
                                        Ответить<svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.7616 7.64718L10.8066 11.63C10.4766 12.07 9.84658 12.17 9.40658 11.84C9.14658 11.64 9.00658 11.34 9.00658 11.04C9.00658 10.83 9.06658 10.62 9.20658 10.44L11.0124 8H3.99658C3.44658 8 2.99658 7.55 2.99658 7C2.99658 6.45 3.44658 6 3.99658 6H11.0123L9.20658 3.5602C9.06658 3.3802 9.00658 3.1702 9.00658 2.9602C9.00658 2.6602 9.14658 2.3602 9.40658 2.1602C9.84658 1.8302 10.4766 1.9302 10.8066 2.3702L13.7616 6.35303C13.808 6.40747 13.8478 6.46649 13.8808 6.52884C13.96 6.67495 13.9957 6.83439 13.9966 6.99401C13.9966 6.99601 13.9966 6.998 13.9966 7C13.9966 7.00207 13.9966 7.00413 13.9966 7.0062C13.9966 7.0042 13.9966 7.0022 13.9966 7.0002M13.8808 7.47136C13.8478 7.53372 13.808 7.59273 13.7616 7.64718L13.8808 7.47136Z" fill="#2F80ED"/>
                                        </svg></a></div>
                            </div>
                            <div class="article-comment l-1">
                                <div class="article-comment__user">
                                    <div class="user__avatar"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/user_avatar.png"></div>
                                    <div class="user__title">
                                        <div class="user__name">Никадим Овсянкин</div>
                                        <div class="user__job">SEO-специалист Ant-Team.ru</div>
                                    </div>
                                </div>
                                <div class="article-comment__text">Очень заинтересовался Вашей статьёй. Буду изучать!</div>
                                <div class="article-comment__date">22.09.2015</div>
                                <div class="article__reply"><a class="link" href="#">
                                        Ответить<svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.7616 7.64718L10.8066 11.63C10.4766 12.07 9.84658 12.17 9.40658 11.84C9.14658 11.64 9.00658 11.34 9.00658 11.04C9.00658 10.83 9.06658 10.62 9.20658 10.44L11.0124 8H3.99658C3.44658 8 2.99658 7.55 2.99658 7C2.99658 6.45 3.44658 6 3.99658 6H11.0123L9.20658 3.5602C9.06658 3.3802 9.00658 3.1702 9.00658 2.9602C9.00658 2.6602 9.14658 2.3602 9.40658 2.1602C9.84658 1.8302 10.4766 1.9302 10.8066 2.3702L13.7616 6.35303C13.808 6.40747 13.8478 6.46649 13.8808 6.52884C13.96 6.67495 13.9957 6.83439 13.9966 6.99401C13.9966 6.99601 13.9966 6.998 13.9966 7C13.9966 7.00207 13.9966 7.00413 13.9966 7.0062C13.9966 7.0042 13.9966 7.0022 13.9966 7.0002M13.8808 7.47136C13.8478 7.53372 13.808 7.59273 13.7616 7.64718L13.8808 7.47136Z" fill="#2F80ED"/>
                                        </svg></a></div>
                            </div>
                            <div class="article-comment l-1">
                                <div class="article-comment__user">
                                    <div class="user__avatar"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/user_avatar.png"></div>
                                    <div class="user__title">
                                        <div class="user__name">Никадим Овсянкин</div>
                                        <div class="user__job">SEO-специалист Ant-Team.ru</div>
                                    </div>
                                </div>
                                <div class="article-comment__text">Очень заинтересовался Вашей статьёй. Буду изучать!</div>
                                <div class="article-comment__date">22.09.2015</div>
                                <div class="article__reply"><a class="link" href="#">
                                        Ответить<svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.7616 7.64718L10.8066 11.63C10.4766 12.07 9.84658 12.17 9.40658 11.84C9.14658 11.64 9.00658 11.34 9.00658 11.04C9.00658 10.83 9.06658 10.62 9.20658 10.44L11.0124 8H3.99658C3.44658 8 2.99658 7.55 2.99658 7C2.99658 6.45 3.44658 6 3.99658 6H11.0123L9.20658 3.5602C9.06658 3.3802 9.00658 3.1702 9.00658 2.9602C9.00658 2.6602 9.14658 2.3602 9.40658 2.1602C9.84658 1.8302 10.4766 1.9302 10.8066 2.3702L13.7616 6.35303C13.808 6.40747 13.8478 6.46649 13.8808 6.52884C13.96 6.67495 13.9957 6.83439 13.9966 6.99401C13.9966 6.99601 13.9966 6.998 13.9966 7C13.9966 7.00207 13.9966 7.00413 13.9966 7.0062C13.9966 7.0042 13.9966 7.0022 13.9966 7.0002M13.8808 7.47136C13.8478 7.53372 13.808 7.59273 13.7616 7.64718L13.8808 7.47136Z" fill="#2F80ED"/>
                                        </svg></a></div>
                            </div>
                            <div class="article-comment l-2">
                                <div class="article-comment__user">
                                    <div class="user__avatar"></div>
                                    <div class="user__name">Никадим Овсянкин</div>
                                </div>
                                <div class="article-comment__text">Очень заинтересовался Вашей статьёй. Буду изучать!</div>
                                <div class="article-comment__date">22.09.2015</div>
                                <div class="article__reply"><a class="link" href="#">
                                        Ответить<svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.7616 7.64718L10.8066 11.63C10.4766 12.07 9.84658 12.17 9.40658 11.84C9.14658 11.64 9.00658 11.34 9.00658 11.04C9.00658 10.83 9.06658 10.62 9.20658 10.44L11.0124 8H3.99658C3.44658 8 2.99658 7.55 2.99658 7C2.99658 6.45 3.44658 6 3.99658 6H11.0123L9.20658 3.5602C9.06658 3.3802 9.00658 3.1702 9.00658 2.9602C9.00658 2.6602 9.14658 2.3602 9.40658 2.1602C9.84658 1.8302 10.4766 1.9302 10.8066 2.3702L13.7616 6.35303C13.808 6.40747 13.8478 6.46649 13.8808 6.52884C13.96 6.67495 13.9957 6.83439 13.9966 6.99401C13.9966 6.99601 13.9966 6.998 13.9966 7C13.9966 7.00207 13.9966 7.00413 13.9966 7.0062C13.9966 7.0042 13.9966 7.0022 13.9966 7.0002M13.8808 7.47136C13.8478 7.53372 13.808 7.59273 13.7616 7.64718L13.8808 7.47136Z" fill="#2F80ED"/>
                                        </svg></a></div>
                            </div>
                            <div class="article-comment l-0">
                                <div class="article-comment__user">
                                    <div class="user__avatar"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/user_avatar.png"></div>
                                    <div class="user__title">
                                        <div class="user__name">Никадим Овсянкин</div>
                                        <div class="user__job">SEO-специалист Ant-Team.ru</div>
                                    </div>
                                </div>
                                <div class="article-comment__text">Очень заинтересовался Вашей статьёй. Буду изучать!</div>
                                <div class="article-comment__date">22.09.2015</div>
                                <div class="article__reply"><a class="link" href="#">
                                        Ответить<svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.7616 7.64718L10.8066 11.63C10.4766 12.07 9.84658 12.17 9.40658 11.84C9.14658 11.64 9.00658 11.34 9.00658 11.04C9.00658 10.83 9.06658 10.62 9.20658 10.44L11.0124 8H3.99658C3.44658 8 2.99658 7.55 2.99658 7C2.99658 6.45 3.44658 6 3.99658 6H11.0123L9.20658 3.5602C9.06658 3.3802 9.00658 3.1702 9.00658 2.9602C9.00658 2.6602 9.14658 2.3602 9.40658 2.1602C9.84658 1.8302 10.4766 1.9302 10.8066 2.3702L13.7616 6.35303C13.808 6.40747 13.8478 6.46649 13.8808 6.52884C13.96 6.67495 13.9957 6.83439 13.9966 6.99401C13.9966 6.99601 13.9966 6.998 13.9966 7C13.9966 7.00207 13.9966 7.00413 13.9966 7.0062C13.9966 7.0042 13.9966 7.0022 13.9966 7.0002M13.8808 7.47136C13.8478 7.53372 13.808 7.59273 13.7616 7.64718L13.8808 7.47136Z" fill="#2F80ED"/>
                                        </svg></a></div>
                            </div>
                        </div>
                        <div class="article__leave-comment">
                            <form class="subscribe-form">
                                <div class="form__success">
                                    <h3>Спасибо за комментарий</h3>
                                </div>
                                <div class="form-ctrl">
                                    <h3>Оставьте комментарий</h3>
                                </div>
                                <div class="form-ctrl">
                                    <textarea placeholder="inside hint"></textarea>
                                    <label>Комментарий</label>
                                </div>
                                <div class="form-ctrl">
                                    <input type="text" placeholder="inside hint">
                                    <label>Имя</label>
                                </div>
                                <div class="form-ctrl">
                                    <input type="text" placeholder="inside hint">
                                    <label>E-mail</label>
                                </div>
                                <div class="form-ctrl">
                                    <div class="socials__comments">Комментировать через соцсети</div>
                                    <ul class="socials__list">
                                        <li class="socials__item"><a class="socials__link" href="#"><svg width="20" height="20" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.6557 3.60343C14.7599 3.2557 14.6557 3 14.1594 3H12.5186C12.101 3 11.9088 3.22074 11.8047 3.4643C11.8047 3.4643 10.97 5.49893 9.78796 6.82004C9.40544 7.20273 9.23129 7.32434 9.02284 7.32434C8.91858 7.32434 8.7676 7.20273 8.7676 6.85501V3.60343C8.7676 3.1862 8.64641 3 8.29865 3H5.72001C5.45931 3 5.30241 3.19355 5.30241 3.37731C5.30241 3.77328 5.89361 3.86404 5.95419 4.97711V7.39384C5.95419 7.9238 5.85865 8.0201 5.64996 8.0201C5.09384 8.0201 3.74047 5.97627 2.93803 3.6384C2.78065 3.18388 2.62296 3 2.20347 3H0.562368C0.0935381 3 0 3.22074 0 3.4643C0 3.89901 0.556122 6.05513 2.59035 8.90654C3.94636 10.8541 5.85676 11.91 7.59529 11.91C8.63863 11.91 8.7676 11.6755 8.7676 11.2714V9.79977C8.7676 9.33088 8.86613 9.23721 9.19675 9.23721C9.43997 9.23721 9.85757 9.35885 10.831 10.2977C11.9437 11.4108 12.1272 11.91 12.7529 11.91H14.394C14.8629 11.91 15.0975 11.6755 14.9619 11.2127C14.8143 10.7515 14.2829 10.0825 13.5779 9.28923C13.1952 8.83707 12.6216 8.35022 12.4479 8.10677C12.2045 7.79402 12.274 7.65458 12.4479 7.37683C12.4479 7.37683 14.4473 4.55992 14.6557 3.60343Z" fill="#2F80ED"/>
                                                </svg></a></li>
                                        <li class="socials__item"><a class="socials__link" href="#"><svg width="20" height="20" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M7.5 0C3.35795 0 0 3.35795 0 7.5C0 11.2602 2.76989 14.3649 6.37909 14.9073V9.48784H4.52352V7.51636H6.37909V6.20455C6.37909 4.03261 7.43727 3.07909 9.24239 3.07909C10.1069 3.07909 10.5641 3.14318 10.7806 3.1725V4.89341H9.5492C8.78284 4.89341 8.51523 5.61989 8.51523 6.43875V7.51636H10.7611L10.4564 9.48784H8.51523V14.9233C12.1759 14.4266 15 11.2967 15 7.5C15 3.35795 11.642 0 7.5 0Z" fill="#2F80ED"/>
                                                </svg></a></li>
                                        <li class="socials__item"><a class="socials__link" href="#"><svg width="20" height="20" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M14.7158 0.689549C14.4599 0.472573 14.058 0.441528 13.6425 0.608354H13.6418C13.2048 0.783708 1.27113 5.90242 0.785324 6.11155C0.696964 6.14225 -0.0747316 6.43019 0.00475789 7.07156C0.0757185 7.64982 0.695941 7.88932 0.771678 7.91695L3.80558 8.95577C4.00687 9.6258 4.74888 12.0978 4.91298 12.6259C5.01532 12.9552 5.18215 13.3877 5.47452 13.4768C5.73107 13.5757 5.98626 13.4853 6.15138 13.3557L8.00624 11.6352L11.0006 13.9704L11.0719 14.0131C11.2752 14.1031 11.47 14.1482 11.6559 14.1482C11.7996 14.1482 11.9374 14.1212 12.0691 14.0673C12.5177 13.8831 12.6971 13.4556 12.7159 13.4072L14.9525 1.78159C15.089 1.16069 14.8993 0.844775 14.7158 0.689549ZM6.48127 9.3713L5.4578 12.1006L4.43433 8.68899L12.2809 2.88933L6.48127 9.3713Z" fill="#2F80ED"/>
                                                </svg></a></li>
                                    </ul>
                                </div>
                                <div>
                                    <button class="btn">отправить</button>
                                    <div>
                                        <div class="form-ctrl">
                                            <label class="checkbox">Я ознакомлен и согласен с <a href='#'>Политикой в отношении обработки персональных данных</a>
                                                <input type="checkbox"><span class="check"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/check.svg"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        */
        ?>

        <div class="article__share-idea">
            <div class="suggest">
                <h3>Есть тема для статьи?</h3>
                <p><a class="link" data-fancybox href="#modal-article-theme">
                        прислать идею<svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.7616 7.64718L10.8066 11.63C10.4766 12.07 9.84658 12.17 9.40658 11.84C9.14658 11.64 9.00658 11.34 9.00658 11.04C9.00658 10.83 9.06658 10.62 9.20658 10.44L11.0124 8H3.99658C3.44658 8 2.99658 7.55 2.99658 7C2.99658 6.45 3.44658 6 3.99658 6H11.0123L9.20658 3.5602C9.06658 3.3802 9.00658 3.1702 9.00658 2.9602C9.00658 2.6602 9.14658 2.3602 9.40658 2.1602C9.84658 1.8302 10.4766 1.9302 10.8066 2.3702L13.7616 6.35303C13.808 6.40747 13.8478 6.46649 13.8808 6.52884C13.96 6.67495 13.9957 6.83439 13.9966 6.99401C13.9966 6.99601 13.9966 6.998 13.9966 7C13.9966 7.00207 13.9966 7.00413 13.9966 7.0062C13.9966 7.0042 13.9966 7.0022 13.9966 7.0002M13.8808 7.47136C13.8478 7.53372 13.808 7.59273 13.7616 7.64718L13.8808 7.47136Z" fill="#2F80ED"/>
                        </svg></a></p>
            </div>
        </div>


        <?php
//        if ( ( is_single() || is_page() ) && ( comments_open() || get_comments_number() ) && ! post_password_required() ) {
//            ?>
<!---->
<!--            <div class="comments-wrapper section-inner">-->
<!---->
<!--                --><?php //comments_template(); ?>
<!---->
<!--            </div><!-- .comments-wrapper -->-->
<!---->
<!--            --><?php
//        }
        ?>
    </section>
</section>

<div class="order-form modal-form" id="get_article_to_email_form" style="display:none;">
    <?php $formId = 11131; ?>

    <div role="form" class="wpcf7" id="wpcf7-f<?= $formId ?>-o1" lang="ru-RU" dir="ltr">
        <form action="/" class="wpcf7-form form init feedback" method="post" data-status="init">
            <div class="form__success">
                <h3>Заявка принята</h3>
                <p>Мы отправим вам статью на почту в ближайшее время.</p>
            </div>
            <span class="form__title">Отправить статью на почту</span>
            <p class="form__desc"></p>
            <div class="form-ctrl">
                <input type="text" name="your-name" placeholder="Имя (Александр)" class="wpcf7-form-control wpcf7-text gtmPriceFormName  wpcf7-validates-as-required" aria-required="true" required>
                <label>Имя</label>
            </div>
            <div class="form-ctrl">
                <input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" required>
                <label>E-mail</label>
            </div>
            <div>
                <button class="btn">Отправить</button>
                <div>
                    <div class="form-ctrl">
                        <label class="checkbox">Я ознакомлен и согласен с <a href='/politika-konfidentsialnosti/'>Политикой в отношении обработки персональных данных</a>
                            <input type="checkbox" required="required" name="policy"><span class="check"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/check.svg"></span>
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
            <input type="hidden" name="article" value="<?= the_permalink() ?>">
        </form>
    </div>
</div>


<?php
get_footer();
?>
