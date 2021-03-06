<?php
get_header();
?>

<section class="audit">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="audit__wrapper">
                    <div class="audit__content">
                        <h1>Аудит YMYL-факторов ранжирования</h1>
                        <p>Страницы, которые могут повлиять на благополучие и безопасность пользователей, относятся к категории &ldquo;Кошелек или жизнь&rdquo; - &ldquo;Your Money Your Life&rdquo;. Данная терминология взята из <a href="https://ant-team.ru/google/">Инструкции для асессоров Google</a>.</p>
                        <div class="audit__price"><span>от 10 000 ₽</span></div><a class="link" href="#sec-tariffs">смотреть все тарифы<img src="/wp-content/themes/<?= get_template() ?>/assets/images/S_link.svg"></a>
                    </div>
                    <div class="audit__form">
                        <?php get_template_part('template-parts/forms/contact-form') ?>
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
                        <li class="navigation__item"><a class="navigation__link link" href="#sec-what">Что проверяет аудит КФ</a></li>
                        <li class="navigation__item"><a class="navigation__link link" href="#sec-who">Кто выполняет аудит КФ</a></li>
                        <li class="navigation__item"><a class="navigation__link link" href="#sec-faq">FAQ</a></li>
                        <li class="navigation__item"><a class="navigation__link link" href="#sec-workflow">Порядок работы</a></li>
                        <li class="navigation__item"><a class="navigation__link link" href="#sec-why">Почему мы</a></li>
                        <li class="navigation__item"><a class="navigation__link link" href="#sec-results">Результаты наших клиентов</a></li>
                        <li class="navigation__item"><a class="navigation__link link" href="#sec-dop_services">Дополнительные услуги</a></li>
                        <li class="navigation__item"><a class="navigation__link link" href="#sec-tariffs">Тарифы</a></li>
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
                        <h2>Что дает YMYL-аудит</h2>
                    </div>
                    <div class="what-check__slider">
                        <div class="what-check__item">
                            <div class="check-list">
                                <div class="check-list__title">Доверие со стороны поисковой системы</div>
                                <ul class="check-list__list">
                                    <li>При ранжировании сайтов коммерческой, медицинской тематики и других представителей сферы YMYL поисковые системы учитывают ряд сигналов, говорящих о надежности и безопасности ресурса. Благодаря изучению асессорской инструкции Google и огромному опыту работы мы знаем большую часть этих сигналов и подробно опишем, что и как стоит внедрить для сайта вашей тематики.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="what-check__item">
                            <div class="check-list">
                                <div class="check-list__title">Доверие со стороны пользователей</div>
                                <ul class="check-list__list">
                                    <li>Продумывая сигналы, которые говорили бы о надежности и безопасности сайта, создатели поисковых систем в первую очередь учитывали интересы реальных пользователей. Поэтому, добавив на свой сайт политику конфиденциальности, сертификаты или другие сигналы, вы одновременно повысите доверие и со стороны реальных посетителей.</li>
                                </ul>
                            </div>
                        </div>
						<div class="what-check__item">
                            <div class="check-list">
                                <div class="check-list__title">Полнота информации на страницах</div>
                                <ul class="check-list__list">
                                    <li>Продумать все очень сложно. Следуя нашим рекомендациям, вы увеличите количество действительно важной информации на страницах, про которую вы могли забыть. Это сделает ваш сайт более удобным, информативным и визуально наполненным.</li>
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
                            <li class="active"><span>Что я получу в результате YMYL-аудита?<img src="/wp-content/themes/<?= get_template() ?>/assets/images/B_expand.svg"></span>
                                <div>По результатам аудита мы готовим подробный документ с отчетом. В отчете перечисляем, какие именно блоки и страницы нужны для вашего сайта. К каждому пункту мы обязательно приводим примеры с конкурентов или других сайтов. И текстом описываем необходимые требования к блокам и страницам. Дополнительно по желанию клиента мы можем нарисовать примерный макет страницы со всеми необходимыми блоками.</div>
                            </li>
                            <li><span>Я вообще не разбираюсь в SEO. Смогу ли я понимать ваши отчёты?<img src="/wp-content/themes/<?= get_template() ?>/assets/images/B_expand.svg"></span>
                                <div>Мы всегда общаемся с клиентами и объясняем все нюансы понятным языком. После выполнения задачи мы созвонимся с вами и вместе пройдёмся по отчёту, расскажем голосом про каждый пункт и ответим на все вопросы. Мы аргументируем каждый пункт, а вы можете сами принять решение, хотите ли внедрять наши рекомендации. При необходимости по итогам созвона мы внесём правки в отчёт либо распишем дополнительную информацию текстом.</div>
                            </li>
                            <li><span>У меня ещё нет сайта, я только планирую его создание. Нужен ли мне YMYL-аудит?<img src="/wp-content/themes/<?= get_template() ?>/assets/images/B_expand.svg"></span>
                                <div>Мы рекомендуем провести аудит до создания сайта, так как это позволит сразу учесть все рекомендации в дизайне и структуре будущего сайта. Проще и дешевле сразу сделать хорошо, чем потом переделывать. Также, если вы планируете создание сайта, вам пригодится<a href="https://ant-team.ru/audit-kf/"> аудит коммерческих факторов</a>.</div>
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
                            <h2>Кто выполняет аудит</h2>
                            <div class="who-did-kf__dots slick-slider-numbers hidden-xs display-flex-lg"></div>
                        </div>
                    </div>
                    <div class="who-did-kf__slider">
                        <div class="who-did-kf__item">
                            <div class="specialist">
                                <div class="specialist__icon"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M13 28C13 29.1046 13.8954 30 15 30C16.1046 30 17 29.1046 17 28V17H28C29.1046 17 30 16.1046 30 15C30 13.8954 29.1046 13 28 13H17V2C17 0.895431 16.1046 0 15 0C13.8954 0 13 0.89543 13 2V13H2C0.895431 13 0 13.8954 0 15C0 16.1046 0.89543 17 2 17H13V28Z" fill="#A9A5A0"/></svg></div>
                                <div class="specialist__title">Старший SEO-специалист</div>
                                <div class="specialist__desc">Предлагает нестандартные решения для повышения доверия со стороны пользователей и поисковиков, выявляет параметры, которые, как правило, не описываются в чек-листах.</div>
                            </div>
                        </div>
                        <div class="who-did-kf__item">
                            <div class="specialist">
                                <div class="specialist__icon"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M13 28C13 29.1046 13.8954 30 15 30C16.1046 30 17 29.1046 17 28V17H28C29.1046 17 30 16.1046 30 15C30 13.8954 29.1046 13 28 13H17V2C17 0.895431 16.1046 0 15 0C13.8954 0 13 0.89543 13 2V13H2C0.895431 13 0 13.8954 0 15C0 16.1046 0.89543 17 2 17H13V28Z" fill="#A9A5A0"/></svg></div>
                                <div class="specialist__title">Руководитель проекта</div>
                                <div class="specialist__desc">Планирует и координирует работы команды, задает вектор проработки проекта, подбирает конкурентов и выполняет ту часть аудита, для которой требуется нестандартный подход.</div>
                            </div>
                        </div>
                        <div class="who-did-kf__item">
                            <div class="specialist">
                                <div class="specialist__icon"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M13 28C13 29.1046 13.8954 30 15 30C16.1046 30 17 29.1046 17 28V17H28C29.1046 17 30 16.1046 30 15C30 13.8954 29.1046 13 28 13H17V2C17 0.895431 16.1046 0 15 0C13.8954 0 13 0.89543 13 2V13H2C0.895431 13 0 13.8954 0 15C0 16.1046 0.89543 17 2 17H13V28Z" fill="#A9A5A0"/></svg></div>
                                <div class="specialist__title">Младший SEO-специалист</div>
                                <div class="specialist__desc">Проводит подготовку и сбор стандартных параметров сравнения, занимается оформлением итоговых файлов.</div>
                            </div>
                        </div>
                        <div class="who-did-kf__item">
                            <div class="specialist">
                                <div class="specialist__icon"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M13 28C13 29.1046 13.8954 30 15 30C16.1046 30 17 29.1046 17 28V17H28C29.1046 17 30 16.1046 30 15C30 13.8954 29.1046 13 28 13H17V2C17 0.895431 16.1046 0 15 0C13.8954 0 13 0.89543 13 2V13H2C0.895431 13 0 13.8954 0 15C0 16.1046 0.89543 17 2 17H13V28Z" fill="#A9A5A0"/></svg></div>
                                <div class="specialist__title">Редактор, копирайтеры и контент-менеджер</div>
                                <div class="specialist__desc">Помогают собрать, оформить и опубликовать информацию по итогам YMYL-аудита.</div>
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
                    <div class="workflow__item">Заполнение заявки</div>
                    <div class="workflow__item">Подписание договора и оплата</div>
                    <div class="workflow__item">Проведение YMYL-аудита</div>
                    <div class="workflow__item">Составление списка задач</div>
                </div>
                <div class="workflow__order">
                    <button class="btn" data-fancybox href="#zakazat-audit-form">заказать аудит</button>
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
                                    <div class="benefit__title">Квалификация</div>
                                    <div class="benefit__desc">Сделали первый полный перевод и досконально изучили официальный <a href="https://ant-team.ru/google/">документ Google</a>, рассказывающий о критериях оценки YMYL-страниц</div>
                                </div>
                                <div class="benefit">
                                    <div class="benefit__icon"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M13 28C13 29.1046 13.8954 30 15 30C16.1046 30 17 29.1046 17 28V17H28C29.1046 17 30 16.1046 30 15C30 13.8954 29.1046 13 28 13H17V2C17 0.895431 16.1046 0 15 0C13.8954 0 13 0.89543 13 2V13H2C0.895431 13 0 13.8954 0 15C0 16.1046 0.89543 17 2 17H13V28Z" fill="#A9A5A0"/></svg></div>
                                    <div class="benefit__title">Экспертность</div>
                                    <div class="benefit__desc">Провели и опубликовали ряд исследований YMYL-факторов в разных сферах бизнеса</div>
                                </div>
                            </div>
                            <div class="why__item">
                                <div class="benefit">
                                    <div class="benefit__icon"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M13 28C13 29.1046 13.8954 30 15 30C16.1046 30 17 29.1046 17 28V17H28C29.1046 17 30 16.1046 30 15C30 13.8954 29.1046 13 28 13H17V2C17 0.895431 16.1046 0 15 0C13.8954 0 13 0.89543 13 2V13H2C0.895431 13 0 13.8954 0 15C0 16.1046 0.89543 17 2 17H13V28Z" fill="#A9A5A0"/></svg></div>
                                    <div class="benefit__title">Подход</div>
                                    <div class="benefit__desc">Составили подробные <a href="https://ant-team.ru/blog/cheklist-ymyl-audita/">чек-листы YMYL-аудита</a> для интернет-магазинов и сайтов услуг</div>
                                </div>
                                <div class="benefit">
                                    <div class="benefit__icon"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M13 28C13 29.1046 13.8954 30 15 30C16.1046 30 17 29.1046 17 28V17H28C29.1046 17 30 16.1046 30 15C30 13.8954 29.1046 13 28 13H17V2C17 0.895431 16.1046 0 15 0C13.8954 0 13 0.89543 13 2V13H2C0.895431 13 0 13.8954 0 15C0 16.1046 0.89543 17 2 17H13V28Z" fill="#A9A5A0"/></svg></div>
                                    <div class="benefit__title">Эффективность</div>
                                    <div class="benefit__desc">Получили отличные результаты и готовые <a href="https://ant-team.ru/blog/polnyj-ymyl-analiz-tematiki-mezhdunarodnye-gruzoperevozki/">кейсы</a> после проработки YMYL-факторов на сайтах наших клиентов</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="why__form">
                        <?php
                            set_query_var( 'zakazat_audit_title', 'Заявка на аудит коммерческих факторов от Ant-Team.ru' );
                            get_template_part('template-parts/forms/zakazat_audit')
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="results" id="sec-results">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="results__wrapper">
                    <div class="results__header">
                        <h2>Результаты наших клиентов</h2>
                    </div>
                    <div class="results__content">
                        <div class="results__nav">
                            <ul>
                                <li class="active">Клиент 1</li>
                                <li>Клиент 2</li>
                            </ul>
                        </div>
                        <div class="results__slider">
                            <div class="results__item">
                                <ul>
                                    <li>Проанализировали сайты клиента и конкурентов (регион - Австрия, язык - немецкий)</li>
									<li>Составили 34 рекомендации для всего сайта</li>
									<li>Внедрили более 20 рекомендаций, остальные в работе</li>
                                </ul>
                            </div>
                            <div class="results__item">
                                <ul>
                                    <li>Проанализировали сайты клиента и конкурентов (тематика - туризм и отели)</li>
									<li>Составили 29 рекомендаций для всего сайта</li>
									<li>Внедрили более 20 рекомендаций, остальные в работе</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_template_part('template-parts/tariffs') ?>

<?php get_template_part('template-parts/dop_services-yml') ?>

<?php
the_content();
?>

<?php
get_footer();
?>