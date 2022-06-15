<?php
get_header();
?>

<section class="audit">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="audit__wrapper">
                    <div class="audit__content">
                        <h1>Технический аудит</h1>
                        <p>Технический аудит - комплексная проверка сайта на наличие технических ошибок и составление рекомендаций по их исправлению.</p>
                        <div class="audit__price"><span>от 20 000 ₽</span></div><a class="link" href="#sec-tariffs">смотреть все тарифы<img src="/wp-content/themes/<?= get_template() ?>/assets/images/S_link.svg"></a>
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
                        <li class="navigation__item"><a class="navigation__link link" href="#sec-what">Что проверяет технический аудит</a></li>
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
                        <h2>Что проверяет Технический аудит</h2>
                    </div>
                    <div class="what-check__slider">
                        <div class="what-check__item">
                            <div class="check-list">
                                <div class="check-list__title"></div>
                                <ul class="check-list__list">
                                    <li>Разметка целевых действий</li>
                                    <li>Корректность sitemap.xml</li>
                                    <li>Валидность CSS</li>
                                    <li>Полнота и корректность микроразметки</li>
                                    <li>Корректность настройки зеркал</li>
                                    <li>Наличие технических дубликатов</li>
                                    <li>Спамные блоки скрытого текста</li>
                                    <li>Битые ссылки</li>
                                    <li>Корректность 200 кода</li>
									<li>Полнота и корректность индексации</li>									
                                </ul>
                            </div>
                        </div>
                        <div class="what-check__item">
                            <div class="check-list">
                                <div class="check-list__title"></div>
                                <ul class="check-list__list">
                                    <li>Корректность файла robots.txt</li>
                                    <li>Валидность HTML</li>
                                    <li>Валидность Favicon</li>
                                    <li>Мета-теги noindex, nofollow, canonical</li>
                                    <li>Безопасный протокол работы сайта</li>
                                    <li>Анализ поддоменов сайта</li>
                                    <li>Входящие ссылки</li>
                                    <li>Висячие узлы, редиректы</li>
									<li>Корректность 404 кода</li>
									<li>Скорость ответа сервера</li>
									<li>Мобильная верстка</li>
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
                            <li class="active"><span>У вас есть программист, которому можно поручить работы по итогам аудита?<img src="/wp-content/themes/<?= get_template() ?>/assets/images/B_expand.svg"></span>
                                <div>Да, у нас в команде работает опытный программист, который готов помочь с выполнением задач по итогам аудита. Также, если у вас есть свой программист, специалист из нашей команды готов ответить на его возможные вопросы по задачам. </div>
                            </li>
                            <li><span>Какие аудиты, кроме технического, вы можете предложить?<img src="/wp-content/themes/<?= get_template() ?>/assets/images/B_expand.svg"></span>
                                <div>Мы также проводим <a href="https://ant-team.ru/audit-kf/">аудит коммерческих факторов</a> конкурентов и <a href="https://ant-team.ru/ymyl-audit/">аудит YMYL-факторов</a> ранжирования. Оба аудита направлены на выявление слабых мест у вашего сайта, которые мешают получить высокие позиции. Вы также можете заказать их для получения комплексных рекомендаций по продвижению.</div>
                            </li>
                            <li><span>Можно ли сделать аудит бесплатно?<img src="/wp-content/themes/<?= get_template() ?>/assets/images/B_expand.svg"></span>
                                <div>Мы можем провести для вас бесплатный аудит. Он будет меньше, чем технический, но также поможет выявить ряд базовых проблем на сайте. <a onclick="jQuery.fancybox.open({src: '#modal-order-form'});return false;" href="#">Заказать бесплатный аудит</a></div>
                            </li>
                            <li><span>Сколько времени займет проведение полного технического аудита?<img src="/wp-content/themes/<?= get_template() ?>/assets/images/B_expand.svg"></span>
                                <div>Время зависит от текущей загруженности специалистов команды и от индивидуальных особенностей вашего сайта, однако в среднем выполнение занимает от 5 рабочих дней.</div>
                            </li>
                            <li><span>Мой сайт недавно создан, ему нужен технический аудит?<img src="/wp-content/themes/<?= get_template() ?>/assets/images/B_expand.svg"></span>
                                <div>Технический аудит незаменим для сайта любого возраста. В том числе проведение его для нового ресурса, как и для сайта, который еще существует в тестовой версии и только готовится к публикации, поможет избежать критических ошибок и не испортить “первое впечатление” как у пользователей, так и у поисковых систем.</div>
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
                                <div class="specialist__desc">Предлагает решения нестандартных проблем, ищет уникальные ошибки, выявляет параметры, которые, как правило, не описываются в чек-листах.</div>
                            </div>
                        </div>
                        <div class="who-did-kf__item">
                            <div class="specialist">
                                <div class="specialist__icon"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M13 28C13 29.1046 13.8954 30 15 30C16.1046 30 17 29.1046 17 28V17H28C29.1046 17 30 16.1046 30 15C30 13.8954 29.1046 13 28 13H17V2C17 0.895431 16.1046 0 15 0C13.8954 0 13 0.89543 13 2V13H2C0.895431 13 0 13.8954 0 15C0 16.1046 0.89543 17 2 17H13V28Z" fill="#A9A5A0"/></svg></div>
                                <div class="specialist__title">Руководитель проекта</div>
                                <div class="specialist__desc">Планирует и координирует работу команды, задает вектор проработки проекта, подготавливает ту часть расинга, для которой требуется нестандартный подход.</div>
                            </div>
                        </div>
                        <div class="who-did-kf__item">
                            <div class="specialist">
                                <div class="specialist__icon"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M13 28C13 29.1046 13.8954 30 15 30C16.1046 30 17 29.1046 17 28V17H28C29.1046 17 30 16.1046 30 15C30 13.8954 29.1046 13 28 13H17V2C17 0.895431 16.1046 0 15 0C13.8954 0 13 0.89543 13 2V13H2C0.895431 13 0 13.8954 0 15C0 16.1046 0.89543 17 2 17H13V28Z" fill="#A9A5A0"/></svg></div>
                                <div class="specialist__title">Младший SEO-специалист</div>
                                <div class="specialist__desc">Проводит проверку стандартных ошибок и парсинг, готовит выгрузки и делает подсчеты, занимается оформлением итоговых файлов.</div>
                            </div>
                        </div>
                        <div class="who-did-kf__item">
                            <div class="specialist">
                                <div class="specialist__icon"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M13 28C13 29.1046 13.8954 30 15 30C16.1046 30 17 29.1046 17 28V17H28C29.1046 17 30 16.1046 30 15C30 13.8954 29.1046 13 28 13H17V2C17 0.895431 16.1046 0 15 0C13.8954 0 13 0.89543 13 2V13H2C0.895431 13 0 13.8954 0 15C0 16.1046 0.89543 17 2 17H13V28Z" fill="#A9A5A0"/></svg></div>
                                <div class="specialist__title">Программист</div>
                                <div class="specialist__desc">Помогает разобраться со специфическими ошибками CMS и кода и отвечает за технические внедрения по итогам аудита.</div>
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
                    <div class="workflow__item">Проведение технического аудита</div>
                    <div class="workflow__item">Составление списка задач с приоритезацией</div>
                    <div class="workflow__item">Передача задач в работу специалистам (программист, SEO-специалист, контент-менеджер)</div>
                </div>
                <div class="workflow__order">
                    <button class="btn" data-fancybox href="#zakazat-audit-form">заказать тех.аудит</button>
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
                                    <div class="benefit__desc">Более 13 лет успешной работы в SEO</div>
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
                                    <div class="benefit__title">Гарантия</div>
                                    <div class="benefit__desc">Все наши проекты приносят результат в продвижении</div>
                                </div>
                                <div class="benefit">
                                    <div class="benefit__icon"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M13 28C13 29.1046 13.8954 30 15 30C16.1046 30 17 29.1046 17 28V17H28C29.1046 17 30 16.1046 30 15C30 13.8954 29.1046 13 28 13H17V2C17 0.895431 16.1046 0 15 0C13.8954 0 13 0.89543 13 2V13H2C0.895431 13 0 13.8954 0 15C0 16.1046 0.89543 17 2 17H13V28Z" fill="#A9A5A0"/></svg></div>
                                    <div class="benefit__title">Качество</div>
                                    <div class="benefit__desc">Сайт улучшается не только для поисковых систем, но и для пользователей в первую очередь</div>
                                </div>
                            </div>
                            <div class="why__item">
                                <div class="benefit">
                                    <div class="benefit__icon"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M13 28C13 29.1046 13.8954 30 15 30C16.1046 30 17 29.1046 17 28V17H28C29.1046 17 30 16.1046 30 15C30 13.8954 29.1046 13 28 13H17V2C17 0.895431 16.1046 0 15 0C13.8954 0 13 0.89543 13 2V13H2C0.895431 13 0 13.8954 0 15C0 16.1046 0.89543 17 2 17H13V28Z" fill="#A9A5A0"/></svg></div>
                                    <div class="benefit__title">Подход</div>
                                    <div class="benefit__desc">Предлагаем индивидуальные решения с учетом интересов вашего бизнеса, а не лепим готовые шаблоны</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="why__form">
                        <?php
                            set_query_var( 'zakazat_audit_title', 'Заявка на технический аудит от Ant-Team.ru' );
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
                                <li>Клиент 3</li>
                            </ul>
                        </div>
                        <div class="results__slider">
                            <div class="results__item">
								<ul>
									<li>Настроен robots.txt</li>
									<li>Настроен sitemap.xml</li>
									<li>Исправлены ошибки валидации HTML</li>
									<li>Проведена работа с мета-тегами</li>
									<li>Настроена кнопка "Корзина" в мобильной версии</li>
									<li>Настроена 404 страница</li>
									<li>Исправлены ошибки валидации CSS</li>
									<li>Удален повтор кода Гугл Аналитики</li>
									<li>Указан Content-Type</li>
									<li>Настроены страницы пагинации</li>
									<li>Устранены висячие узлы и редиректы</li>
									<li>Улучшена скорость загрузки сайта</li>
									<li>Исправлены ошибки микроразметки Open Graph</li>
									<li>Удален повтор микроразметки хлебных крошек</li>
									<li>Внедрена микроразметка schema.org/LocalBusiness</li>
									<li>Исправлена микроразметка schema.org/Product</li>
									<li>Разработаны и настроены цели</li>
									<li>Оптимизирован favicon</li>
									<li>Внедрен поиск по сайту и размечен микроразметкой</li>
									<li>Проведена работа со ссылочным</li>
								</ul>
                                <div class="results__more"><a class="link" href="#">Показать все<img src="/wp-content/themes/<?= get_template() ?>/assets/images/B_expand.svg"></a></div>
                            </div>
                            <div class="results__item">
