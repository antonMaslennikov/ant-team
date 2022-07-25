<?php
get_header();
?>

<section class="audit">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="audit__wrapper">
                    <div class="audit__content">
                        <h1>Анализ полноты информации на сайте</h1>
                        <p>Дадим рекомендации по оптимальному наполнению вашего сайта информацией на основе анализа сайтов конкурентов из топа!</p>
                        <div class="audit__price"><span>от 20 000 руб./месяц</span></div>
                    </div>
                    <div class="audit__form">
                        <?php
//                            set_query_var( 'contact_form_title', '' );
//                            set_query_var( 'contact_form_text', '' );
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
                                    <li>Рекомендации по наполнению любой страницы вашего сайта, будь то страница услуги, товара, категории или главная страница, на основе анализа информации сайтов конкурентов с самой высокой видимостью!</li>
                                    <li>
                                        Оптимизацию бюджета. Вы сможете понять, какие факторы сильнее влияют на видимость страницы в поисковой выдаче, и прорабатывать наполнение именно этой информации. А работу с факторами, которые влияют на видимость не так сильно, можно отложить на потом. Если какие-то факторы не влияют на видимость, вы сэкономите время и деньги, не вкладываясь в работу с ними.<br>
                                        Для товарной карточки можно проанализировать и выявить зависимость по таким параметрам: количество фото, наличие видео и 3D-обзоров, уникальное описание и его размер, пометка «есть/нет в наличии», рейтинг товара, наличие и объём отзывов, а также наличие в отзывах видео и фото, пометка «скидка/хит/популярное» и т. д. Всё это решается индивидуально.<br><br>
                                        Для страницы категории это могут быть такие параметры: количество товаров в категории и количество товаров отображаемых на странице пагинации, наличие рейтинга и оценок товара, пометки «скидка/хит/популярное/акция», размер названия товара и многие другие.
                                    </li>
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
                            <li class="active"><span>Возможен ли единичный созвон с вами, а не постоянное сотрудничество?<img src="/wp-content/themes/<?= get_template() ?>/assets/images/B_expand.svg"></span>
                                <div>Да, мы можем созвониться один раз и ответить на интересующие вас вопросы.</div>
                            </li>
                            <li><span>У меня мало вопросов, сколько стоит самый короткий созвон?<img src="/wp-content/themes/<?= get_template() ?>/assets/images/B_expand.svg"></span>
                                <div>Стоимость созвона от 5 000 руб./час, часы округляются в большую сторону. То есть созвон длительностью менее 60 минут будет минимально стоить 5 000 руб., созвон длительностью от 1 до 2 часов - 10 000 руб. и так далее.</div>
                            </li>
                            <li><span>Вы можете постоянно контролировать работы моих сеошников?<img src="/wp-content/themes/<?= get_template() ?>/assets/images/B_expand.svg"></span>
                                <div>Да, мы можем взять проект на поддержку, когда все работы выполняют ваши специалисты, а мы их проверяем и помогаем советами.</div>
                            </li>
                            <li><span>Вы можете провести аудит моего сайта?<img src="/wp-content/themes/<?= get_template() ?>/assets/images/B_expand.svg"></span>
                                <div>Да, мы можем провести SEO-аудит любого типа - <a href="/tehnicheski-audit/" target="_blank">технический</a>, <a href="/ymyl-audit/" target="_blank">YMYL</a>, <a href="/audit-kf/" target="_blank">аудит коммерческих факторов</a> и так далее.</div>
                            </li>
                            <li><span>Какими программами для совещаний вы пользуетесь?<img src="/wp-content/themes/<?= get_template() ?>/assets/images/B_expand.svg"></span>
                                <div>Чаще всего мы пользуемся Google Meet. По вашему желанию мы можем созваниваться в других программах, таких как Zoom, Skype, Telegram и т.д. При большинстве звонков понадобится демонстрация экрана.</div>
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
                            <h2>Кто проводит консультации</h2>
                            <div class="who-did-kf__dots slick-slider-numbers hidden-xs display-flex-lg"></div>
                        </div>
                    </div>
                    <div class="who-did-kf__slider">
                        <div class="who-did-kf__item">
                            <div class="specialist">
                                <div class="specialist__icon"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M13 28C13 29.1046 13.8954 30 15 30C16.1046 30 17 29.1046 17 28V17H28C29.1046 17 30 16.1046 30 15C30 13.8954 29.1046 13 28 13H17V2C17 0.895431 16.1046 0 15 0C13.8954 0 13 0.89543 13 2V13H2C0.895431 13 0 13.8954 0 15C0 16.1046 0.89543 17 2 17H13V28Z" fill="#A9A5A0"/></svg></div>
                                <div class="specialist__title">Старший SEO-специалист</div>
                                <div class="specialist__desc">Все старшие SEO-специалисты Ant-Team.ru - опытные преподаватели. Они регулярно проводят вебинары, выступают на конференциях, снимают лекции для <a href="https://www.youtube.com/channel/UCUnJn9JZeSAEo2TFzDlICJQ" target="_blank">YouTube</a> и преподают SEO на Skillbox. В повседневном рабочем процессе они непрерывно занимаются обучением младших специалистов с “нуля” до уровня Middle+ и руководят десятками проектов.</div>
                            </div>
                        </div>
                        <div class="who-did-kf__item">
                            <div class="specialist">
                                <div class="specialist__icon"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M13 28C13 29.1046 13.8954 30 15 30C16.1046 30 17 29.1046 17 28V17H28C29.1046 17 30 16.1046 30 15C30 13.8954 29.1046 13 28 13H17V2C17 0.895431 16.1046 0 15 0C13.8954 0 13 0.89543 13 2V13H2C0.895431 13 0 13.8954 0 15C0 16.1046 0.89543 17 2 17H13V28Z" fill="#A9A5A0"/></svg></div>
                                <div class="specialist__title">Руководитель проекта</div>
                                <div class="specialist__desc">Для длительной поддержки проектов назначается опытный руководитель, который будет проверять все задачи ваших SEO-специалистов, составлять план работ и участвовать в регулярных созвонах.</div>
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
                    <div class="workflow__item">Знакомство с проектом</div>
                    <div class="workflow__item">Изучение запроса от клиента</div>
                    <div class="workflow__item">Созвон</div>
                    <div class="workflow__item">Проверка задач</div>
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
                                    <div class="benefit__desc">Опыт в SEO более 10 лет, в иностранном сегменте - с 2020 года</div>
                                </div>
                                <div class="benefit">
                                    <div class="benefit__icon"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M13 28C13 29.1046 13.8954 30 15 30C16.1046 30 17 29.1046 17 28V17H28C29.1046 17 30 16.1046 30 15C30 13.8954 29.1046 13 28 13H17V2C17 0.895431 16.1046 0 15 0C13.8954 0 13 0.89543 13 2V13H2C0.895431 13 0 13.8954 0 15C0 16.1046 0.89543 17 2 17H13V28Z" fill="#A9A5A0"/></svg></div>
                                    <div class="benefit__title">Доступность информации</div>
                                    <div class="benefit__desc">Детально ответим на все ваши вопросы по SEO простыми словами</div>
                                </div>
                            </div>
                            <div class="why__item">
                                <div class="benefit">
                                    <div class="benefit__icon"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M13 28C13 29.1046 13.8954 30 15 30C16.1046 30 17 29.1046 17 28V17H28C29.1046 17 30 16.1046 30 15C30 13.8954 29.1046 13 28 13H17V2C17 0.895431 16.1046 0 15 0C13.8954 0 13 0.89543 13 2V13H2C0.895431 13 0 13.8954 0 15C0 16.1046 0.89543 17 2 17H13V28Z" fill="#A9A5A0"/></svg></div>
                                    <div class="benefit__title">Преподаватели</div>
                                    <div class="benefit__desc">Все старшие SEO-специалисты команды - опытные преподаватели</div>
                                </div>
                                <div class="benefit">
                                    <div class="benefit__icon"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M13 28C13 29.1046 13.8954 30 15 30C16.1046 30 17 29.1046 17 28V17H28C29.1046 17 30 16.1046 30 15C30 13.8954 29.1046 13 28 13H17V2C17 0.895431 16.1046 0 15 0C13.8954 0 13 0.89543 13 2V13H2C0.895431 13 0 13.8954 0 15C0 16.1046 0.89543 17 2 17H13V28Z" fill="#A9A5A0"/></svg></div>
                                    <div class="benefit__title">Кураторство</div>
                                    <div class="benefit__desc">Поможем контролировать инхаус SEO-специалистов и научим их качественно выполнять задачи</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="why__form">
                        <?php
                            set_query_var( 'zakazat_audit_title', 'Заявка на консультацию по SEO' );
                            set_query_var( 'zakazat_audit_text', 'Оставьте заявку, и мы ответим на все интересующие вас вопросы о продвижении сайта простым и понятным языком' );
                            get_template_part('template-parts/forms/zakazat_audit')
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_template_part('template-parts/tariffs') ?>

<?php get_template_part('template-parts/dop_services') ?>

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