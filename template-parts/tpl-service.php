<?php
/*
Template Name: Страница услуг
*/
get_header();
$content = array();
$content[2653] = array();
$content[2653]['background'] = '/wp-content/themes/ant-team-ru/assets/img/service/analytics.jpg';
$content[2653]['topSectionModalId'] = '#modalTakeFreeAudit';
$content[2653]['topSectionModalText'] = 'Заказать технический аудит';
$content[2653]['titleSubDescriotion'] = 'Технический аудит - комплексная проверка сайта на наличие технических ошибок и составление рекомендаций по их исправлению';
$content[2653]['usefullList'] = array(
    'title' => 'Что проверяет технический аудит',
    'content' =>
        array(
            array('icon' => 'fa-users', 'title' => 'Разметка целевых действий', 'desc' => 'в Яндекс.Метрике и Google Analytics: какие цели уже настроены, корректность сбора данных, рекомендации по настройке дополнительных целей'),
            array('icon' => 'fa-file', 'title' => 'Корректность файла robots.txt', 'desc' => 'наличие, текущий вид, ошибки, корректность индексации, рекомендации по настройке'),
            array('icon' => 'fa-file-alt', 'title' => 'Корректность sitemap.xml', 'desc' => 'наличие, полнота, дубли, битые страницы и страницы с редиректами, служебные страницы, автоматическое обновление и генерация, рекомендации по настройке'),
            array('icon' => 'fa-code', 'title' => 'Валидность', 'desc' => 'проверка кода на ошибки, в т.ч. фатальные, рекомендации по исправлению'),
            array('icon' => 'fa-cogs', 'title' => 'Валидность CSS', 'desc' => 'проверка кода на ошибки и предупреждения, рекомендации по исправлению'),
            array('icon' => 'far fa-file-image', 'title' => 'Валидность Favicon', 'desc' => 'наличие, корректность отображения и оптимизация для различных браузеров'),
            array('icon' => 'fa-wrench', 'title' => 'Полнота и корректность микроразметки', 'desc' => 'микроразметка для соцсетей, товаров, услуг, новостей, информации о компании, листингов товаров, поиска, хлебных крошек, новостей, логотипа и т.д.'),
            array('icon' => 'far fa-file-code', 'title' => 'Мета-теги noindex, nofollow, canonical', 'desc' => 'наличие, корректность настройки'),
            array('icon' => 'fa-window-restore', 'title' => 'Корректность настройки зеркал', 'desc' => 'поиск всех зеркал сайта, проверка корректности настройки, рекомендации по склейке и редиректам'),
            array('icon' => 'fa-lock', 'title' => 'Безопасный протокол работы сайта', 'desc' => 'наличие, корректность настройки, рекомендации по внедрению'),
            array('icon' => 'fa-tasks', 'title' => 'Наличие технических дубликатов', 'desc' => 'поиск технических дубликатов, рекомендации по их уникализации или удалению'),
            array('icon' => 'fa-desktop', 'title' => 'Анализ поддоменов сайта', 'desc' => 'поиск всех поддоменов, проверка корректности индексации и служебных настроек (sitemap, robots.txt), рекомендации по уникализации и индексации'),
            array('icon' => 'fa-exclamation-triangle', 'title' => 'Спамные блоки скрытого текста', 'desc' => 'наличие, рекомендации по устранению'),
            array('icon' => 'fa-sign-in', 'title' => 'Входящие ссылки', 'desc' => 'наличие, количество, качество, резкие скачки количества, рекомендации по наращиванию качественных и снятию спамных ссылок'),
            array('icon' => 'fa-sign-out', 'title' => 'Исходящие ссылки', 'desc' => 'наличие, количество, качество, рекомендации по удалению некачественных ссылок и закрытию в nofollow'),
            array('icon' => 'fa-spinner', 'title' => 'Висячие узлы, редиректы', 'desc' => 'наличие, рекомендации по настройке и удалению редиректов и висячих узлов'),
            array('icon' => 'fa-bolt', 'title' => 'Битые ссылки', 'desc' => 'наличие, рекомендации по удалению битых ссылок'),
            array('icon' => 'fa-minus-circle', 'title' => 'Корректность 404 кода', 'desc' => 'корректность кода ответа сервера для разных типов несуществующих страниц, их внешний вид, рекомендации по настройке'),
            array('icon' => 'far fa-check-square', 'title' => 'Корректность 200 кода', 'desc' => 'корректность кода ответа сервера для существующих страниц, рекомендации по исправлению ошибок'),
            array('icon' => 'far fa-clock', 'title' => 'Скорость ответа сервера', 'desc' => 'поиск проблем и ошибок, влияющих на скорость загрузки сайта, рекомендации по оптимизации скорости загрузки'),
            array('icon' => 'fa-chart-line', 'title' => 'Полнота и корректность индексации', 'desc' => 'анализ страниц сайта в индексе Яндекс и Google: количество страниц в индексе, возможные проблемы индексации, рекомендации по их решению'),
            array('icon' => 'fa-mobile', 'title' => 'Мобильная верстка', 'desc' => 'проверка наличия и качества адаптивной верстки, поиск проблем с отображением на различных устройствах - телефонах, планшетах разных моделей'),
        ),);
