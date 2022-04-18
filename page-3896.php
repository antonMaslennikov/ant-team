<?php
get_header();
?>

<section class="audit">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="audit__wrapper">
                    <div class="audit__content">
                        <h1>Аудит коммерческих факторов</h1>
                        <p>Узнайте от каких коммерческих факторов зависят ваши позиции в выдаче</p>
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
                        <?php /*<li class="navigation__item"><a class="navigation__link link" href="#">Дополнительные услуги</a></li>*/ ?>
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
                        <h2>Что проверяет аудит КФ</h2>
                    </div>
                    <div class="what-check__slider">
                        <div class="what-check__item">
                            <div class="check-list">
                                <div class="check-list__title">Интернет-магазин:</div>
                                <ul class="check-list__list">
                                    <li>Мета-теги и заголовки</li>
                                    <li>Видео</li>
                                    <li>SEO-тексты</li>
                                    <li>Цены и скидки</li>
                                    <li>Количество товаров и категорий</li>
                                    <li>Рейтинг и отзывы</li>
                                    <li>Описание товара</li>
                                    <li>и многое другое</li>
                                </ul>
                            </div>
                        </div>
                        <div class="what-check__item">
                            <div class="check-list">
                                <div class="check-list__title">Сайт услуг:</div>
                                <ul class="check-list__list">
                                    <li>Специалисты, филиалы, регионы</li>
                                    <li>Цены и акции</li>
                                    <li>Количество услуг</li>
                                    <li>Отзывы и рейтинг</li>
                                    <li>Информационная часть сайта</li>
                                    <li>Сертификаты и лицензии</li>
                                    <li>Описание услуги</li>
                                    <li>и многое другое</li>
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
                            <li class="active"><span>Смогу ли я общаться с SEO-специалистами, задавать вопросы, корректировать задачи?<img src="/wp-content/themes/<?= get_template() ?>/assets/images/B_expand.svg"></span>
                                <div>Мы всегда на связи с клиентами. Общение происходит удобным для вас способом. Обычно мы создаем чат в Телеграм, где вы в любое время можете общаться с руководителем Ant-Team.ru Александром и старшим SEO-специалистом, ответственным именно за ваш проект. Также минимум раз в месяц или чаще (по желанию клиента) мы проводим совещания в Zoom.</div>
                            </li>
                            <li><span>Как я смогу контролировать работу?<img src="/wp-content/themes/<?= get_template() ?>/assets/images/B_expand.svg"></span>
                                <div>Мы всегда на связи с клиентами. Общение происходит удобным для вас способом. Обычно мы создаем чат в Телеграм, где вы в любое время можете общаться с руководителем Ant-Team.ru Александром и старшим SEO-специалистом, ответственным именно за ваш проект. Также минимум раз в месяц или чаще (по желанию клиента) мы проводим совещания в Zoom.</div>
                            </li>
                            <li><span>У меня будет персональный менеджер?<img src="/wp-content/themes/<?= get_template() ?>/assets/images/B_expand.svg"></span>
                                <div>Мы всегда на связи с клиентами. Общение происходит удобным для вас способом. Обычно мы создаем чат в Телеграм, где вы в любое время можете общаться с руководителем Ant-Team.ru Александром и старшим SEO-специалистом, ответственным именно за ваш проект. Также минимум раз в месяц или чаще (по желанию клиента) мы проводим совещания в Zoom.</div>
                            </li>
                            <li><span>Сколько стоит весь комплекс услуг по сео-продвижению?<img src="/wp-content/themes/<?= get_template() ?>/assets/images/B_expand.svg"></span>
                                <div>Мы всегда на связи с клиентами. Общение происходит удобным для вас способом. Обычно мы создаем чат в Телеграм, где вы в любое время можете общаться с руководителем Ant-Team.ru Александром и старшим SEO-специалистом, ответственным именно за ваш проект. Также минимум раз в месяц или чаще (по желанию клиента) мы проводим совещания в Zoom.</div>
                            </li>
                            <li><span>Можно ли заказать у вас отдельную услугу, а не весь комплекс работ?<img src="/wp-content/themes/<?= get_template() ?>/assets/images/B_expand.svg"></span>
                                <div>Мы всегда на связи с клиентами. Общение происходит удобным для вас способом. Обычно мы создаем чат в Телеграм, где вы в любое время можете общаться с руководителем Ant-Team.ru Александром и старшим SEO-специалистом, ответственным именно за ваш проект. Также минимум раз в месяц или чаще (по желанию клиента) мы проводим совещания в Zoom.</div>
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
                            <h2>Кто выполняет аудит КФ</h2>
                            <div class="who-did-kf__dots slick-slider-numbers hidden-xs display-flex-lg"></div>
                        </div>
                    </div>
                    <div class="who-did-kf__slider">
                        <div class="who-did-kf__item">
                            <div class="specialist">
                                <div class="specialist__icon"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M13 28C13 29.1046 13.8954 30 15 30C16.1046 30 17 29.1046 17 28V17H28C29.1046 17 30 16.1046 30 15C30 13.8954 29.1046 13 28 13H17V2C17 0.895431 16.1046 0 15 0C13.8954 0 13 0.89543 13 2V13H2C0.895431 13 0 13.8954 0 15C0 16.1046 0.89543 17 2 17H13V28Z" fill="#A9A5A0"/></svg></div>
                                <div class="specialist__title">Старший SEO-специалист</div>
                                <div class="specialist__desc">Предлагает нестандартные решения, занимается поиском уникальных критериев для сравнения, выявляет параметры, которые, как правило, не описываются в чек-листах.</div>
                            </div>
                        </div>
                        <div class="who-did-kf__item">
                            <div class="specialist">
                                <div class="specialist__icon"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M13 28C13 29.1046 13.8954 30 15 30C16.1046 30 17 29.1046 17 28V17H28C29.1046 17 30 16.1046 30 15C30 13.8954 29.1046 13 28 13H17V2C17 0.895431 16.1046 0 15 0C13.8954 0 13 0.89543 13 2V13H2C0.895431 13 0 13.8954 0 15C0 16.1046 0.89543 17 2 17H13V28Z" fill="#A9A5A0"/></svg></div>
                                <div class="specialist__title">Руководитель проекта</div>
                                <div class="specialist__desc">Планирует и координирует работы команды, задает вектор аудита на основании слов заказчика о типе бизнеса и текущих проблемах сайта. Подготавливает ту часть аудита, для которой требуется нестандартный подход, интерпретирует полученные числовые значения и делает выводы.</div>
                            </div>
                        </div>
                        <div class="who-did-kf__item">
                            <div class="specialist">
                                <div class="specialist__icon"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M13 28C13 29.1046 13.8954 30 15 30C16.1046 30 17 29.1046 17 28V17H28C29.1046 17 30 16.1046 30 15C30 13.8954 29.1046 13 28 13H17V2C17 0.895431 16.1046 0 15 0C13.8954 0 13 0.89543 13 2V13H2C0.895431 13 0 13.8954 0 15C0 16.1046 0.89543 17 2 17H13V28Z" fill="#A9A5A0"/></svg></div>
                                <div class="specialist__title">Младший SEO-специалист</div>
                                <div class="specialist__desc">Проводит подготовку и сбор стандартных параметров сравнения, проводит парсинг, готовит выгрузки и делает подсчеты, занимается оформлением итоговых файлов.</div>
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
                    <div class="workflow__item">Отбор конкурентов по видимости и количеству страниц в индексе</div>
                    <div class="workflow__item">Подготовка списка параметров сравнения и XPath-запросов</div>
                    <div class="workflow__item">Сбор данных, не требующих парсинга</div>
                    <div class="workflow__item">Подготовка списков урлов для парсинга</div>
                    <div class="workflow__item">Парсинг, экспорт и подсчет результатов</div>
                    <div class="workflow__item">Построение графиков, описание зависимостей и рекомендаций</div>
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
                                    <div class="benefit__desc">Над проектом одновременно работают специалисты разного уровня</div>
                                </div>
                                <div class="benefit">
                                    <div class="benefit__icon"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M13 28C13 29.1046 13.8954 30 15 30C16.1046 30 17 29.1046 17 28V17H28C29.1046 17 30 16.1046 30 15C30 13.8954 29.1046 13 28 13H17V2C17 0.895431 16.1046 0 15 0C13.8954 0 13 0.89543 13 2V13H2C0.895431 13 0 13.8954 0 15C0 16.1046 0.89543 17 2 17H13V28Z" fill="#A9A5A0"/></svg></div>
                                    <div class="benefit__title">Опыт</div>
                                    <div class="benefit__desc">Более 11 лет успешной работы в SEO</div>
                                </div>
                            </div>
                            <div class="why__item">
                                <div class="benefit">
                                    <div class="benefit__icon"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M13 28C13 29.1046 13.8954 30 15 30C16.1046 30 17 29.1046 17 28V17H28C29.1046 17 30 16.1046 30 15C30 13.8954 29.1046 13 28 13H17V2C17 0.895431 16.1046 0 15 0C13.8954 0 13 0.89543 13 2V13H2C0.895431 13 0 13.8954 0 15C0 16.1046 0.89543 17 2 17H13V28Z" fill="#A9A5A0"/></svg></div>
                                    <div class="benefit__title">Прозрачность</div>
                                    <div class="benefit__desc">Доступ к CRM, подробные отчёты и обратная связь</div>
                                </div>
                                <div class="benefit">
                                    <div class="benefit__icon"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M13 28C13 29.1046 13.8954 30 15 30C16.1046 30 17 29.1046 17 28V17H28C29.1046 17 30 16.1046 30 15C30 13.8954 29.1046 13 28 13H17V2C17 0.895431 16.1046 0 15 0C13.8954 0 13 0.89543 13 2V13H2C0.895431 13 0 13.8954 0 15C0 16.1046 0.89543 17 2 17H13V28Z" fill="#A9A5A0"/></svg></div>
                                    <div class="benefit__title">Без рисков</div>
                                    <div class="benefit__desc">Все действия заранее продумываются, чтобы исключить вероятность попадания под фильтр</div>
                                </div>
                            </div>
                            <div class="why__item">
                                <div class="benefit">
                                    <div class="benefit__icon"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M13 28C13 29.1046 13.8954 30 15 30C16.1046 30 17 29.1046 17 28V17H28C29.1046 17 30 16.1046 30 15C30 13.8954 29.1046 13 28 13H17V2C17 0.895431 16.1046 0 15 0C13.8954 0 13 0.89543 13 2V13H2C0.895431 13 0 13.8954 0 15C0 16.1046 0.89543 17 2 17H13V28Z" fill="#A9A5A0"/></svg></div>
                                    <div class="benefit__title">Квалификация</div>
                                    <div class="benefit__desc">Над проектом одновременно работают специалисты разного уровня</div>
                                </div>
                                <div class="benefit">
                                    <div class="benefit__icon"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M13 28C13 29.1046 13.8954 30 15 30C16.1046 30 17 29.1046 17 28V17H28C29.1046 17 30 16.1046 30 15C30 13.8954 29.1046 13 28 13H17V2C17 0.895431 16.1046 0 15 0C13.8954 0 13 0.89543 13 2V13H2C0.895431 13 0 13.8954 0 15C0 16.1046 0.89543 17 2 17H13V28Z" fill="#A9A5A0"/></svg></div>
                                    <div class="benefit__title">Опыт</div>
                                    <div class="benefit__desc">Более 11 лет успешной работы в SEO</div>
                                </div>
                            </div>
                            <div class="why__item">
                                <div class="benefit">
                                    <div class="benefit__icon"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M13 28C13 29.1046 13.8954 30 15 30C16.1046 30 17 29.1046 17 28V17H28C29.1046 17 30 16.1046 30 15C30 13.8954 29.1046 13 28 13H17V2C17 0.895431 16.1046 0 15 0C13.8954 0 13 0.89543 13 2V13H2C0.895431 13 0 13.8954 0 15C0 16.1046 0.89543 17 2 17H13V28Z" fill="#A9A5A0"/></svg></div>
                                    <div class="benefit__title">Квалификация</div>
                                    <div class="benefit__desc">Над проектом одновременно работают специалисты разного уровня</div>
                                </div>
                                <div class="benefit">
                                    <div class="benefit__icon"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M13 28C13 29.1046 13.8954 30 15 30C16.1046 30 17 29.1046 17 28V17H28C29.1046 17 30 16.1046 30 15C30 13.8954 29.1046 13 28 13H17V2C17 0.895431 16.1046 0 15 0C13.8954 0 13 0.89543 13 2V13H2C0.895431 13 0 13.8954 0 15C0 16.1046 0.89543 17 2 17H13V28Z" fill="#A9A5A0"/></svg></div>
                                    <div class="benefit__title">Опыт</div>
                                    <div class="benefit__desc">Более 11 лет успешной работы в SEO</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="why__form">
                        <?php
                            set_query_var( 'zakazat_audit_title', 'Заявка на аудит КФ от Ant-Team.ru' );
                            get_template_part('template-parts/forms/zakazat_audit')
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_template_part('template-parts/tariffs') ?>

<?php
the_content();
?>

<?php
get_footer();
?>