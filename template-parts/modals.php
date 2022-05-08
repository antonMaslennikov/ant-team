<div class="order-form modal-form" id="modal-order-form" style="display:none;">
    <?php get_template_part('template-parts/forms/contact-form') ?>
</div>

<div class="order-form modal-form" id="zakazat-audit-form" style="display:none;">
    <?php get_template_part('template-parts/forms/zakazat_audit') ?>
</div>

<div id="modal-article-theme" class="review-form modal-form" style="display:none;">
    <?php get_template_part('template-parts/forms/send-idea') ?>
</div>


<?php $formId = 11004; ?>
<div id="modal-review-form" class="review-form modal-form" style="display:none;">
    <div role="form" class="wpcf7" id="wpcf7-f<?= $formId ?>-o4" lang="ru-RU" dir="ltr">
        <form action="/" class="wpcf7-form init" method="post" data-status="init">
            <div class="form__success">
                <h3>Спасибо за отзыв!</h3>
            </div>
            <div class="form-ctrl">
                <h3>Оставьте отзыв</h3>
                <p>Нам важно ваше мнение о нашей работе. Будем благодарны за любую обратную связь.</p>
            </div>
            <div class="form-ctrl">
                <input type="text"  name="your-name" required="required">
                <label>Имя*</label>
            </div>
            <div class="form-ctrl">
                <input type="text"  name="your-project-name" required="required">
                <label>Название проекта*</label>
            </div>
            <div class="form-ctrl">
                <input type="text"  name="your-project-link" required="required">
                <label>Ссылка на проект*</label>
            </div>
            <div class="form-ctrl">
                <textarea  name="your-review"></textarea>
                <label>Отзыв*</label>
            </div>
            <div class="form-ctrl">
                <div class="score">
                    <div class="score__label">Оценка</div>
                    <label>
                        <input type="radio" name="score" required="required" value="1"><span>1</span>
                    </label>
                    <label>
                        <input type="radio" name="score" required="required" value="2"><span>2</span>
                    </label>
                    <label>
                        <input type="radio" name="score" required="required" value="3"><span>3</span>
                    </label>
                    <label>
                        <input type="radio" name="score" required="required" value="4"><span>4</span>
                    </label>
                    <label>
                        <input type="radio" name="score" required="required" value="5"><span>5</span>
                    </label>
                </div>
            </div>
            <div>
                <input type="submit" value="Отправить" class="wpcf7-form-control wpcf7-submit gtmGetPriceFormSubmit btn">
                <div>
                    <div class="form-ctrl">
                        <label class="checkbox">Я ознакомлен и согласен с <a href='/politika-konfidentsialnosti/'>Политикой в отношении обработки персональных данных</a>
                            <input type="checkbox" name="policy" required="required"><span class="check"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/check.svg"></span>
                        </label>
                    </div>
                </div>
            </div>

            <div class="wpcf7-response-output" aria-hidden="true"></div>

            <input type="hidden" name="your-check-bot" value="" class="wpcf7-form-control wpcf7-hidden">

            <input type="hidden" name="_wpcf7" value="<?= $formId ?>">
            <input type="hidden" name="_wpcf7_version" value="5.3.2">
            <input type="hidden" name="_wpcf7_locale" value="ru_RU">
            <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f<?= $formId ?>-o4">
            <input type="hidden" name="_wpcf7_container_post" value="0">
            <input type="hidden" name="_wpcf7_posted_data_hash" value="">
        </form>
    </div>

    <?php
    /*
    $form = do_shortcode('[contact-form-7 id="10303" title="Оставьте отзыв"]');
    $form = preg_replace('/<span class="wpcf7\-form\-control\-wrap[^>]*?>(.*)<\/span>/', '$1', $form);
    $form = preg_replace('/<span class="wpcf7-list-item[^>]*?>(.*)<\/span>/', '$1', $form);
    $form = preg_replace('/<p[^>]*?>(.*)<\/p>/', '$1', $form);
    echo $form
    */
    ?>
</div>


