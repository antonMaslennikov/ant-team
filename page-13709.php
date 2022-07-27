<?php
get_header();
?>

<section class="audit">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="audit__wrapper">
                    <div class="audit__content">
                        <h1>Корпоративное обучение SEO</h1>
                        <p>Проведём обучение в онлайн- или офлайн-формате для ваших сотрудников, бизнес-партнёров и других людей, заинтересованных в SEO. Расскажем про продвижение сайтов понятным языком и без воды для любого уровня подготовки! Только полезные советы, которые сразу же можно применить на практике.</p>
                        <div class="audit__price"><span>от 15 000 ₽</span></div>
                    </div>
                    <div class="audit__form">
                        <?php
                            set_query_var( 'contact_form_title', 'Заявка на корпоративное обучение SEO' );
                            set_query_var( 'contact_form_text', 'Оставьте заявку, и мы составим индивидуальную программу занятий по SEO именно для вашей аудитории' );
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
                        <li class="navigation__item"><a class="navigation__link link" href="#employees">Наша команда</a></li>
                        <li class="navigation__item"><a class="navigation__link link" href="#sec-workflow">Порядок работы</a></li>
                        <li class="navigation__item"><a class="navigation__link link" href="#sec-why">Почему мы</a></li>
                        <li class="navigation__item"><a class="navigation__link link" href="#sec-why">Сертификаты</a></li>
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
                        <h2>Что вы получите на корпоративном обучении</h2>
                    </div>
                    <div class="what-check__slider">
                        <div class="what-check__item">
                            <div class="check-list">
                                <div class="check-list__title"></div>
                                <ul class="check-list__list">
                                    <li>Подбор тем и формата занятий индивидуально под вашу аудиторию с учётом тематики бизнеса (например, если вас интересует продвижение сайтов юридических услуг, то мы расскажем про особенности SEO именно в этой тематике и приведём примеры из неё)</li>
                                    <li>Любое количество занятий: от 1 занятия до целого курса любой длительности</li>
                                    <li>Подготовку материала с учётом уровня знаний вашей аудитории - как для профессионалов, так и для людей, которые впервые слышат про SEO</li>
                                    <li>Доступ ко всем материалам - презентациям, чек-листам, статьям и видео по данной теме от наших специалистов</li>
                                    <li>Оформление материалов по вашему шаблону при необходимости</li>
                                    <li>Ответы на вопросы от SEO-специалиста после занятия</li>
                                    <li>Много наглядных примеров</li>
                                    <li>Информацию без воды, которую даже непрофессионал сможет сразу применить в работе</li>
                                    <li>Формат выступлений на ваш выбор: онлайн-вебинары, офлайн в любом городе РФ или запись видео в студии</li>
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
                            <li class="active">
                                <span>Вы можете самостоятельно записать несколько видеоуроков для нас?<img src="/wp-content/themes/<?= get_template() ?>/assets/images/B_expand.svg"></span>
                                <div>Да, мы можем записать видеоуроки в профессиональной студии с презентациями, смонтировать и предоставить вам уже готовый материал. В таком случае заказчик оплачивает дополнительно аренду студии и монтаж.</div>
                            </li>
                            <li>
                                <span>Можете сделать вебинары для людей, которые вообще ничего не понимают в SEO, но чтобы они сразу смогли что-то сделать на своих сайтах?<img src="/wp-content/themes/<?= get_template() ?>/assets/images/B_expand.svg"></span>
                                <div>Да, мы готовим обучающие материалы под аудиторию любого уровня. Все наши уроки содержат только полезные материалы, которые зрители сразу смогут применить на практике.</div>
                            </li>
                            <li>
                                <span>А можно посмотреть примеры ваших уроков?<img src="/wp-content/themes/<?= get_template() ?>/assets/images/B_expand.svg"></span>
                                <div>У нас есть <a href="https://www.youtube.com/channel/UCUnJn9JZeSAEo2TFzDlICJQ" target="_blank">YouTube-канал</a>, где мы бесплатно выкладываем обучающие видео для начинающих SEO-специалистов. Мы регулярно проводим вебинары, <a href="https://youtu.be/2Vp_AABpo6k" target="_blank">например этот</a>. Также мы регулярно готовим материалы для минимально подготовленной аудитории, например <a href="https://vk.com/video-205603229_456239035" target="_blank">для салонов красоты</a>.</div>
                            </li>
                            <li>
                                <span>Вы можете подготовить чек-листы для зрителей?<img src="/wp-content/themes/<?= get_template() ?>/assets/images/B_expand.svg"></span>
                                <div>Да, мы можем подготовить полезные чек-листы или даже тесты для зрителей.</div>
                            </li>
                            <li>
                                <span>В каких городах вы проводите обучение офлайн?<img src="/wp-content/themes/<?= get_template() ?>/assets/images/B_expand.svg"></span>
                                <div>Большая часть команды находится в Санкт-Петербурге, но мы можем провести обучение или съемки видео в любом городе России. В таком случае заказчик оплачивает нашим специалистам дорогу и проживание.</div>
                            </li>
                            <li>
                                <span>Можно ли пригласить вас бесплатно выступить на вебинаре или конференции?<img src="/wp-content/themes/<?= get_template() ?>/assets/images/B_expand.svg"></span>
                                <div>Да, мы можем подготовить 1 выступление или 1 вебинар бесплатно при гарантии аудитории от 50 человек офлайн или 150 человек онлайн.</div>
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
                            <h2>Кто выполняет услугу</h2>
                            <div class="who-did-kf__dots slick-slider-numbers hidden-xs display-flex-lg"></div>
                        </div>
                    </div>
                    <div class="who-did-kf__slider">
                        <div class="who-did-kf__item">
                            <div class="specialist">
                                <div class="specialist__icon"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M13 28C13 29.1046 13.8954 30 15 30C16.1046 30 17 29.1046 17 28V17H28C29.1046 17 30 16.1046 30 15C30 13.8954 29.1046 13 28 13H17V2C17 0.895431 16.1046 0 15 0C13.8954 0 13 0.89543 13 2V13H2C0.895431 13 0 13.8954 0 15C0 16.1046 0.89543 17 2 17H13V28Z" fill="#A9A5A0"/></svg></div>
                                <div class="specialist__title">Старший SEO-специалист</div>
                                <div class="specialist__desc">Все старшие SEO-специалисты Ant-Team.ru - опытные преподаватели. Они регулярно проводят вебинары, выступают на конференциях, снимают лекции для <a href="https://www.youtube.com/channel/UCUnJn9JZeSAEo2TFzDlICJQ" target="_blank">YouTube</a> и преподают на Skillbox. В повседневном рабочем процессе они непрерывно занимаются обучением младших специалистов с “нуля” до уровня Middle+ и руководят десятками проектов.</div>
                            </div>
                        </div>
                        <div class="who-did-kf__item">
                            <div class="specialist">
                                <div class="specialist__icon"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M13 28C13 29.1046 13.8954 30 15 30C16.1046 30 17 29.1046 17 28V17H28C29.1046 17 30 16.1046 30 15C30 13.8954 29.1046 13 28 13H17V2C17 0.895431 16.1046 0 15 0C13.8954 0 13 0.89543 13 2V13H2C0.895431 13 0 13.8954 0 15C0 16.1046 0.89543 17 2 17H13V28Z" fill="#A9A5A0"/></svg></div>
                                <div class="specialist__title">Middle SEO-специалист</div>
                                <div class="specialist__desc">Наши мидлы активно участвуют в видеоуроках для <a href="https://www.youtube.com/channel/UCUnJn9JZeSAEo2TFzDlICJQ" target="_blank">YouTube</a> и пишут статьи. У них меньше преподавательского опыта, чем у старших специалистов, но они отлично разбираются в SEO и могут доступно рассказать про качественное продвижение сайтов.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_template_part('template-parts/section-employees') ?>

