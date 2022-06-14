<?php
/*
Template Name: Страница всех сотрудников
*/
get_header();

?>

<?php
    // вариант через посты с типом "employees"
    $employees = get_posts([
        'numberposts' => -1,
        'orderby' => 'date',
        'order' => 'ASC',
        'meta_key' => '',
        'meta_value' => '',
        'post_type' => 'employees',
        'parent' => 0,
        'suppress_filters' => true,
        'post_status' => 'publish',
    ]);
    /*
    // вариант через страницы в общей категории "наша команда"
    $employees = get_posts(
        array(
            'numberposts' => -1,
            'orderby' => 'date',
            'order' => 'ASC',
            'meta_key' => '',
            'meta_value' => '',
            'post_parent' => 46,
            'post_type' => 'page',
            'suppress_filters' => true,
            'post_status' => 'publish'
        )
    );
    */
?>


    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="employees__wrapper">
                    <div class="employees__header">
                        <div class="section__header">
                            <h1>Команда Ant-Team.ru</h1>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="employees__dots slick-slider-numbers hidden-xs display-flex-lg"></div>
                        </div>
                    </div>
                    <div class="employees__slider">
                        <?php if (have_posts()): ?>
                            <?php foreach ($employees AS $e): ?>

                            <?php
                            $eMeta = get_post_meta($e->ID);

                            if (has_post_thumbnail($e->ID)) {
                                $img_src = get_the_post_thumbnail_url($e->ID, '343_503');
                            } else {
                                $img_src = '';
                            }
                            ?>

                            <div class="employees__item">
                                <div class="employee">
                                    <div class="employee__photo">
                                        <img src="<?php if ($img_src): ?><?= $img_src ?><?php else: ?>/wp-content/themes/<?= get_template() ?>/assets/images/employee_placeholder.png<?php endif; ?>">
                                    </div>
                                    <div class="employee__name">
                                        <div class="first-name"><?= $eMeta['first_name'][0] ?></div>
                                        <div class="surname"><?= $eMeta['last_name'][0] ?></div>
                                    </div>
                                    <div class="employee__title"><?= $eMeta['role'][0] ?></div>
                                    <?php if ($eMeta['page_link']): ?>
                                        <div class="employee__about-link">
                                            <a class="link" href="<?= esc_url(get_permalink($eMeta['page_link'][0])) ?>"><?php if ($eMeta['name_predl'][0]): ?><?php if (in_array(mb_strtolower(mb_substr($eMeta['name_predl'][0], 0, 1)), ['а', 'о', 'у', 'э', 'и'])): ?>об<?php else: ?>о<?php endif; ?> <?= $eMeta['name_predl'][0] ?><?php else: ?>о сотруднике<?php endif; ?><img src="/wp-content/themes/<?= get_template() ?>/assets/images/S_link.svg"></a>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>

                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

<?php
get_footer();
?>
