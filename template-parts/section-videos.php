<section class="videos">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="videos__wrapper">
                    <div class="videos__header">
                        <div class="section__header">
                            <h2>Видео</h2>
                            <div class="videos__dots slick-slider-numbers hidden-xs display-flex-lg"></div>
<!--                            <a class="link link--more" href="#">больше видео<img src="/wp-content/themes/--><?//= get_template() ?><!--/assets/images/S_link.svg"></a>-->
                        </div>
                    </div>
                    <div class="videos__slider">
                        <?php foreach ($videos AS $v): ?>
                        <div class="videos__item">
                            <div class="video">
                                <figure>
                                    <iframe width="100%" height="250px" src="<?= $v['code'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <figcaption><?= $v['title'] ?></figcaption>
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