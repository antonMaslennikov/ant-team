<?php $formId = 11006; ?>

<div role="form" class="wpcf7" id="wpcf7-f<?= $formId ?>-o1" lang="ru-RU" dir="ltr">
    <form action="/" class="wpcf7-form form init feedback" method="post" data-status="init">
        <div class="form__success">
            <h3>Заявка принята</h3>
            <p>Мы свяжемся с вами в ближайшее время и обсудим возможности для продвижения вашего сайта.</p>
        </div>
        <span class="form__title">
            <?php if ($title = get_query_var('zakazat_audit_title')): ?>
                <?= $title ?>
            <?php else: ?>
                Заявка на аудит КФ от Ant-Team.ru
            <?php endif; ?>
        </span>
        <p class="form__desc">Оставьте заявку, и наши специалисты подробно расскажут о том, как именно мы можем помочь вашему сайту занять лучшие позиции в поисковой выдаче.</p>
        <div class="form-ctrl">
            <input type="text" name="your-name" placeholder="Имя (Александр)" class="wpcf7-form-control wpcf7-text gtmPriceFormName" required>
            <label>Имя</label>
        </div>
        <div class="form-ctrl">
            <input type="tel" name="your-phone" value="" class="wpcf7-form-control wpcf7mf-mask wpcf7-mask wpcf7-validates-as-required gtmPriceFormPhone" size="40" aria-required="1" placeholder="+7 (___) ___-__-__" data-mask="+7 (___) ___-__-__" required>
            <label>Телефон</label>
        </div>
        <div class="form-ctrl">
            <input type="url" name="your-site" placeholder="Сайт (www.site.ru)" required class="wpcf7-form-control wpcf7-text wpcf7-url wpcf7-validates-as-required  wpcf7-validates-as-url gtmPriceFormUrl">
            <label>Адрес сайта</label>
        </div>
        <div>
            <button class="btn">Отправить</button>
            <div>
                <div class="form-ctrl">
                    <label class="checkbox">Я ознакомлен и согласен с <a href='/politika-konfidentsialnosti/'>Политикой в отношении обработки персональных данных</a>
                        <input type="checkbox" name="policy" required="required">
                        <span class="check"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/check.svg"></span>
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