<ul>
<li>Настроен robots.txt для основного домена и поддоменов</li>
<li>Настроен Sitemap.xml для основного домена и поддоменов</li>
<li>Настроены зеркала</li>
<li>Склеен один из поддоменов с основным доменом</li>
<li>Уникализированы мета-теги и текст</li>
<li>Для поддоменов уникализированы контактные данные и мета-теги</li>
<li>Устранены висячие узлы и битые ссылки</li>
<li>Настроен 301 редирект для ссылок с лишними слэшами</li>
<li>Разработаны и настроены цели</li>
<li>Исправлены ошибки валидности HTML</li>
<li>Внедрена микроразметка OpenGraph</li>
<li>Внедрена микроразметка LocalBusiness</li>
<li>Внедрена микроразметка для страниц новостей</li>
<li>Добавлен рейтинг к отзывам и в форму &ldquo;оставить отзыв&rdquo;</li>
<li>Внедрена микроразметка для страниц услуг и отзывов</li>
<li>Настроены страницы пагинации</li>
<li>Настроена удобная смена региона</li>
<li>Уменьшена скорость ответа сервера</li>
<li>Исправлены ошибки валидности CSS</li>
<li>Настроен favicon</li>
<li>Исправлены предупреждения в микроразметке хлебных крошек</li>
<li>Заменена микроразметка data-vocabulary.org на schema.org</li>
<li>Заполнены alt у изображений</li>
<li>Сделан поиск по сайту и размечен микроразметкой</li>
</ul>
                                <div class="results__more"><a class="link" href="#">Показать все<img src="/wp-content/themes/<?= get_template() ?>/assets/images/B_expand.svg"></a></div>
                            </div>
                            <div class="results__item">
