<?php
/*
<form class="form">
    <span class="form__title">Заявка на SEO-продвижение сайта от Ant-Team.ru</span>
    <p class="form__desc">Оставьте заявку, и наши специалисты подробно расскажут о том, как именно мы можем помочь вашему сайту занять лучшие позиции в поисковой выдаче.</p>
    <div class="form-ctrl">
        <input type="text" placeholder="inside hint">
        <label>Имя</label>
    </div>
    <div class="form-ctrl">
        <input type="text" placeholder="inside hint">
        <label>Телефон</label>
    </div>
    <div class="form-ctrl">
        <input type="text" placeholder="inside hint">
        <label>Адрес сайта</label>
    </div>
    <div>
        <button class="btn">Отправить</button>
        <div>
            <div class="form-ctrl">
                <label class="checkbox">Я ознакомлен и согласен с <a href='#'>Политикой в отношении обработки персональных данных</a>
                    <input type="checkbox"><span class="check"><img src="/wp-content/themes/<?= get_template() ?>/assets/images/check.svg"></span>
                </label>
            </div>
        </div>
    </div>
</form>
*/
?>

<?php
    $form = do_shortcode('[contact-form-7 id="10267" html_class="form" title="Заявка на SEO-продвижение сайта от Ant-Team.ru"]');
    $form = preg_replace('/<span class="wpcf7\-form\-control\-wrap .*">(.*)<\/span>/', '$1', $form);
    echo $form
?>