<section class="workflow" id="sec-workflow">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="workflow__header">
                    <h2>Порядок работы</h2>
                </div>
                <div class="workflow__list">
                    <div class="workflow__item">Знакомство с тематикой и аудиторией</div>
                    <div class="workflow__item">Подготовка презентаций</div>
                    <div class="workflow__item">Согласование презентаций</div>
                    <div class="workflow__item">Проведение занятия</div>
                    <div class="workflow__item">Ответы на вопросы</div>
                </div>
                <div class="workflow__order">
                    <button class="btn" data-fancybox href="#zakazat-audit-form-wrapper">заказать обучение</button>
                    <div class="order-form modal-form" id="zakazat-audit-form-wrapper" style="display:none;">
                    <?php
                        set_query_var( 'zakazat_audit_title', 'Заявка на корпоративное обучение SEO' );
                        set_query_var( 'zakazat_audit_text', 'Оставьте заявку, и мы составим индивидуальную программу занятий по SEO именно для вашей аудитории' );
                        get_template_part('template-parts/forms/zakazat_audit')
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="sec-why">
    <div class="dual">
        <section class="advantages">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="advantages__wrapper">
                            <div class="advantages__header">
                                <div class="section__header">
                                    <h2>Преимущества</h2>
                                    <div class="advantages__dots slick-slider-numbers hidden-xs display-flex-lg"></div>
                                </div>
                            </div>
                            <div class="advantages__slider">
                                <div class="advantages__item">
                                    <div class="advantage">
                                        <div class="advantage__icon"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M13 28C13 29.1046 13.8954 30 15 30C16.1046 30 17 29.1046 17 28V17H28C29.1046 17 30 16.1046 30 15C30 13.8954 29.1046 13 28 13H17V2C17 0.895431 16.1046 0 15 0C13.8954 0 13 0.89543 13 2V13H2C0.895431 13 0 13.8954 0 15C0 16.1046 0.89543 17 2 17H13V28Z" fill="#A9A5A0"/></svg></div>
                                        <div class="advantage__desc">Опыт</div>
                                        <div class="advantage__desc">Опыт в SEO более 10 лет, в иностранном сегменте - с 2020 года</div>
                                    </div>
                                    <div class="advantage">
                                        <div class="advantage__icon"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M13 28C13 29.1046 13.8954 30 15 30C16.1046 30 17 29.1046 17 28V17H28C29.1046 17 30 16.1046 30 15C30 13.8954 29.1046 13 28 13H17V2C17 0.895431 16.1046 0 15 0C13.8954 0 13 0.89543 13 2V13H2C0.895431 13 0 13.8954 0 15C0 16.1046 0.89543 17 2 17H13V28Z" fill="#A9A5A0"/></svg></div>
                                        <div class="advantage__desc">Доступность информации</div>
                                        <div class="advantage__desc">Детально расскажем о SEO простыми словами с примерами</div>
                                    </div>
                                </div>
                                <div class="advantages__item">
                                    <div class="advantage">
                                        <div class="advantage__icon"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M13 28C13 29.1046 13.8954 30 15 30C16.1046 30 17 29.1046 17 28V17H28C29.1046 17 30 16.1046 30 15C30 13.8954 29.1046 13 28 13H17V2C17 0.895431 16.1046 0 15 0C13.8954 0 13 0.89543 13 2V13H2C0.895431 13 0 13.8954 0 15C0 16.1046 0.89543 17 2 17H13V28Z" fill="#A9A5A0"/></svg></div>
                                        <div class="advantage__desc">Преподаватели</div>
                                        <div class="advantage__desc">Все старшие SEO-специалисты команды - опытные преподаватели и спикеры</div>
                                    </div>
                                    <div class="advantage">
                                        <div class="advantage__icon"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M13 28C13 29.1046 13.8954 30 15 30C16.1046 30 17 29.1046 17 28V17H28C29.1046 17 30 16.1046 30 15C30 13.8954 29.1046 13 28 13H17V2C17 0.895431 16.1046 0 15 0C13.8954 0 13 0.89543 13 2V13H2C0.895431 13 0 13.8954 0 15C0 16.1046 0.89543 17 2 17H13V28Z" fill="#A9A5A0"/></svg></div>
                                        <div class="advantage__desc">Подход</div>
                                        <div class="advantage__desc">Составим уникальный план обучения именно для вашей аудитории</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php
        $certificates = get_posts([
            'numberposts' => -1,
            'orderby' => 'date',
            'order' => 'DESC',
            'meta_key' => '',
            'meta_value' => '',
            'post_type' => 'certificate',
            'parent' => 0,
            'suppress_filters' => true,
            'post_status' => 'publish',
        ]);
        ?>

        <?php if (count($certificates) > 0): ?>
            <section class="certificates">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="certificates__wrapper">
                                <div class="certificates__header">
                                    <div class="section__header">
                                        <h2>Сертификаты</h2>
                                        <div class="certificates__dots slick-slider-numbers hidden-xs display-flex-lg"></div>
                                    </div>
                                </div>
                                <div class="certificates__slider">
                                    <?php foreach ($certificates AS $c): ?>
                                        <?php if (has_post_thumbnail($c->ID)): ?>
                                            <div class="certificate__item">
                                                <div class="certificate"><img src="<?= get_the_post_thumbnail_url($c->ID) ?>"></div>
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>
    </div>
</section>

<?php get_template_part('template-parts/tariffs') ?>

<?php get_template_part('template-parts/dop_services-corporate') ?>

<?php
set_query_var( 'videos', [
    ['code' => 'https://www.youtube.com/embed/7-L8H47U-q4', 'title' => 'Как понять, что на сайте крутят поведенческие факторы? Инструменты SEO-специалиста для выявления ПФ'],
    ['code' => 'https://www.youtube.com/embed/StCNwCEz5gQ', 'title' => 'Лекция 20. Работа с негативной репутацией'],
    ['code' => 'https://www.youtube.com/embed/2Vp_AABpo6k', 'title' => 'Коммерческие факторы ранжирования в e-commerce и на сайтах услуг: что делать и чего ожидать'],
    ['code' => 'https://www.youtube.com/embed/rr3KlJZi0H0', 'title' => 'Микроразметка: основные понятия и виды. Лекция 16'],
    ['code' => 'https://www.youtube.com/embed/YvukfD5kApc', 'title' => 'Лекция 22. Классический сбор семантики'],
] );
get_template_part('template-parts/section-videos')
?>

<?php
$args = [
    'posts_per_page' => 12,
    'numberposts' => 12,
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