<form class="subscribe-form modal-form" id="modal-subscribe-form" style="display:none;">
    <div class="form__success">
        <h3>Спасибо, что подписались на рассылку!</h3>
        <p>Мы будем отправлять вам только полезный контент не чаще 2 раз в месяц.</p>
    </div>
    <div class="form-ctrl">
        <h3>Подпишитесь на рассылку</h3>
        <p>Мы будем отправлять вам письма с самыми интересными и полезными статьями 2 раза в месяц.</p>
    </div>
    <div class="form-ctrl">
        <input type="text" >
        <label>Имя</label>
    </div>
    <div class="form-ctrl">
        <input type="text" >
        <label>E-mail</label>
    </div>
    <div>
        <button class="btn">Отправить</button>
        <div>
            <div class="form-ctrl">
                <label class="checkbox">Я ознакомлен и согласен с <a href='/politika-konfidentsialnosti/'>Политикой в отношении обработки персональных данных</a>
                    <input type="checkbox" name="policy" required="required"><span class="check"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/check.svg"></span>
                </label>
            </div>
        </div>
    </div>
</form>



<!-- old Modals -->
<div class="modal-form review-form" id="modalTakePrice" tabindex="-1" role="dialog" style="display:none;">
    <div class="modal-title" >заказать аудит продвижения</div>
    <?php echo do_shortcode('[contact-form-7 id="244" title="modalTakePriceForm"]');?>
    <div class="policy-konf">
        Отправляя форму вы соглашаетесь с <a  target="_blank" href="/politika-konfidentsialnosti/">политикой конфиденциальности</a>.
    </div>
</div>

<!-- Modal take free audit -->
<div class="modal-form review-form" id="modalTakeFreeAudit" tabindex="-1" role="dialog" style="display:none;">
    <div class="modal-title">Заказать аудит</div>
    <div class="modal-text">Заполните форму,
        и, сделав анализ вашего сайта,
        мы сразу свяжемся с вами!
    </div>
    <div role="form" class="wpcf7" id="wpcf7-f105-o2" lang="ru-RU" dir="ltr">
        <div class="screen-reader-response"></div>
        <?php echo do_shortcode('[contact-form-7 id="243" title="modalTakeFreeAuditForm"]');?>         <div class="policy-konf">
            Отправляя форму вы соглашаетесь с <a target="_blank"  href="/politika-konfidentsialnosti/">политикой конфиденциальности</a>.
        </div>
    </div>
</div>

<!-- Modal take ntcn ntcn ntcn offer-->
<div class="modal-form review-form" id="modalTakeOffer" tabindex="-1" role="dialog" style="display:none;">
    <div class="modal-title">Заказать продвижение</div>
    <div class="modal-text"></div>
    <?php echo do_shortcode('[contact-form-7 id="242" title="modalTakeOfferForm"]'); ?>
    <div class="policy-konf">
        Отправляя форму вы соглашаетесь с <a target="_blank"  href="/politika-konfidentsialnosti/">политикой конфиденциальности</a>.
    </div>
</div>

<!-- Modal audits-->
<div class="modal-form review-form" id="modalTakeAuditsExample" tabindex="-1" role="dialog" style="display:none;">
    <div class="modal-title">Примеры аудитов:</div>
    <div class="row">
        <div class="col-md-4">
            <a class="gtmGetFreeAuditOne modal_link_inner-io"
               href="https://docs.google.com/document/d/1WZy25zIWRvyALqhTt5B1L3f-gcmm5MEhZOhB1mCvpN0"
               target="_blank" rel="nofollow"><i class="fal fa-file-alt"></i>
                ><i class="fal fa-file-alt"></i>
                <span>mc-avanta.ru</span></a>
        </div>
        <div class="col-md-4">
            <a class="gtmGetFreeAuditSec modal_link_inner-io"
               href="https://docs.google.com/document/d/1g5OD324D4otJYaiUSLH51XwLC5evbQePQhZ_L-q3NwI"
               target="_blank" rel="nofollow"><i class="fal fa-file-alt"></i>
                <span>kiparis-spb.ru</span></a>
        </div>

        <div class="col-md-4">
            <a class="gtmGetFreeAuditThird modal_link_inner-io"
               rel="nofollow" href="https://docs.google.com/document/d/1R7Jskw_rJLtMRqMJHfWB2ATOT5qZdCo-_8bqY_CtSv4"
               target="_blank" rel="nofollow"><i class="fal fa-file-alt"></i>
                <span>ncagp.ru</span></a>
        </div>
    </div>