<ul>
<li>Настроен robots.txt</li>
<li>Исправлены ошибки валидности HTML</li>
<li>Указан Content-Type</li>
<li>Исправлены ошибки адаптивной версии</li>
<li>Исправлены ошибки валидности CSS</li>
<li>Закрыты поддомены от индексации</li>
<li>Внедрены и размечены хлебные крошки</li>
<li>Устранены дубликаты и уникализированы мета-теги</li>
<li>Устранены редиректы</li>
<li>Удалены битые ссылки</li>
<li>Настроен 404 код</li>
<li>Оптимизирована скорость загрузки</li>
<li>Исправлены ошибки микроразметки OpenGraph</li>
<li>Внедрена микроразметка schema.org/LocalBusiness</li>
<li>Внедрена микроразметка страниц новостей schema.org/Article</li>
<li>Внедрена микроразметка schema.org/Product</li>
<li>Исправлены ошибки Favicon</li>
<li>Закрыты исходящие ссылки в nofollow</li>
<li>Разработаны и настроены цели</li>
</ul>
                                <div class="results__more"><a class="link" href="#">Показать все<img src="/wp-content/themes/<?= get_template() ?>/assets/images/B_expand.svg"></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_template_part('template-parts/tariffs') ?>

<?php get_template_part('template-parts/dop_services') ?>

<?php
the_content();
?>

<?php
get_footer();
?>