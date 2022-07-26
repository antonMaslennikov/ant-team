<?php
get_header();
?>

<section class="audit">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="audit__wrapper">
                    <div class="audit__content">
                        <h1>Составление ссылочной стратегии</h1>
                        <p>Разработаем уникальную ссылочную стратегию под ваш проект на основе анализа конкурентов: сколько нужно получить ссылок, с каких ресурсов и с какой скоростью. Предложим ссылочную стратегию как для русскоязычного сегмента, так и для иностранного.</p>
                        <div class="audit__price"><span>от 20 000 руб. для русскоязычного сегмента</span></div>
                        <div class="audit__price"><span>от 45 000 руб. для иностранного сегмента</span></div>
                    </div>
                    <div class="audit__form">
                        <?php
                            set_query_var( 'contact_form_title', '' );
                            set_query_var( 'contact_form_text', '' );
                            get_template_part('template-parts/forms/contact-form')
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="navigation">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="navigation__wrapper">
                    <ul class="navigation__list">
                        <li class="navigation__item"><a class="navigation__link link" href="#sec-what">Что вы получите</a></li>
                        <li class="navigation__item"><a class="navigation__link link" href="#sec-faq">FAQ</a></li>
                        <li class="navigation__item"><a class="navigation__link link" href="#sec-who">Кто выполняет услугу</a></li>
                        <li class="navigation__item"><a class="navigation__link link" href="#sec-workflow">Порядок работы</a></li>
                        <li class="navigation__item"><a class="navigation__link link" href="#sec-why">Почему мы</a></li>
                        <li class="navigation__item"><a class="navigation__link link" href="#sec-tariffs">Тарифы</a></li>
                        <li class="navigation__item"><a class="navigation__link link" href="#sec-dop_services">Дополнительные услуги</a></li>
                        <li class="navigation__item"><a class="navigation__link link" href="#sec-advices">Статьи</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="what-check" id="sec-what">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="what-check__wrapper">
                    <div class="what-check__header">
                        <h2>Что вы получите</h2>
                    </div>
                    <div class="what-check__slider">
                        <div class="what-check__item">
                            <div class="check-list">
                                <div class="check-list__title"></div>
                                <ul class="check-list__list">
                                    <li>Подробный документ с анализом ссылочного профиля ваших конкурентов. Вы можете уже сейчас ознакомиться с <a href="https://docs.google.com/document/d/1rE5JZlOZyqanFmfRgaYVnot3wLiiUpeq/edit?usp=sharing&ouid=113204591557958614432&rtpof=true&sd=true" target="_blank">примером составленной нами ссылочной стратегии</a>.</li>
                                    <li>Конкретные цифры по соотношению видов ссылок для развития вашего ссылочного профиля.</li>
                                    <li>Приоритизация действий с учетом особенностей проекта и на основе анализа ваших конкурентов.</li>
                                    <li>Ответы на ваши вопросы по ссылочной стратегии со стороны опытных SEO-специалистов.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="faq faq--full-size" id="sec-faq">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="faq__wrapper">
                    <div class="faq__content">
                        <div class="faq__header">
                            <h2>FAQ</h2>
                        </div>
                        <ul class="collapsed">
                            <li class="active"><span>Зачем нужна ссылочная стратегия?<img src="/wp-content/themes/<?= get_template() ?>/assets/images/B_expand.svg"></span>
                                <div>Наличие внешних ссылок на сайт влияет на ранжирование сайта в любой поисковой системе. Без продуманного плана закупки/размещения ссылок, можно не только не помочь развитию сайта, но и навредить его ранжированию.</div>
                            </li>
                            <li><span>Я хочу выйти на иностранный рынок, нужна ли для этого ссылочная стратегия?<img src="/wp-content/themes/<?= get_template() ?>/assets/images/B_expand.svg"></span>
                                <div>Да, Google особенно тщательно следит за развитием ссылочного профиля при ранжировании сайта. Однако, если вы только начинаете двигаться в этом направлении, можете обратиться к нам за <a href="/entering-the-foreign-market/" target="_blank">помощью при выходе на иностранный рынок</a>. Развивать ссылочный профиль нужно, но сначала необходимо провести базовые работы на сайте.</div>
                            </li>
                            <li><span>Можете ли вы помочь с реализацией стратегии?<img src="/wp-content/themes/<?= get_template() ?>/assets/images/B_expand.svg"></span>
                                <div>Да, вы можете обратиться к нам за полноценным SEO-продвижением сайта, в рамках которого мы поможем реализовать составленную нами ссылочную стратегию.</div>
                            </li>
                            <li><span>Если у меня уже много ссылок на сайт, нужна ли мне ссылочная стратегия?<img src="/wp-content/themes/<?= get_template() ?>/assets/images/B_expand.svg"></span>
                                <div>Зависит от того, какие ссылки сейчас ссылаются на ваш сайт. Часто в ссылочном профиле присутствует большое количество мусорных внешних ссылок, которые не дают никакого результата. В таком случае необходим анализ и отбор доменов, с которых можно получить более качественные и трастовые ссылки.</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="who-did-kf" id="sec-who">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="who-did-kf__wrapper">
                    <div class="who-did-kf__header">
                        <div class="section__header">
                            <h2>Кто выполняет</h2>
                            <div class="who-did-kf__dots slick-slider-numbers hidden-xs display-flex-lg"></div>
                        </div>
                    </div>
                    <div class="who-did-kf__slider">
                        <div class="who-did-kf__item">
                            <div class="specialist">
                                <div class="specialist__icon"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M13 28C13 29.1046 13.8954 30 15 30C16.1046 30 17 29.1046 17 28V17H28C29.1046 17 30 16.1046 30 15C30 13.8954 29.1046 13 28 13H17V2C17 0.895431 16.1046 0 15 0C13.8954 0 13 0.89543 13 2V13H2C0.895431 13 0 13.8954 0 15C0 16.1046 0.89543 17 2 17H13V28Z" fill="#A9A5A0"/></svg></div>
                                <div class="specialist__title">Старший SEO-специалист</div>
                                <div class="specialist__desc">Составляет оптимальную ссылочную стратегию на основе анализа конкурентов и своего опыта.</div>
                            </div>
                        </div>
                        <div class="who-did-kf__item">
                            <div class="specialist">
                                <div class="specialist__icon"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M13 28C13 29.1046 13.8954 30 15 30C16.1046 30 17 29.1046 17 28V17H28C29.1046 17 30 16.1046 30 15C30 13.8954 29.1046 13 28 13H17V2C17 0.895431 16.1046 0 15 0C13.8954 0 13 0.89543 13 2V13H2C0.895431 13 0 13.8954 0 15C0 16.1046 0.89543 17 2 17H13V28Z" fill="#A9A5A0"/></svg></div>
                                <div class="specialist__title">Руководитель проекта</div>
                                <div class="specialist__desc">Следит за соблюдением сроков, координирует работу команды.</div>
                            </div>
                        </div>
                        <div class="who-did-kf__item">
                            <div class="specialist">
                                <div class="specialist__icon"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M13 28C13 29.1046 13.8954 30 15 30C16.1046 30 17 29.1046 17 28V17H28C29.1046 17 30 16.1046 30 15C30 13.8954 29.1046 13 28 13H17V2C17 0.895431 16.1046 0 15 0C13.8954 0 13 0.89543 13 2V13H2C0.895431 13 0 13.8954 0 15C0 16.1046 0.89543 17 2 17H13V28Z" fill="#A9A5A0"/></svg></div>
                                <div class="specialist__title">Младший SEO-специалист</div>
                                <div class="specialist__desc">Составляет список конкурентов, отбирает из них наиболее подходящих для анализа.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="workflow" id="sec-workflow">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="workflow__header">
                    <h2>Порядок работы</h2>
                </div>
                <div class="workflow__list">
                    <div class="workflow__item">Составление списка конкурентов</div>
                    <div class="workflow__item">Отбор конкурентов, подходящих для анализа</div>
                    <div class="workflow__item">Согласование конкурентов</div>
                    <div class="workflow__item">Анализ конкурентов и описание его результатов</div>
                    <div class="workflow__item">Составление ссылочной стратегии</div>
                    <div class="workflow__item">Передача документа клиенту</div>
                </div>
                <div class="workflow__order">
                    <button class="btn" data-fancybox href="#zakazat-audit-form">заказать услугу</button>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="why" id="sec-why">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="why__wrapper">
                    <div class="why__content">
                        <div class="why__header">
                            <div class="section__header">
                                <h2>Почему мы</h2>
                                <div class="why__dots slick-slider-numbers hidden-xs display-flex-lg"></div>
                            </div>
                        </div>
                        <div class="why__slider">
                            <div class="why__item">
                                <div class="benefit">
                                    <div class="benefit__icon"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M13 28C13 29.1046 13.8954 30 15 30C16.1046 30 17 29.1046 17 28V17H28C29.1046 17 30 16.1046 30 15C30 13.8954 29.1046 13 28 13H17V2C17 0.895431 16.1046 0 15 0C13.8954 0 13 0.89543 13 2V13H2C0.895431 13 0 13.8954 0 15C0 16.1046 0.89543 17 2 17H13V28Z" fill="#A9A5A0"/></svg></div>
                                    <div class="benefit__title">Опыт</div>
                                    <div class="benefit__desc">Опыт в SEO более 10 лет, в иностранном сегменте – с 2020 года</div>
                                </div>
                                <div class="benefit">
                                    <div class="benefit__icon"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M13 28C13 29.1046 13.8954 30 15 30C16.1046 30 17 29.1046 17 28V17H28C29.1046 17 30 16.1046 30 15C30 13.8954 29.1046 13 28 13H17V2C17 0.895431 16.1046 0 15 0C13.8954 0 13 0.89543 13 2V13H2C0.895431 13 0 13.8954 0 15C0 16.1046 0.89543 17 2 17H13V28Z" fill="#A9A5A0"/></svg></div>
                                    <div class="benefit__title">Прозрачность</div>
                                    <div class="benefit__desc">Дадим подробные рекомендации и ответим на все ваши вопросы простыми словами</div>
                                </div>
                            </div>
                            <div class="why__item">
                                <div class="benefit">
                                    <div class="benefit__icon"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M13 28C13 29.1046 13.8954 30 15 30C16.1046 30 17 29.1046 17 28V17H28C29.1046 17 30 16.1046 30 15C30 13.8954 29.1046 13 28 13H17V2C17 0.895431 16.1046 0 15 0C13.8954 0 13 0.89543 13 2V13H2C0.895431 13 0 13.8954 0 15C0 16.1046 0.89543 17 2 17H13V28Z" fill="#A9A5A0"/></svg></div>
                                    <div class="benefit__title">Экономия</div>
                                    <div class="benefit__desc">Честно скажем, на чём можно сэкономить, а на чём — не рекомендуется</div>
                                </div>
                                <div class="benefit">
                                    <div class="benefit__icon"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M13 28C13 29.1046 13.8954 30 15 30C16.1046 30 17 29.1046 17 28V17H28C29.1046 17 30 16.1046 30 15C30 13.8954 29.1046 13 28 13H17V2C17 0.895431 16.1046 0 15 0C13.8954 0 13 0.89543 13 2V13H2C0.895431 13 0 13.8954 0 15C0 16.1046 0.89543 17 2 17H13V28Z" fill="#A9A5A0"/></svg></div>
                                    <div class="benefit__title">Планирование</div>
                                    <div class="benefit__desc">Составим для вас подробную ссылочную стратегию и предоставим пример ее реализации в течение определенного срока</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="why__form">
                        <?php
                            set_query_var( 'zakazat_audit_title', '' );
                            set_query_var( 'zakazat_audit_text', '' );
                            get_template_part('template-parts/forms/zakazat_audit')
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_template_part('template-parts/tariffs') ?>

<?php get_template_part('template-parts/dop_services-strategy') ?>

<?php
$args = [
    'posts_per_page' => 12,
    'post__in' => [11428, 8473, 6214, 11210]
];

$articles = get_posts($args);
?>

<?php if (count($articles) > 0): ?>
    <section class="articles" id="articles">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="articles__header">
                        <div class="section__header">
                            <h2>Статьи</h2>
                            <div class="articles__dots slick-slider-numbers hidden-xs display-flex-lg"></div>
                            <a class="link link--more" href="/blog/">все статьи<img src="/wp-content/themes/<?= get_template() ?>/assets/images/S_link.svg"></a>
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
get_footer();
?>