</div>

<div class="modal-form review-form" id="modalTakeQustions" tabindex="-1" role="dialog" style="display:none;">
    <div class="modal-title">Задать вопрос:</div>
    <?php echo do_shortcode('[contact-form-7 id="4021" title="modalTakeQustions"]'); ?>
    <div class="policy-konf">
        Отправляя форму вы соглашаетесь с <a target="_blank"  href="/politika-konfidentsialnosti/">политикой конфиденциальности</a>.
    </div>
</div>

<div class="modal-form review-form" id="modalTakeOfferForm" tabindex="-1" role="dialog" style="display:none;">
    <div class="modal-title">Заказать Тех. Аудит</div>
    <?php echo do_shortcode('[contact-form-7 id="4084" title="modalTakeOfferFormTechAudit"]'); ?>

    <div class="policy-konf">
        Отправляя форму вы соглашаетесь с <a target="_blank"  href="/politika-konfidentsialnosti/">политикой конфиденциальности</a>.
    </div>
</div>


<div class="modal-form review-form" id="workWithMeta" tabindex="-1" role="dialog" style="display:none;">
    <div class="modal-title">Проработка мета-тегов</div>
    <?php echo do_shortcode('[contact-form-7 id="4351" title="modalTakeOfferFormTechAuditSubService" service="ПРОРАБОТКА МЕТА-ТЕГОВ"]'); ?>
    <div class="policy-konf">
        Отправляя форму вы соглашаетесь с <a target="_blank"  href="/politika-konfidentsialnosti/">политикой конфиденциальности</a>.
    </div>
</div>

<div class="modal-form review-form" id="ymylAudit" tabindex="-1" role="dialog" style="display:none;">
    <div class="modal-title">YMYl аудит заказать</div>
    <?php echo do_shortcode('[contact-form-7 id="4351" title="modalTakeOfferFormTechAuditSubService" service="YMYL-АУДИТ"]'); ?>
    <div class="policy-konf">
        Отправляя форму вы соглашаетесь с <a target="_blank"  href="/politika-konfidentsialnosti/">политикой конфиденциальности</a>.
    </div>
</div>

<div class="modal-form review-form" id="microMarkupCheck" tabindex="-1" role="dialog" style="display:none;">
    <div class="modal-title">Проверка микроразметки</div>
    <?php echo do_shortcode('[contact-form-7 id="4351" title="modalTakeOfferFormTechAuditSubService" service="Проверка микроразметки"]'); ?>
    <div class="policy-konf">
        Отправляя форму вы соглашаетесь с <a target="_blank"  href="/politika-konfidentsialnosti/">политикой конфиденциальности</a>.
    </div>
</div>

<div class="modal-form review-form" id="workingStructureOfServicePages" tabindex="-1" role="dialog" style="display:none;">
    <div class="modal-title">Проработка структуры служебных страниц</div>
    <?php echo do_shortcode('[contact-form-7 id="4351" title="modalTakeOfferFormTechAuditSubService" service="Проработка структуры служебных страниц"]'); ?>
    <div class="policy-konf">
        Отправляя форму вы соглашаетесь с <a target="_blank"  href="/politika-konfidentsialnosti/">политикой конфиденциальности</a>.
    </div>
</div>

<div class="modal-form review-form" id="programmer" tabindex="-1" role="dialog" style="display:none;">
    <div class="modal-title">Услуги программиста</div>
    <?php echo do_shortcode('[contact-form-7 id="4351" title="modalTakeOfferFormTechAuditSubService" service="Услуги программиста"]'); ?>
    <div class="policy-konf">
        Отправляя форму вы соглашаетесь с <a target="_blank"  href="/politika-konfidentsialnosti/">политикой конфиденциальности</a>.
    </div>
</div>

<div class="modal-form review-form" id="siteStructure" tabindex="-1" role="dialog" style="display:none;">
    <div class="modal-title">СОСТАВЛЕНИЕ СТРУКТУРЫ САЙТА</div>
    <?php echo do_shortcode('[contact-form-7 id="4351" title="modalTakeOfferFormTechAuditSubService" service="СОСТАВЛЕНИЕ СТРУКТУРЫ САЙТА"]'); ?>
    <div class="policy-konf">
        Отправляя форму вы соглашаетесь с <a target="_blank"  href="/politika-konfidentsialnosti/">политикой конфиденциальности</a>.
    </div>
