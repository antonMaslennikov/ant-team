<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package ant-team.ru
 */

get_header();
?>

	<div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="big-text">Ошибка 404</div>
                    <div class="small-text">Ant-Team, у нас проблемы. Перейти на <a href="/">Главную</a></div>
                </div>
            </div>
    </div>
<style>
    .big-text {
        font-size: 50px;
        text-align: center;
        padding: 150px 0 0;
        color: #8ed0ef;
    }

    .small-text {
        text-align:center;
        padding: 0 0 200px 0;
    }
</style>
<?php
get_footer();
