<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ant-team.ru
 */

get_header();

$post = get_post();
?>

    <section class="page__header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1><?php echo get_the_title($post->ID); ?></h1>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php echo get_the_content() ?>
            </div>
        </div>
    </div>

<?php
get_footer();