$content[2653]['who-doing'] = array(
    'title' => 'Кто выполняет технический аудит',
    'content' => array(
        array('icon' => 'fa-gem', 'person' => 'Старший SEO-специалист', 'text' => 'основываясь на многолетнем опыте работы, предлагает решения нестандартных проблем, занимается поиском редких ошибок технической оптимизации сайта. Старший SEO специалист выявляет ошибки, которые как правило не описываются в чек-листах.'),
        array('icon' => 'fa-cogs', 'person' => 'Руководитель проекта', 'text' => 'планирует и координирует работы команды, задает вектор проработки проекта на основании слов заказчика о типе бизнеса и текущих проблемах сайта.'),
        array('icon' => 'fa-suitcase', 'person' => 'Младший SEO-специалист', 'text' => 'проводит поиск стандартных проблем, готовит выгрузки ошибок для исправления, занимается оформлением итоговых файлов.'),
    ),
);
$content[2653]['faq'] = array(
    'title' => 'F.A.Q.',
    'content' => array(
        array('question' => 'У вас есть программист, которому можно поручить работы по итогам аудита?', 'text' => 'Да, у нас в команде работает опытный программист, который готов помочь с выполнением задач по итогам аудита. Также, если у вас есть свой программист, специалист из нашей команды готов ответить на его возможные вопросы по задачам.'),
        array('question' => 'Какие аудиты, кроме технического, вы можете предложить?', 'text' => 'Мы также проводим аудит коммерческих факторов конкурентов и аудит YMYL-факторов ранжирования. Оба аудита направлены на выявление слабых мест у вашего сайта, которые мешают получить высокие позиции. Вы также можете заказать их для получения комплексных рекомендаций по продвижению.'),
        array('question' => 'Можно ли сделать аудит бесплатно?', 'text' => 'Мы можем провести для вас бесплатный аудит. Он будет меньше, чем технический, но также поможет выявить ряд базовых проблем на сайте. <a href="#" data-toggle="modal" data-target="#modalTakeFreeAudit">Заказать бесплатный аудит</a>'),
        array('question' => 'Сколько времени займет проведение полного технического аудита?', 'text' => 'Время зависит от текущей загруженности специалистов команды и от индивидуальных особенностей вашего сайта, однако в среднем выполнение занимает от 5 рабочих дней.'),
        array('question' => 'Мой сайт недавно создан, ему нужен технический аудит?', 'text' => 'Технический аудит незаменим для сайта любого возраста. В том числе проведение его для нового ресурса, как и для сайта, который еще существует в тестовой версии и только готовится к публикации, поможет избежать критических ошибок и не испортить “первое впечатление” как у пользователей, так и у поисковых систем.'),
    ),
);
$content[2653]['work-order'] = array(
    'title' => 'Порядок работы',
    'content' => array(
        array('order' => 1, 'icon' => 'far fa-address-card', 'text' => 'Заполнение заявки'),
        array('order' => 2, 'icon' => 'fa-credit-card', 'text' => 'Подписание договора и оплата'),
        array('order' => 3, 'icon' => 'fa-flask', 'text' => 'Проведение технического аудита'),
        array('order' => 4, 'icon' => 'fa-chart-pie', 'text' => 'Составление списка задач с приоритезацией'),
        array('order' => 5, 'icon' => 'far fa-handshake', 'text' => 'Передача задач в работу специалистам (программист, SEO-специалист, контент-менеджер)'),
    )
);
$content[2653]['why-we'] = array(
    'title' => 'Почему мы',
    'content' => array(
        array('title' => 'Квалификация', 'text' => 'Над проектом одновременно работают специалисты разного уровня'),
        array('title' => 'Опыт', 'text' => 'Более 11 лет успешной работы в SEO'),
        array('title' => 'Прозрачность', 'text' => 'Доступ к CRM, подробные отчёты и обратная связь'),
        array('title' => 'Без рисков', 'text' => 'Все действия заранее продумываются, чтобы исключить вероятность попадания под фильтр'),
        array('title' => 'Гарантия', 'text' => 'Все наши проекты приносят результат в продвижении'),
        array('title' => 'Качество', 'text' => 'Сайт улучшается не только для поисковых систем, но и для пользователей в первую очередь'),
        array('title' => 'Подход', 'text' => 'Предлагаем индивидуальные решения с учетом интересов вашего бизнеса, а не лепим готовые шаблоны'),
    )
);
$content[2653]['works'] = array(
    'title' => 'Посмотрите примеры наших аудитов',
    'sub_title' => 'Мы подготовили для вас примеры тех. аудитов, которые сделали для реальных проектов. Они доступн по ссылкам.',
    'content' => array(
        array('title' => 'Пример', 'link' => 'https://docs.google.com/document/d/14S2JbNGML5x2ou1iIw3iag_g09pjAtFcR5kq1n6bvNk/edit', 'text' => ''),
    )
);
$content[2653]['effect'] = array(
    'title' => 'Результаты наших клиентов',
    'content' => array(
        array('name' => 'Аврора', 'text' => 'Над проектом одновременно работают специалисты разного уровня'),
        array('name' => 'Кристенко', 'text' => 'Более 11 лет успешной работы в SEO'),
        array('name' => 'shop.antu.ru', 'text' => 'Доступ к CRM, подробные отчёты и обратная связь'),
    )
);
$content[2653]['service'] = array(
    'title' => 'Дополнительные услуги',
    'content' => array(
        array('name' => 'Составление структуры сайта', 'link' => "", "modal" => "#modalTakePrice", 'text' => 'Этот этап особенно важен, если вы только проектируете свой сайт, но также будет полезен и существующим ресурсам. На основе семантики мы делаем блок-схему - структуру сайта, и согласовываем с вами.'),
        array('name' => 'Проработка мета-тегов', "modal" => "#modalTakePrice", 'text' => 'По полученной семантике мы составим для вас мета-теги страниц (title, description, h1) с учетом всех SEO-рекомендаций.'),
        array('name' => 'Проработка структуры посадочных', "modal" => "#modalTakePrice", 'text' => 'Мы проанализируем конкурентов и лидеров тематики и подготовим для вас подробную структуру посадочной страницы (одной конкретной или шаблонной) в виде блок-схемы и текстового описания с примерами с других сайтов. Такую структуру можно сразу передавать дизайнеру, а страница, созданная по ней, будет удобна пользователю. Благодаря проведенному нами анализу конкурентов вы можете быть уверены, что ваша страница будет как минимум не хуже, чем у других.'),
        array('name' => 'Подготовка ТЗ на контент по приоритетным и высокочастотным кластерам', "modal" => "#modalTakePrice", 'text' => 'По кластерам с наибольшей суммарной частотностью, а также по тем, которые вы выделили на этапе согласования семантического ядра как приоритетные, составляются ТЗ на написание нового или доработку существующего контента.'),
        array('name' => 'Передача ТЗ в работу копирайтерам', "modal" => "#modalTakePrice", 'text' => 'Если у вас нет копирайтеров, готовых написать тексты по подготовленным ТЗ - не беда: мы можем вам помочь! Наши копирайтеры - настоящие профессионалы, проверенные временем и десятками проектов.'),
    )
);


