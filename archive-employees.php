<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ant-team.ru
 */

get_header();
?>

    <section class="page__header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Команда Ant-Team.ru</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="employees__wrapper">
                    <div class="employees__slider">
                        <?php if (have_posts()): ?>
                            <?php while (have_posts()): the_post(); ?>

                            <?php
                            $eMeta = get_post_meta(get_the_ID());

                            if (has_post_thumbnail(get_the_ID())) {
                                $img_src = get_the_post_thumbnail_url(get_the_ID(), '343_503');
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
                                    <div class="employee__about-link">
                                        <a class="link" href="<?= esc_url(get_permalink($e->ID)) ?>"><?php if ($eMeta['name_predl'][0]): ?>об <?= $eMeta['name_predl'][0] ?><?php else: ?>о сотруднике<?php endif; ?><img src="/wp-content/themes/<?= get_template() ?>/assets/images/S_link.svg"></a>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>

                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
<?php
get_footer();