</div>

<div class="modal-form review-form" id="landStructure" tabindex="-1" role="dialog" style="display:none;">
    <div class="modal-title">Проработка структуры посадочных</div>
    <?php echo do_shortcode('[contact-form-7 id="4351" title="modalTakeOfferFormTechAuditSubService" service="проработка структуры посадочных"]'); ?>
    <div class="policy-konf">
        Отправляя форму вы соглашаетесь с <a target="_blank"  href="/politika-konfidentsialnosti/">политикой конфиденциальности</a>.
    </div>
</div>

<div class="modal-form review-form" id="orderContent" tabindex="-1" role="dialog" style="display:none;">
    <div class="modal-title">Подготовка ТЗ на контент</div>
    <?php echo do_shortcode('[contact-form-7 id="4351" title="modalTakeOfferFormTechAuditSubService" service="   Подготовка ТЗ на контент по приоритетным и высокочастотным кластерам"]'); ?>
    <div class="policy-konf">
        Отправляя форму вы соглашаетесь с <a target="_blank"  href="/politika-konfidentsialnosti/">политикой конфиденциальности</a>.
    </div>
</div>

<div class="modal-form review-form" id="orderText" tabindex="-1" role="dialog" style="display:none;">
    <div class="modal-title">ТЗ в работу копирайтерам</div>
    <?php echo do_shortcode('[contact-form-7 id="4351" title="modalTakeOfferFormTechAuditSubService" service="Передача ТЗ в работу копирайтерам"]'); ?>
    <div class="policy-konf">
        Отправляя форму вы соглашаетесь с <a target="_blank"  href="/politika-konfidentsialnosti/">политикой конфиденциальности</a>.
    </div>
</div>

<div class="modal-form review-form" id="modalTakeOfferFormTechAudit" tabindex="-1" role="dialog" style="display:none;">
    <div class="modal-title">Заявка на тех Аудит</div>
    <?php echo do_shortcode('[contact-form-7 id="4084" title="modalTakeOfferFormTechAudit"]'); ?>
    <div class="policy-konf">
        Отправляя форму вы соглашаетесь с <a target="_blank"  href="/politika-konfidentsialnosti/">политикой конфиденциальности</a>.
    </div>
</div>

<div class="modal-form review-form" id="modalTakeOfferFormYmylAudit" tabindex="-1" role="dialog" style="display:none;">
    <div class="modal-title">Заявка на YMYL Аудит</div>
    <?php echo do_shortcode('[contact-form-7 id="4890" title="modalTakeOfferFormYmylAudit"]'); ?>
    <div class="policy-konf">
        Отправляя форму вы соглашаетесь с <a target="_blank"  href="/politika-konfidentsialnosti/">политикой конфиденциальности</a>.
    </div>
</div>

<div class="modal-form review-form" id="modalTakeOfferFormAuditKf" tabindex="-1" role="dialog" style="display:none;">
    <div class="modal-title">Заявка на Аудит Коммерческий Факторов</div>
    <?php echo do_shortcode('[contact-form-7 id="4891" title="modalTakeOfferFormAuditKf"]'); ?>
    <div class="policy-konf">
        Отправляя форму вы соглашаетесь с <a target="_blank"  href="/politika-konfidentsialnosti/">политикой конфиденциальности</a>.
    </div>
</div>

<div class="modal-form review-form" id="modalTakeOfferFormSemant" tabindex="-1" role="dialog" style="display:none;">
    <div class="modal-title">Заявка на Семантическое Ядро</div>
    <?php echo do_shortcode('[contact-form-7 id="4463" title="modalTakeOfferFormSemant" service="общий офер со страницы"]'); ?>
    <div class="policy-konf">
        Отправляя форму вы соглашаетесь с <a target="_blank"  href="/politika-konfidentsialnosti/">политикой конфиденциальности</a>.
    </div>
</div>