$content[2753] = array();
$content[2753]['background'] = '/wp-content/themes/ant-team-ru/assets/img/service/computer.jpg';
$content[2753]['topSectionModalId'] = '#modalTakePrice';
$content[2753]['topSectionModalText'] = 'Заказать семантическое ядро';
$content[2753]['titleSubDescriotion'] = 'Семантическое ядро - фундамент грамотного SEO-продвижения. Однако убедитесь, что он достаточно прочный для построения дальнейшей работы!';
$content[2753]['usefullList'] = array(
    'title' => 'Зачем собирать семантику?',
    'content' =>
        array(
            array('icon' => 'fa-pie-chart
', 'title' => 'Анализ спроса', 'desc' => 'Получив полное семантическое ядро, вы увидите: 
<ul><li>какими из ваших товаров/услуг клиенты интересуются больше, а на какие спроса нет</li>
<li>на какие товары/услуги спрос сезонный и когда наступает сезон</li>
<li>как расставить приоритеты при проработке страниц и разделов сайта</li></ul>
'),
            array('icon' => 'fa-code-fork', 'title' => 'Проработка структуры сайта', 'desc' => 'Структура, построенная на основе семантического ядра, будет более полной и продуманной, чем составленная “из головы”. В том числе это незаменимо, если вы только планируете создание сайта. Сайт с проработанной структурой имеет большие шансы на успешное продвижение и лучше понятен пользователю и поисковой системе.'),
            array('icon' => 'fa-align-left', 'title' => 'Проработка текстовой релевантности страниц', 'desc' => 'Проанализировав выдачу по кластерам, мы составляем подробное ТЗ на написание нового или доработку текущего контента. Как результат - повышается текстовая релевантность страниц и их позиции в выдаче растут.'),
            array('icon' => 'fa-line-chart', 'title' => 'Сбор недополученного трафика', 'desc' => 'Что, если мы скажем, что вы упускаете часть клиентов, потому что забыли создать соответствующие страницы с востребованными товарами/услугами? Семантическое ядро поможет выявить такие слепые пятна, чтобы вы могли предложить клиентам максимум!'),
        ),);
$content[2753]['who-doing'] = array(
    'title' => 'Кто отвечает за работу над семантикой',
    'content' => array(
        array('icon' => 'fa-gem', 'person' => 'Старший SEO-специалист', 'text' => 'основываясь на многолетнем опыте работы, предлагает решения нестандартных проблем. Поддерживает с вами обратную связь и всегда готов выслушать ваши пожелания или ответить на вопросы.'),
        array('icon' => 'fa-cogs', 'person' => 'Руководитель проекта', 'text' => 'планирует и координирует работы команды, задает вектор проработки проекта на основании слов заказчика о типе бизнеса и текущих проблемах сайта.'),
        array('icon' => 'fa-suitcase', 'person' => 'Младший SEO-специалист', 'text' => 'подготавливает маркеры, проводит парсинг и первичную чистку ключей по минус-словам и частотности. Проводит автоматическую и ручную кластеризацию, составляет технические задания на контент, готовит структуру сайта.'),
    ),
);
$content[2753]['faq'] = array(
    'title' => 'F.A.Q.',

    'content' => array(
        array('question' => 'Сколько времени займет сбор семантики?', 'text' => 'Безусловно, это зависит в основном от количества ключей, то есть от того, насколько широкую тему мы охватим. В среднем сбор ядра на 1000 ключей с кластеризацией, чисткой и согласованием занимает 1-2 недели.'),
        array('question' => 'У нас есть старая семантика, которую собирали сами/в другой компании. Можно ее доработать, а не собирать с нуля?', 'text' => 'Семантику доработать можно. В таком случае специалисты пересоберут частотность имеющихся ключей, дособерут новые с учетом ваших пожеланий, вычистят “мусор” - нетематические запросы и запросы с нулевой частотностью и проверят кластеризацию. Такая семантика в итоге будет не хуже собранной с нуля. По ней также можно составлять структуру и делать текстовую оптимизацию.'),
        array('question' => 'Сколько запросов будет собрано?', 'text' => 'Это зависит от конкретной тематики. Одно дело - собрать семантику по теме “шампуни”, и совсем другое - по теме “профессиональная косметика”. Количество ключей будет отличаться в десятки, если не в сотни раз. Примерный размер семантики обсуждается в начале сотрудничества.'),
        array('question' => 'Можно собрать семантику не для всего сайта, а только для одного раздела?', 'text' => 'Безусловно. Кроме того, мы считаем такой подход рациональным, так как это позволяет “не распыляться” на все темы сразу и более качественно проработать меньший объем ключей. '),
        array('question' => 'Что, если нам не понравится ваша работа?', 'text' => 'Мы всегда готовы выслушать ваши пожелания, а также каждый значимый этап работы подразумевает согласование с вами. Во время согласования можно и нужно высказывать свою точку зрения, потому что никто не знает ваш бизнес лучше, чем вы сами! Именно за счет таких обсуждений мы добиваемся максимального взаимопонимания и сводим к минимуму возможное недовольство.'),
        array('question' => 'Почему у вас такие низкие цены?', 'text' => 'Над проектом одновременно трудятся специалисты разного уровня. Именно благодаря делегированию задач и налаженной координации в команде мы максимально эффективно используем временные и трудовые ресурсы. Это позволяет, в конечном итоге, добиться выгодной цены для наших клиентов.'),
        array('question' => 'У меня нет своих копирайтеров. Кто будет работать над написанием текстов?', 'text' => 'Мы поможем вам, если вы не знаете, кому доверить написание текстов по ТЗ.
Кто будет работать на этом этапе:
Редактор - координирует работу копирайтеров и общается напрямую с вами, чтобы учитывать все ваши пожелания относительно текстов. Как результат - идеальные продающие тексты: информативные, легкие для восприятия, полезные для посетителей.
Копирайтеры - напишут для вас тексты на любую тему. В основном мы работаем с копирайтерами на постоянной основе, поэтому они отлично знают наши требования, а мы уверены в качестве их работы.
'),
    ),
);
$content[2753]['work-order'] = array(
    'title' => 'Порядок работы',
    'content' => array(
        array('order' => 1, 'icon' => 'far fa-address-card', 'text' => 'Заполнение заявки'),
        array('order' => 2, 'icon' => 'fa-credit-card', 'text' => 'Подписание договора и оплата'),
        array('order' => 3, 'icon' => 'fa-flask', 'text' => 'Проведение технического аудита'),
        array('order' => 4, 'icon' => 'fa-chart-pie', 'text' => 'Составление списка задач с приоритезацией'),
        array('order' => 5, 'icon' => 'far fa-handshake', 'text' => 'Передача задач в работу специалистам (программист, SEO-специалист, контент-менеджер)'),
    )
);
$content[2753]['why-we'] = array(
    'title' => 'Почему мы',
    'content' => array(
        array('title' => 'Квалификация', 'text' => 'Над проектом одновременно работают специалисты разного уровня'),
        array('title' => 'Опыт', 'text' => 'Более 11 лет успешной работы в SEO'),
        array('title' => 'Прозрачность', 'text' => 'Доступ к CRM, подробные отчёты и обратная связь'),
        array('title' => 'Без рисков', 'text' => 'Все действия заранее продумываются, чтобы исключить вероятность попадания под фильтр'),
        array('title' => 'Гарантия', 'text' => 'Все наши проекты приносят результат в продвижении'),
        array('title' => 'Качество', 'text' => 'Сайт улучшается не только для поисковых систем, но и для пользователей в первую очередь'),
        array('title' => 'Подход', 'text' => 'Предлагаем индивидуальные решения с учетом интересов вашего бизнеса, а не лепим готовые шаблоны'),
        array('title' => 'Уникальность', 'text' => 'Семантика будет собрана с нуля именно для вашего проекта с учетом всех пожеланий и приоритетов'),


    )
);
$content[2753]['works'] = array(
    'title' => 'Посмотрите примеры семантических ядер',
    'sub_title' => 'Мы подготовили для вас примеры семантических ядер, которые собирали для реальных проектов. Они доступны для скачивания по ссылкам.',
    'content' => array(
        array('title' => 'Леса', 'link' => 'https://drive.google.com/file/d/1y6vkr4VO0ekL8bXANLSG3WKCEkBKKoL1/view', 'text' => ''),
        array('title' => 'Бани', 'link' => 'https://docs.google.com/spreadsheets/d/18QJZkRbslHTk9R3qb0kfr9Op-8t9tmbh/edit#gid=314273323', 'text' => ''),
    )
);
$content[2753]['effect'] = array(
    'title' => 'Результаты наших клиентов',
    'content' => array(
        array('name' => 'Аврора', 'text' => 'Над проектом одновременно работают специалисты разного уровня'),
        array('name' => 'Кристенко', 'text' => 'Более 11 лет успешной работы в SEO'),
        array('name' => 'shop.antu.ru', 'text' => 'Доступ к CRM, подробные отчёты и обратная связь'),
    )
);
$content[2753]['service'] = array(
    'title' => 'Дополнительные услуги',
    'content' => array(
        array('name' => 'Seo Продвижение', 'link' => "", "modal" => "#modalTakePrice", 'text' => 'Над проектом одновременно работают специалисты разного уровня'),
        array('name' => 'Семантика', "modal" => "#modalTakePrice", 'text' => 'Более 11 лет успешной работы в SEO'),
        array('name' => 'Аудит технический', "modal" => "#modalTakePrice", 'text' => 'Доступ к CRM, подробные отчёты и обратная связь'),
        array('name' => 'Аудит seo', "modal" => "#modalTakePrice", 'text' => 'Доступ к CRM, подробные отчёты и обратная связь'),
    )
);
$content[2753]['service'] = array(
    'title' => 'Дополнительные услуги',
    'content' => array(
        array('name' => 'Составление структуры сайта', 'link' => "", "modal" => "#modalTakePrice", 'text' => 'Этот этап особенно важен, если вы только проектируете свой сайт, но также будет полезен и существующим ресурсам. На основе семантики мы делаем блок-схему - структуру сайта, и согласовываем с вами.'),
        array('name' => 'Проработка мета-тегов', "modal" => "#modalTakePrice", 'text' => 'По полученной семантике мы составим для вас мета-теги страниц (title, description, h1) с учетом всех SEO-рекомендаций.'),
        array('name' => 'Проработка структуры посадочных', "modal" => "#modalTakePrice", 'text' => 'Мы проанализируем конкурентов и лидеров тематики и подготовим для вас подробную структуру посадочной страницы (одной конкретной или шаблонной) в виде блок-схемы и текстового описания с примерами с других сайтов. Такую структуру можно сразу передавать дизайнеру, а страница, созданная по ней, будет удобна пользователю. Благодаря проведенному нами анализу конкурентов вы можете быть уверены, что ваша страница будет как минимум не хуже, чем у других.'),
        array('name' => 'Подготовка ТЗ на контент по приоритетным и высокочастотным кластерам', "modal" => "#modalTakePrice", 'text' => 'По кластерам с наибольшей суммарной частотностью, а также по тем, которые вы выделили на этапе согласования семантического ядра как приоритетные, составляются ТЗ на написание нового или доработку существующего контента.'),
        array('name' => 'Передача ТЗ в работу копирайтерам', "modal" => "#modalTakePrice", 'text' => 'Если у вас нет копирайтеров, готовых написать тексты по подготовленным ТЗ - не беда: мы можем вам помочь! Наши копирайтеры - настоящие профессионалы, проверенные временем и десятками проектов.'),
    )
);
$id = get_the_ID();
$bg = $content[$id]['background'];;
$titleSubDescriotion = $content[$id]['titleSubDescriotion'];
$topSectionModalId = $content[$id]['topSectionModalId'];
$topSectionModalText = $content[$id]['topSectionModalText'];
$contentList = $content[$id]['contentList'];
$usefullList = $content[$id]['usefullList'];
$whoDoingList = $content[$id]['who-doing'];
$faqList = $content[$id]['faq']['content'];
$workOrder = $content[$id]['work-order'];
$whyWe = $content[$id]['why-we'];
$works = $content[$id]['works'];
$effect = $content[$id]['effect'];
$service = $content[$id]['service'];
$skipArray=array(
        'background',
    'titleSubDescriotion',
    'topSectionModalId',
    'topSectionModalText',
);
?>

<section id="top-picture-action">
    <div class="shadow-wrapp">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="top-section-container">
                        <h1 class="top-section_h1"><?= get_the_title(); ?></h1>
                        <p class="top-section_title-sub-description"><?= $titleSubDescriotion ?></p>
                        <span class="btn top-section_btn" data-toggle="modal"
                              data-target="<?= $topSectionModalId ?>"><?= $topSectionModalText ?></span>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <span class="content-list_title">Содержание:</span>
                    <ul class="content-list">
                        <? foreach ($content[2653] as $key => $value) {
                            if(in_array($key,$skipArray)){ continue;}
                            echo ' <li><a href="#' . $key . '">' . $value['title'] . '</a></li>';
                        } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="content-list" style="display: none;">
    <div class="container">
        <div class="row">
            <div class="col-12 section-title">
                Содержание
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="content-list_img">
                    <img src="/wp-content/themes/ant-team-ru/assets/img/service/content-list-1.png">
                </div>
            </div>
            <div class="col-md-6 col-12">
                <ul class="content-list">
                    <? foreach ($contentList as $listItem) {
                        echo ' <li><a href="' . $listItem['link'] . '">' . $listItem['name'] . '</a></li>';
                    } ?>
                </ul>
            </div>
        </div>
    </div>

</section>
<section id="usefull">
    <div class="container">
        <div class="row">
            <div class="col-12 section-title">
                <?=$usefullList['title']?>
            </div>
        </div>
        <div class="row usefull-list">
            <? foreach ($usefullList['content'] as $item) {
                ?>
                <div class="col-12 col-md-6">
                    <div class="usefull-list_item revealator-slideright revealator-delay1 revealator-once revealator-below">
                        <i class="fa <?= $item['icon'] ?>"></i>
                        <span class="usefull-list_item-title"><?= $item['title'] ?></span>
                        <p class="usefull-list_item-description"><?= $item['desc'] ?></p>
                    </div>
                </div>
            <? } ?>

        </div>
    </div>
</section>
<section id="who-doing">
    <div class="container">
        <div class="row">
            <div class="col-12 section-title">
                <?=$whoDoingList['title'] ?>
            </div>
        </div>
        <div class="row">
            <div class="offset-md-2 col-12 col-md-8">
                <ul class="who-doing_list">
                    <? foreach ($whoDoingList['content'] as $whoDoingItem) {
                        ?>
                        <li class="who-doing_item revealator-slideup revealator-delay1 revealator-once revealator-below">
                            <i class="fa <?= $whoDoingItem['icon'] ?>"></i>
                            <span class="who-doing_list-person"><?= $whoDoingItem['person'] ?></span>
                            <span class="who-doing_list-text"><?= $whoDoingItem['text'] ?></span>
                        </li>
                    <? } ?>

                </ul>
            </div>
        </div>
    </div>
</section>
<section id="faq">
    <div class="container">
        <div class="row">
            <div class="col-12 section-title">
                F.A.Q.
            </div>
        </div>
        <div class="row why-we-list">
            <div class="col-md-8">
                <? foreach ($faqList as $faqItem) {
                    ?>
                    <details class="revealator-slideright revealator-delay1 revealator-once revealator-below">
                        <summary><?= $faqItem['question'] ?></summary>
                        <p><?= $faqItem['text'] ?></p>
                    </details>
                    <?
                } ?>
            </div>
        </div>
    </div>
</section>
<section id="work-order">
    <div class="container">
        <div class="row">
            <div class="col-12 section-title">
                <?= $workOrder['title'] ?>
            </div>
        </div>
        <div class="work-order">
            <? foreach ($workOrder['content'] as $orderItem) {
                ?>
                <div class="work-order_item revealator-slideright revealator-delay1 revealator-once revealator-below">
                    <div class="work-order_item_icon"><i class="fa <?= $orderItem['icon'] ?>"></i></div>
                    <div class="work-order_item_number"><?= $orderItem['order'] ?></div>
                    <div class="work-order_item_text"><?= $orderItem['text'] ?></div>
                </div>
                <?
            } ?>

        </div>
        <div class="text-center">
             <span class="btn work-order_btn"
                   data-toggle="modal"
                   data-target="<?= $topSectionModalId ?>"><?= $topSectionModalText ?></span>
        </div>

    </div>
</section>
<section id="why-we">
    <div class="container">
        <div class="row">
            <div class="col-12 section-title">
                Почему мы
            </div>
        </div>
        <div class="row why-we-list">
            <? foreach ($whyWe['content'] as $whyItem) { ?>
                <div class="col-12 col-md-4">
                    <div class="why-we-list_item revealator-slideright revealator-delay1 revealator-once revealator-below">
                        <span class="why-we-list_item-title"><?= $whyItem['title'] ?></span>
                        <p class="why-we-list_item-text"><?= $whyItem['text'] ?></p>
                    </div>
                </div>
            <? } ?>
        </div>
    </div>
</section>
<section id="warranty">
    <div class="container">
        <div class="row">
            <div class="col-12 section-title">
                Гарантии
            </div>
            <div class="col-12 section-desc">
                Все перечисленные условия будут занесены в договор, который будет подписан до начала работы.
            </div>
        </div>
        <div class="row warranty-list">
            <div class="col-12 col-md-4">
                <div class="warranty-list_item revealator-slideright revealator-delay1 revealator-once revealator-below">
                    <div class="warranty-icon">
                        <i class="fa fa-user-secret"></i>
                    </div>
                    <span class="warranty-title">Конфиденциальность</span>
                    <p class="why-we-list_item-text">Мы никому не расскажем, что работали с вашим сайтом и вашей
                        компанией, а также обязуемся не разглашать никакие полученные данные и сведения без вашего
                        согласия.</p>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="warranty-list_item revealator-slideright revealator-delay1 revealator-once revealator-below">

                    <div class="warranty-icon">
                        <i class="fa fa-hourglass-half"></i>
                    </div>
                    <span class="warranty-title">Исполнение сроков</span>
                    <p class="why-we-list_item-text">Мы строго рассчитываем время, свои силы и текущую загрузку, чтобы
                        выполнить работу в срок. Даже если по каким-то причинам возникнет задержка, мы выполним свою
                        часть работы без дополнительных доплат за рабочие часы.</p>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="warranty-list_item revealator-slideright revealator-delay1 revealator-once revealator-below">
                    <div class="warranty-icon">
                        <i class="fa far fa-handshake"></i>
                    </div>
                    <span class="warranty-title">Надежность</span>
                    <p class="why-we-list_item-text">Мы - официальная организация, которая дорожит репутацией и именем,
                        а наше с вами сотрудничество будет подтверждено договором. В связи с этим исключена ситуация, в
                        которой мы бесследно исчезаем после получения оплаты, или некачественно выполняем свою
                        работу.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="works">
    <div class="container">
        <div class="row">
            <div class="col-12 section-title">
                <?= $works['title'] ?>
            </div>
            <div class="col-12 section-desc">
                <?= $works['sub_title'] ?>
            </div>
        </div>
        <div class="row works-list">
            <? foreach ($works['content'] as $workItem) {
                ?>
                <div class="col-12 col-md-4">
                    <div class="works-list_item">
                        <div class="works-ico"><a target="_blank" class="works-link" href="<?= $workItem['link'] ?>"><i
                                        class="fa fa-cloud-download" aria-hidden="true"></i></a></div>
                        <div class="works-info">
                            <span class="works-title"><?= $workItem['title'] ?></span>
                            <span class="works-desc"><?= $workItem['text'] ?></span>
                        </div>
                    </div>

                </div>
                <?
            } ?>
        </div>
    </div>

</section>
<section id="effect">
    <div class="container">
        <div class="row">
            <div class="col-12 section-title">
                <?= $effect['title'] ?>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="effect-img">
                    <img src="/wp-content/themes/ant-team-ru/assets/img/service/results.webp"
                         alt="результаты наших клиентов">
                </div>
            </div>
            <div class="col-12 col-md-8 effect_centet_list">
                <div class="effect_centet_block">
                    <? foreach ($effect['content'] as $effectItem) {
                        ?>
                        <details class="revealator-slideright revealator-delay1 revealator-once revealator-below">
                            <summary><?= $effectItem['name'] ?></summary>
                            <p><?= $effectItem['text'] ?></p>
                        </details>
                        <?
                    } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="more-service">
    <div class="container">
        <div class="row">
            <div class="col-12 section-title">
                Дополнительные услуги
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="slider">
                    <? foreach ($service['content'] as $serviceItem) {
                        ?>
                        <div class="slider__item revealator-slideright revealator-delay1 revealator-once revealator-below">
                            <div class="service_item">
                                <div class="service_item-title"><?= $serviceItem['name'] ?></div>
                                <div class="service_item-text"><?= $serviceItem['text'] ?></div>
                                <span class="service_item-link" data-toggle="modal"
                                      data-target="<?= $serviceItem['model'] ?>">Заказать</span>
                            </div>
                        </div>
                        <?
                    } ?>
                    <? foreach ($service['content'] as $serviceItem) {
                        ?>
                        <div class="slider__item revealator-slideright revealator-delay1 revealator-once revealator-below">
                            <div class="service_item">
                                <div class="service_item-title"><?= $serviceItem['name'] ?></div>
                                <div class="service_item-text"><?= $serviceItem['text'] ?></div>
                                <span class="service_item-link" data-toggle="modal"
                                      data-target="<?= $serviceItem['model'] ?>">Заказать</span>
                            </div>
                        </div>
                        <?
                    } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="tarif">
    <div class="container">
        <div class="row">
            <div class="col-12 section-title">
                Тарифы
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="slider">
                    <div class="slider__item">
                        <div class="pricing-item">
                            <div class="pricing-item-sub-name">
                                Тариф
                            </div>
                            <div class="pricing-item-name">
                                Региональный
                            </div>
                            <div class="pricing-item-slash">-</div>
                            <div class="pricing-item-text">Для региональных сайтов услуг. Стандартная оптимизация по
                                чек-листу.
                            </div>
                            <div class="pricing-item-price">от 30 000 ₽</div>
                            <div class="pricing-item-button" data-toggle="modal" data-target="#modalTakeOffer"
                                 data-offer-name="Региональный">Заказать
                            </div>
                        </div>
                    </div>
                    <div class="slider__item">
                        <div class="pricing-item">
                            <div class="pricing-item-sub-name">
                                Тариф
                            </div>
                            <div class="pricing-item-name">
                                Сайт услуг
                            </div>
                            <div class="pricing-item-slash">-</div>
                            <div class="pricing-item-text">Работа по относительно узкой семантике. Тут важно понимать,
                                что относительно узкая в нашем понимании - это крайне широкая для большинства.
                            </div>
                            <div class="pricing-item-price">от 40 000 ₽</div>
                            <div class="pricing-item-button" data-toggle="modal" data-target="#modalTakeOffer"
                                 data-offer-name="Сайт услуг">Заказать
                            </div>
                        </div>
                    </div>
                    <div class="slider__item">
                        <div class="pricing-item">
                            <div class="pricing-item-sub-name">
                                Тариф
                            </div>
                            <div class="pricing-item-name">
                                Интернет-магазин
                            </div>
                            <div class="pricing-item-slash">-</div>
                            <div class="pricing-item-text">Увеличение видимости по <br>
                                большому семантическому ядру.<br>
                                Работы по повышению<br>
                                конверсионности.
                            </div>
                            <div class="pricing-item-price">от 60 000 ₽</div>
                            <div class="pricing-item-button" data-toggle="modal" data-target="#modalTakeOffer"
                                 data-offer-name="Интернет-магазин">Заказать
                            </div>
                        </div>
                    </div>
                    <div class="slider__item">
                        <div class="pricing-item">
                            <div class="pricing-item-sub-name">
                                Тариф
                            </div>
                            <div class="pricing-item-name">
                                Агрегатор
                            </div>
                            <div class="pricing-item-slash">-</div>
                            <div class="pricing-item-text">Работы с очень большими <br>
                                семантическими ядрами. Повышение <br>
                                поведенческих факторов.<br>
                                "Оккупация" локальной выдачи.
                            </div>
                            <div class="pricing-item-price">от 100 000 ₽</div>
                            <div class="pricing-item-button" data-toggle="modal" data-target="#modalTakeOffer"
                                 data-offer-name="Агрегатор">Заказать
                            </div>
                        </div>
                    </div>
                    <div class="slider__item">
                        <div class="pricing-item">
                            <div class="pricing-item-sub-name">
                                Тариф
                            </div>
                            <div class="pricing-item-name">
                                Региональный
                            </div>
                            <div class="pricing-item-slash">-</div>
                            <div class="pricing-item-text">Для региональных сайтов услуг. Стандартная оптимизация по
                                чек-листу.
                            </div>
                            <div class="pricing-item-price">от 30 000 ₽</div>
                            <div class="pricing-item-button" data-toggle="modal" data-target="#modalTakeOffer"
                                 data-offer-name="Региональный">Заказать
                            </div>
                        </div>
                    </div>
                    <div class="slider__item">
                        <div class="pricing-item">
                            <div class="pricing-item-sub-name">
                                Тариф
                            </div>
                            <div class="pricing-item-name">
                                Сайт услуг
                            </div>
                            <div class="pricing-item-slash">-</div>
                            <div class="pricing-item-text">Работа по относительно узкой семантике. Тут важно понимать,
                                что относительно узкая в нашем понимании - это крайне широкая для большинства.
                            </div>
                            <div class="pricing-item-price">от 40 000 ₽</div>
                            <div class="pricing-item-button" data-toggle="modal" data-target="#modalTakeOffer"
                                 data-offer-name="Сайт услуг">Заказать
                            </div>
                        </div>
                    </div>
                    <div class="slider__item">
                        <div class="pricing-item">
                            <div class="pricing-item-sub-name">
                                Тариф
                            </div>
                            <div class="pricing-item-name">
                                Интернет-магазин
                            </div>
                            <div class="pricing-item-slash">-</div>
                            <div class="pricing-item-text">Увеличение видимости по <br>
                                большому семантическому ядру.<br>
                                Работы по повышению<br>
                                конверсионности.
                            </div>
                            <div class="pricing-item-price">от 60 000 ₽</div>
                            <div class="pricing-item-button" data-toggle="modal" data-target="#modalTakeOffer"
                                 data-offer-name="Интернет-магазин">Заказать
                            </div>
                        </div>
                    </div>
                    <div class="slider__item">
                        <div class="pricing-item">
                            <div class="pricing-item-sub-name">
                                Тариф
                            </div>
                            <div class="pricing-item-name">
                                Агрегатор
                            </div>
                            <div class="pricing-item-slash">-</div>
                            <div class="pricing-item-text">Работы с очень большими <br>
                                семантическими ядрами. Повышение <br>
                                поведенческих факторов.<br>
                                "Окупирование" локальной выдачи.
                            </div>
                            <div class="pricing-item-price">от 100 000 ₽</div>
                            <div class="pricing-item-button" data-toggle="modal" data-target="#modalTakeOffer"
                                 data-offer-name="Агрегатор">Заказать
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<script>
    $ = jQuery;
    var details = document.querySelectorAll("details");
    for (i = 0; i < details.length; i++) {
        details[i].addEventListener("toggle", accordion);
    }

    function accordion(event) {
        if (!event.target.open) return;
        var details = event.target.parentNode.children;
        for (i = 0; i < details.length; i++) {
            if (details[i].tagName != "DETAILS" || !details[i].hasAttribute('open') || event.target == details[i]) continue;
            details[i].removeAttribute("open");
        }
    }

</script>

<link rel="stylesheet" href="/wp-content/themes/ant-team-ru/assets/libs/revealator/fm.revealator.jquery.min.css">
<script src="/wp-content/themes/ant-team-ru/assets/libs/revealator/fm.revealator.jquery.min.js"></script>

<?
the_content();

?>
<style>
    section {
        padding: 40px 0;
    }

    #top-picture-action {
        background: url(<?=$bg?>);
        height: calc(60vh);
        background-size: cover;
        background-position: center;
    }

    section#top-picture-action .shadow-wrapp {
        background: #00000087;
        margin: -40px 0;
        height: calc(100% + 80px);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .top-section-container {
        color: #ddd;
    }

    h1.top-section_h1 {
        font-size: 46px;
        font-weight: 500;
        text-transform: uppercase;
        color: #f4f44a;
        margin-bottom: 20px;
    }

    .btn {
        background: #f4f44a;
        /* width: 300px; */
        padding: 10px 15px;
        font-size: 17pt;
        text-align: center;
        border-radius: 5px;
        cursor: pointer;
        margin: 25px auto 60px;
        text-transform: uppercase;
    }

    .content-list_img {
        height: calc(100%);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    ul.content-list li:before {
        color: #8ed0ef; /* Цвет маркера */
        content: "\2022"; /* Сам маркер */
        padding-right: 10px; /* Расстояние от маркера до текста */
    }

    .usefull-list_item {
        padding: 20px;
        margin: 0px;
        height: calc(100% - 30px);
        margin-top: 15px;
        box-shadow: 0px 0px 11px #d0d0d0;
    }

    .usefull-list_item svg {
        background: #3e81c3;
        padding: 14px;
        display: inline-block;
        color: #fff;
        width: 60px !important;
        height: 60px !important;
        position: relative;
        border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
        margin-right: -65px;
    }

    .usefull-list_item-title {
        font-size: 20px;
        height: 60px;
        vertical-align: top;
        display: inline-flex;
        font-weight: 600;
        text-transform: uppercase;
        margin-left: 70px;
        justify-content: center;
        align-items: center;
        margin-bottom: 10px;
    }

    .usefull-list_item-description {
        font-size: 14px;
        display: block;
    }

    .usefull-list_item:hover {
        color: #fff;
        background: #3e81c3;
    }

    section#who-doing {
        color: #fff;
        background: #3e81c3;
    }

    ul.who-doing_list {
        padding: 15px;
        border: 5px solid #fff;
    }

    .who-doing_item {
        margin: 0 0 25px 0;
        position: relative;
    }

    span.who-doing_list-person {
        font-size: 25px;
        display: block;
        padding-left: 90px;
    }


    li.who-doing_item svg {
        font-size: 60px;
        position: absolute;
    }

    span.who-doing_list-text {
        display: block;
        padding-left: 90px;
    }

    details {
        display: block;
        background: #fff;
        box-shadow: 0 10px 15px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        border-radius: 8px;
        overflow: hidden;
        margin-bottom: 1.5rem;
    }

    summary::-webkit-details-marker {
        display: none;
    }

    summary::-moz-list-bullet {
        list-style-type: none;
    }

    summary::marker {
        display: none;
    }

    summary {
        display: block;
        padding: .3em 1em .3em .9em;
        border-bottom: 1px solid #e2e8f0;
        font-size: 1.4em;
        cursor: pointer;
        position: relative;
    }

    summary:before {
        top: .4em;
        right: .3em;
        color: transparent;
        background: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0Ij48cGF0aCBkPSJNMTYuNTkgOC41OUwxMiAxMy4xNyA3LjQxIDguNTkgNiAxMGw2IDYgNi02eiIvPjxwYXRoIGQ9Ik0wIDBoMjR2MjRIMHoiIGZpbGw9Im5vbmUiLz48L3N2Zz4=") no-repeat 50% 50% / 1em 1em;
        width: 1em;
        height: 1em;
        content: "";
        position: absolute;
        transition: transform .5s;
    }

    details[open] > summary:before {
        transform: scale(1, -1);
    }

    summary ~ * {
        padding: 0 1em 10px 1.4em;
    }

    details[open] summary ~ * {
        animation: sweep .5s ease-in-out;
    }

    @keyframes sweep {
        0% {
            opacity: 0;
        }
        100% {
            opacity: 1;
        }
    }

    summary:focus {
        outline: 0;
        box-shadow: inset 0 0 1px rgba(0, 0, 0, 0.3), inset 0 0 2px rgba(0, 0, 0, 0.3);
    }

    section#faq {
        background: #8ed0ef;
    }

    span.content-list_title {
        color: #fff;
        font-size: 20px;
        text-transform: uppercase;
        font-weight: 600;
        display: block;
        text-align: right;
    }

    ul.content-list a {
        color: #8ed0ef;
        border-bottom: dashed 2px #8ed0ef;
    }

    ul.content-list {
        text-align: right;
    }

    .work-order {
        display: flex;
        justify-content: space-around;
        padding: 40px 0;
    }

    .work-order_item {
        text-align: center;
        background: #f4f44a
    }

    .work-order_item_icon {
        font-size: 40px;

        background: #3e81c3;
        padding: 14px;
        display: inline-block;
        color: #fff;
        width: 80px !important;
        height: 80px !important;
        position: relative;
        border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;

    }

    .work-order_item_text {
        width: 150px;
    }

    section#work-order {
        background-image: url('/wp-content/themes/ant-team-ru/assets/img/service/way.png');
        background-color: #f4f44a;
        background-repeat: no-repeat;
        background-position-x: center;
        background-position-y: 30%;
    }

    .work-order_item_number {
        width: 30px;
        height: 30px;
        margin: auto;
        background: #000;
        color: #fff;
        border-radius: 90px;
        line-height: 33px;
    }

    span.btn.work-order_btn {
        display: inline-block !important;
        margin: 20px auto;
        color: #f4f44a;
        background: #333;
        width: auto;
        padding: 10px 15px;
    }
    .text-center{
        text-align: center;
    }

    .why-we-list_item {
        width: 100%;
        height: calc(100% - 30px);
        margin: 15px 0;
    }

    span.why-we-list_item-title {
        font-size: 20px;
        font-weight: 600;
        border-bottom: #8ed0ef 2px solid;
        width: 100%;
        display: block;
        margin-bottom: 15px
    }

    p.why-we-list_item-text {
        font-size: 15px;
        color: #737373;
    }

    .section-desc {
        text-align: center;
        margin-bottom: 30px;
    }

    .warranty-icon {
        font-size: 40px;
        background: #3e81c3;
        padding: 14px;
        color: #fff;
        width: 80px !important;
        height: 80px !important;
        border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
        margin: 0 auto 15px;
        text-align: center;
    }

    .row.warranty-list > div:nth-child(2) .warranty-icon {
        background: #8ed0ef;
    }

    .row.warranty-list > div:nth-child(3) .warranty-icon {
        background: #d2d200;
    }


    .warranty-icon {
    }

    .warranty-list_item {
        /* text-align: justify; */
        width: calc(100% - 30px);
        margin: 0 15px;
        box-shadow: 0px 0px 11px #d0d0d0;
        padding: 15px;
        height: 100%;
    }

    span.warranty-title {
        text-align: center;
        display: block;
        font-weight: 600;
        text-transform: uppercase;
        margin-bottom: 10px;
    }

    p.why-we-list_item-text {
        text-align: justify;
    }

    #why-we {
        border-bottom: #8da8c2 2px solid;
        box-shadow: 0px 2px 10px #3e81c3;
    }

    .works-list_item {
        display: flex;
    }

    .works-ico {
        font-size: 40px;
        background: #6ca9e5;
        padding: 7px 14px;
        color: #fff;
        width: 80px !important;
        height: 80px !important;
        border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
        margin: 0 15px 0 0;
        text-align: center;
    }

    section#works {
        color: #fff;
        background: #3e81c3;
    }

    a.works-link {
        color: #f4f44a;
    }

    span.works-title {
        font-size: 24px;
        text-transform: uppercase;
        display: block;
        font-weight: 600;
    }

    .effect_centet_list {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
    }

    .effect_centet_block {
        width: 100%;
    }

    section#effect {

        background: #8ed0ef;

    }

    section#more-service {
        border-bottom: #8da8c2 2px solid;
        box-shadow: 0px 2px 10px #3e81c3;
    }

    .service_item {
        margin: 0 15px;
        position: relative;
        height: 100%;
    }

    .service_item-title {
        font-size: 20px;
        font-weight: 600;
        text-transform: uppercase;
        margin-bottom: 5px;
        width: 100%;
    }

    .service_item-text {
        color: #000;
        margin-bottom: 60px;
        width: 100%;
    }

    span.service_item-link {
        text-align: center;
        display: block;
        text-transform: uppercase;
        font-size: 17pt;
        position: absolute;
        bottom: 0px;
        padding: 8px;
        border-top: solid 5px #fff;
        cursor: pointer;
        background: #3e81c3;
        color: #fff;
        width: 100%;
    }

    .slick-track {
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-flex-wrap: wrap;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
    }

    .slick-track .slick-slide {
        float: none !important;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        height: auto;
    }

    .slider__item {
        height: 100%;
    }

    .row.works-list {
        justify-content: center;
    }

    .row.why-we-list {
        justify-content: center;
    }
</style>
<?php
get_footer();
?>
