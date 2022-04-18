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
                    <h1>Видео</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php if (have_posts()): ?>
                    <?php while (have_posts()): the_post(); ?>
                        <div class="videos__item">
                            <div class="video">
                                <figure><iframe height="250px" src="https://www.youtube.com/embed/<?= get_post_meta(get_the_ID(), 'video_link', true) ?>" title="<?= get_the_title() ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <figcaption><?= $video->post_title ?></figcaption>
                                </figure>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php
get_footer();