<?php
    $meta = get_post_meta(get_the_ID());
    $category = get_the_category();
?>
<div <?php /*articles__item*/ ?> <?php post_class('content__item cases__item'); ?> id="post-<?php the_ID(); ?>">
    <div class="card <?php if ($meta['format'][0] != 'case'): ?>card--bordered<?php endif; ?>">
        <?php if ($img = get_the_post_thumbnail_url(get_the_ID(),'blog_middle')): ?>
            <a href="<?= esc_url( get_permalink()) ?>" class="card__picture"><img src="<?= $img ?>"></a>
        <?php endif; ?>

        <div class="card__content">
            <div class="card__theme">
                <ul>
                    <?php if ($category[0]->term_id > 1): ?>
                        <li><?= $category[0]->name ?></li>
                    <?php endif; ?>

                    <?php if ($meta['format'][0]): ?>
                    <li>
                        <?php
                        switch ($meta['format'][0]) {
                            case 'instruction':
                                echo 'Инструкция';
                                break;
                            case 'article':
                                echo 'Статья';
                                break;
                            case 'study':
                                echo 'Исследование';
                                break;
                            case 'case':
                                echo 'Кейс';
                                break;
                            case 'check-list':
                                echo 'Чек-лист';
                                break;
                            case 'patent':
                                echo 'Патент';
                                break;
                            case 'test':
                                echo 'Тест';
                                break;
                            case 'interview':
                                echo 'Интервью';
                                break;
                        }
                        ?>
                    </li>
                    <?php endif; ?>
                </ul>
            </div>
            <a class="card__title" href="<?= esc_url( get_permalink()) ?>"><?= the_title(); ?></a>
            <a class="card__link" href="<?= esc_url( get_permalink()) ?>">читать
              <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M13.7616 7.64718L10.8066 11.63C10.4766 12.07 9.84658 12.17 9.40658 11.84C9.14658 11.64 9.00658 11.34 9.00658 11.04C9.00658 10.83 9.06658 10.62 9.20658 10.44L11.0124 8H3.99658C3.44658 8 2.99658 7.55 2.99658 7C2.99658 6.45 3.44658 6 3.99658 6H11.0123L9.20658 3.5602C9.06658 3.3802 9.00658 3.1702 9.00658 2.9602C9.00658 2.6602 9.14658 2.3602 9.40658 2.1602C9.84658 1.8302 10.4766 1.9302 10.8066 2.3702L13.7616 6.35303C13.808 6.40747 13.8478 6.46649 13.8808 6.52884C13.96 6.67495 13.9957 6.83439 13.9966 6.99401C13.9966 6.99601 13.9966 6.998 13.9966 7C13.9966 7.00207 13.9966 7.00413 13.9966 7.0062C13.9966 7.0042 13.9966 7.0022 13.9966 7.0002M13.8808 7.47136C13.8478 7.53372 13.808 7.59273 13.7616 7.64718L13.8808 7.47136Z" fill="#2F80ED"/>
              </svg>
            </a>
            <div class="card__desc"><?php echo wp_trim_words(strip_tags(get_the_content()), 30, ' (...)'); ?></div>
                <?php if( $post_tags = wp_get_post_tags( get_the_ID() ) ): ?>
                    <div class="card__tags">
                        <div>
                            <?php foreach ( $post_tags as $post_tag ): ?>
                                #<?= $post_tag->name ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>
        </div>
        <div class="card__footer">
            <div class="card__date"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/calendar.svg"><span><?php echo get_the_date('n.j.Y'); ?></span></div>
            <div class="card__views"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/eye.svg"><span><?php echo getPostViews(get_the_ID()); ?></span></div>
            <?php /* $comments_count = wp_count_comments(get_the_ID()); <div class="card__rating"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/rating.svg"><span>4.5</span></div> */ ?>
            <?php /*<div class="card__comments-count"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/comment.svg"><span><?php echo $comments_count->approved; ?></span></div> */ ?>
        </div>
    </div>
</div>