<div class="modal-form review-form" id="modalTakeOfferFormSemantT1" tabindex="-1" role="dialog" style="display:none;">
    <div class="modal-title">Заявка на Семантическое Ядро JUNIOR-СПЕЦИАЛИСТ</div>
    <?php echo do_shortcode('[contact-form-7 id="4463" title="modalTakeOfferFormSemant" service="JUNIOR-СПЕЦИАЛИСТ"]'); ?>
    <div class="policy-konf">
        Отправляя форму вы соглашаетесь с <a target="_blank"  href="/politika-konfidentsialnosti/">политикой конфиденциальности</a>.
    </div>
</div>

<div class="modal-form review-form" id="modalTakeOfferFormSemantT2" tabindex="-1" role="dialog" style="display:none;">
    <div class="modal-title">Заявка на Семантическое Ядро СПЕЦИАЛИСТ ПОВЫШЕННОГО УРОВНЯ
    </div>
    <?php echo do_shortcode('[contact-form-7 id="4463" title="modalTakeOfferFormSemant" service="СПЕЦИАЛИСТ ПОВЫШЕННОГО УРОВНЯ"]'); ?>
    <div class="policy-konf">
        Отправляя форму вы соглашаетесь с <a target="_blank"  href="/politika-konfidentsialnosti/">политикой конфиденциальности</a>.
    </div>
</div>

<div class="modal-form review-form" id="takeAleksandrAnswer" tabindex="-1" role="dialog" style="display:none;">
<!--    <div class="modal-title" >Задать вопрос</div>-->
    <?php /* echo do_shortcode('[contact-form-7 id="5912" title="modalTakeAleksandrAnswer"]');*/ ?>

    <?php $formId = 5912; ?>

    <div role="form" class="wpcf7" id="wpcf7-f<?= $formId ?>-o1" lang="ru-RU" dir="ltr">
        <form action="/" class="wpcf7-form form init feedback" method="post" data-status="init">
            <div class="form__success">
                <h3>Заявка принята</h3>
                <p>Мы свяжемся с вами в ближайшее время и обсудим возможности для продвижения вашего сайта.</p>
            </div>
            <span class="form__title">Задать вопрос</span>
            <p>&nbsp;</p>

            <div class="form-ctrl">
                <input type="text" name="your-name" placeholder="Имя" class="wpcf7-form-control wpcf7-text gtmPriceFormName wpcf7-validates-as-required" required="required">
            </div>

            <div class="form-ctrl">
                <textarea name="your-answer" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea gtmPriceFormName wpcf7-validates-as-required" aria-invalid="false" placeholder="Ваш вопрос..." required="required"></textarea>
            </div>

            <div class="form-ctrl">
                <input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email gtmFreeAuditEmail" aria-required="true" aria-invalid="false" placeholder="Почта (your@site.ru)" required="required">
            </div>

            <div class="form-ctrl">
                <input type="tel" name="your-phone" value="" class="wpcf7-form-control wpcf7mf-mask wpcf7-mask gtmPriceFormPhone wpcf7-validates-as-required" size="40" aria-required="1" placeholder="+7 (___) ___-__-__" data-mask="+7 (___) ___-__-__" required="required">
            </div>

            <div>
                <button class="btn">Отправить</button>
                <div>
                    <div class="form-ctrl">
                        <label class="checkbox">Я ознакомлен и согласен с <a href='/politika-konfidentsialnosti/'>Политикой в отношении обработки персональных данных</a>
                            <input type="checkbox" required="required"><span class="check"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/check.svg"></span>
                        </label>
                    </div>
                </div>
            </div>

            <div class="wpcf7-response-output" aria-hidden="true"></div>

            <input type="hidden" name="your-check-bot" value="" class="wpcf7-form-control wpcf7-hidden">

            <input type="hidden" name="_wpcf7" value="<?= $formId ?>">
            <input type="hidden" name="_wpcf7_version" value="5.3.2">
            <input type="hidden" name="_wpcf7_locale" value="ru_RU">
            <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f<?= $formId ?>-o1">
            <input type="hidden" name="_wpcf7_container_post" value="0">
            <input type="hidden" name="_wpcf7_posted_data_hash" value="">
        </form>
    </div>

    <?php
    //    $form = do_shortcode('[contact-form-7 id="10267" html_class="form" title="Заявка на SEO-продвижение сайта от Ant-Team.ru"]');
    //    $form = preg_replace('/<span class="wpcf7\-form\-control\-wrap .*">(.*)<\/span>/', '$1', $form);
    //    echo $form
    ?>

</div>