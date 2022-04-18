<?php
get_header();
?>

<section class="audit">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="audit__wrapper">
                    <div class="audit__content">
                        <h1>Семантическое ядро</h1>
                        <p>Семантическое ядро - фундамент грамотного SEO-продвижения. Однако убедитесь, что он достаточно прочный для построения дальнейшей работы!</p>
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
                        <h2>Зачем собирать семантику?</h2>
                    </div>
                    <div class="what-check__slider">
                        <div class="what-check__item">
                            <div class="check-list">
                                <div class="check-list__title">Анализ спроса</div>
                                <ul class="check-list__list">
									<li>Получив полное семантическое ядро, вы увидите:</li>
                                    <li>какими из ваших товаров/услуг клиенты интересуются больше, а на какие спроса нет</li>
                                    <li>на какие товары/услуги спрос сезонный и когда наступает сезон</li>
                                    <li>как расставить приоритеты при проработке страниц и разделов сайта</li>
                                </ul>
                            </div>
                        </div>
                        <div class="what-check__item">
                            <div class="check-list">
                                <div class="check-list__title">Проработка структуры сайта</div>
                                <ul class="check-list__list">
                                    <li>Структура, построенная на основе семантического ядра, будет более полной и продуманной, чем составленная “из головы”. В том числе это незаменимо, если вы только планируете создание сайта. Сайт с проработанной структурой имеет большие шансы на успешное продвижение и лучше понятен пользователю и поисковой системе.</li>
                                </ul>
                            </div>
                        </div>
						<div class="what-check__item">
                            <div class="check-list">
                                <div class="check-list__title">Проработка текстовой релевантности страниц</div>
                                <ul class="check-list__list">
                                    <li>Проанализировав выдачу по кластерам, мы составляем подробное ТЗ на написание нового или доработку текущего контента. Как результат - повышается текстовая релевантность страниц и их позиции в выдаче растут.</li>
                                </ul>
                            </div>
                        </div>
						<div class="what-check__item">
                            <div class="check-list">
                                <div class="check-list__title">Сбор недополученного трафика</div>
                                <ul class="check-list__list">
                                    <li>Что, если мы скажем, что вы упускаете часть клиентов, потому что забыли создать соответствующие страницы с востребованными товарами/услугами? Семантическое ядро поможет выявить такие слепые пятна, чтобы вы могли предложить клиентам максимум! </li>
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
                            <li class="active"><span>Сколько времени займет сбор семантики?<img src="/wp-content/themes/<?= get_template() ?>/assets/images/B_expand.svg"></span>
                                <div>Безусловно, это зависит в основном от количества ключей, то есть от того, насколько широкую тему мы охватим. В среднем сбор ядра на 1000 ключей с кластеризацией, чисткой и согласованием занимает 1-2 недели.</div>
                            </li>
                            <li><span>У нас есть старая семантика, которую собирали сами/в другой компании. Можно ее доработать, а не собирать с нуля?<img src="/wp-content/themes/<?= get_template() ?>/assets/images/B_expand.svg"></span>
                                <div>Семантику доработать можно. В таком случае специалисты пересоберут частотность имеющихся ключей, дособерут новые с учетом ваших пожеланий, вычистят “мусор” - нетематические запросы и запросы с нулевой частотностью и проверят кластеризацию. Такая семантика в итоге будет не хуже собранной с нуля. По ней также можно составлять структуру и делать текстовую оптимизацию.</div>
                            </li>
                            <li><span>Сколько запросов будет собрано?<img src="/wp-content/themes/<?= get_template() ?>/assets/images/B_expand.svg"></span>
                                <div>Это зависит от конкретной тематики. Одно дело - собрать семантику по теме “шампуни”, и совсем другое - по теме “профессиональная косметика”. Количество ключей будет отличаться в десятки, если не в сотни раз. Примерный размер семантики обсуждается в начале сотрудничества.</div>
                            </li>
                            <li><span>Можно собрать семантику не для всего сайта, а только для одного раздела?<img src="/wp-content/themes/<?= get_template() ?>/assets/images/B_expand.svg"></span>
                                <div>Безусловно. Кроме того, мы считаем такой подход рациональным, так как это позволяет “не распыляться” на все темы сразу и более качественно проработать меньший объем ключей.</div>
                            </li>
                            <li><span>Что, если нам не понравится ваша работа?<img src="/wp-content/themes/<?= get_template() ?>/assets/images/B_expand.svg"></span>
                                <div>Мы всегда готовы выслушать ваши пожелания, а также каждый значимый этап работы подразумевает согласование с вами. Во время согласования можно и нужно высказывать свою точку зрения, потому что никто не знает ваш бизнес лучше, чем вы сами! Именно за счет таких обсуждений мы добиваемся максимального взаимопонимания и сводим к минимуму возможное недовольство.</div>
                            </li>

                            <li><span>Почему у вас такие низкие цены?<img src="/wp-content/themes/<?= get_template() ?>/assets/images/B_expand.svg"></span>
                                <div>Над проектом одновременно трудятся специалисты разного уровня. Именно благодаря делегированию задач и налаженной координации в команде мы максимально эффективно используем временные и трудовые ресурсы. Это позволяет, в конечном итоге, добиться выгодной цены для наших клиентов.</div>
                            </li>
							
                            <li><span>У меня нет своих копирайтеров. Кто будет работать над написанием текстов?<img src="/wp-content/themes/<?= get_template() ?>/assets/images/B_expand.svg"></span>
                                <div>Мы поможем вам, если вы не знаете, кому доверить написание текстов по ТЗ. Кто будет работать на этом этапе: Редактор - координирует работу копирайтеров и общается напрямую с вами, чтобы учитывать все ваши пожелания относительно текстов. Как результат - идеальные продающие тексты: информативные, легкие для восприятия, полезные для посетителей. Копирайтеры - напишут для вас тексты на любую тему. В основном мы работаем с копирайтерами на постоянной основе, поэтому они отлично знают наши требования, а мы уверены в качестве их работы.</div>
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
                                <div class="specialist__desc">Предлагает решения нестандартных проблем, таких как экономия ресурсов и ускорение работы.</div>
                            </div>
                        </div>
                        <div class="who-did-kf__item">
                            <div class="specialist">
                                <div class="specialist__icon"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M13 28C13 29.1046 13.8954 30 15 30C16.1046 30 17 29.1046 17 28V17H28C29.1046 17 30 16.1046 30 15C30 13.8954 29.1046 13 28 13H17V2C17 0.895431 16.1046 0 15 0C13.8954 0 13 0.89543 13 2V13H2C0.895431 13 0 13.8954 0 15C0 16.1046 0.89543 17 2 17H13V28Z" fill="#A9A5A0"/></svg></div>
                                <div class="specialist__title">Руководитель проекта</div>
                                <div class="specialist__desc">Планирует и координирует работы команды, задает вектор сбора семантики на основании слов заказчика о типе бизнеса и текущих проблемах сайта. Подбирает конкурентов и согласовывает с клиентом начало каждого нового этапа работы</div>
                            </div>
                        </div>
                        <div class="who-did-kf__item">
                            <div class="specialist">
                                <div class="specialist__icon"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M13 28C13 29.1046 13.8954 30 15 30C16.1046 30 17 29.1046 17 28V17H28C29.1046 17 30 16.1046 30 15C30 13.8954 29.1046 13 28 13H17V2C17 0.895431 16.1046 0 15 0C13.8954 0 13 0.89543 13 2V13H2C0.895431 13 0 13.8954 0 15C0 16.1046 0.89543 17 2 17H13V28Z" fill="#A9A5A0"/></svg></div>
                                <div class="specialist__title">Младший SEO-специалист</div>
                                <div class="specialist__desc">Проводит подготовку и сбор маркеров, пересекает и собирает запросы. Собирает частотность и чистит семантику, кластеризует в автоматическом и ручном режимах. Занимается оформлением итоговых файлов</div>
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
                    <div class="workflow__item">Согласование задания, подписание договора и оплата</div>
                    <div class="workflow__item">Изучение тематики, согласование маркеров</div>
                    <div class="workflow__item">Пересечение, парсинг, чистка, кластеризация</div>
                    <div class="workflow__item">Передача готового проекта</div>
                   
                </div>
                <div class="workflow__order">
                    <button class="btn" data-fancybox href="#zakazat-audit-form">заказать семантическое ядро</button>
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
                                <div class="benefit">
                                    <div class="benefit__icon"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M13 28C13 29.1046 13.8954 30 15 30C16.1046 30 17 29.1046 17 28V17H28C29.1046 17 30 16.1046 30 15C30 13.8954 29.1046 13 28 13H17V2C17 0.895431 16.1046 0 15 0C13.8954 0 13 0.89543 13 2V13H2C0.895431 13 0 13.8954 0 15C0 16.1046 0.89543 17 2 17H13V28Z" fill="#A9A5A0"/></svg></div>
                                    <div class="benefit__title">Уникальность</div>
                                    <div class="benefit__desc">Семантика будет собрана с нуля именно для вашего проекта с учетом всех пожеланий и приоритетов</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="why__form">
                        <?php
                            set_query_var( 'zakazat_audit_title', 'Заявка на аудит семантического ядра от Ant-Team.ru' );
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
                                    <li>Задача - собрать семантическое ядро по строительным лесам. Результат: 170 ключей, 36 групп </li>
                                </ul>
                            </div>
                            <div class="results__item">
                                <ul>
                                    <li>Банный комплекс. Задача - собрать запросы, связанные с арендой бани, купели, беседок. Результат: 1085 ключей, 225 групп</li>
                                </ul>
                            </div>
                            <div class="results__item">
                                <ul>
                                    <li>Задача - собрать семантическое ядро по косметике для волос. Результат: 18193 ключа, 6625 групп/li>
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

<?php
the_content();
?>

<?php
get_footer();
?>