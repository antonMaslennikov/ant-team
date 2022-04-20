<?php $formId = 11005; ?>

<div role="form" class="wpcf7" id="wpcf7-f<?= $formId ?>-o4" lang="ru-RU" dir="ltr">
    <form action="/" class="wpcf7-form init feedback" method="post" data-status="init">
        <div class="form__success">
            <h3>Спасибо за предложение!</h3>
            <p>Мы получили ваше предложение и свяжемся с вами, если оно покажется нам интересным</p>
        </div>
        <div class="form-ctrl">
            <h3>Предложите свою тему</h3>
            <p>Предложите нам тему, и, возможно, мы сделаем по ней статью. Или напишите о себе, если хотите стать нашим автором.</p>
        </div>
        <div class="form-ctrl">
            <input type="text"  name="article-subject" required>
            <label>Тема статьи*</label>
        </div>
        <div class="form-ctrl">
            <input type="text"  name="your-name">
            <label>Имя</label>
        </div>
        <div class="form-ctrl">
            <input type="text"  name="your-email" required>
            <label>E-mail*</label>
        </div>
        <div class="form-ctrl">
            <textarea name="about" placeholder="Напишите о себе, если хотите стать нашим автором" required></textarea>
            <label>О себе*</label>
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
</div>