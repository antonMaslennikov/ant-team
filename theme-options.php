<?php

$options_page = 'theme-options.php';

/*
 * Функция, добавляющая страницу в пункт меню Настройки
 */
function theme_options()
{
    global $options_page;
    add_options_page('Параметры темы', 'Параметры темы', 'manage_options', $options_page, 'theme_options_page');
}

add_action('admin_menu', 'theme_options');

/**
 * Возвратная функция (Callback)
 */
function theme_options_page()
{
    global $options_page;
    ?>
    <div class="wrap">
    <h2>Дополнительные параметры шаблона</h2>
    <form method="post" enctype="multipart/form-data" action="options.php">
        <?php
        settings_fields('theme_options');
        do_settings_sections($option_page);
        ?>
        <p class="submit">
            <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>"/>
        </p>
    </form>
    </div><?php
}

/*
 * Регистрируем настройки
 * Мои настройки будут храниться в базе под названием theme_options (это также видно в предыдущей функции)
 */
function theme_option_settings()
{
    global $options_page;
    register_setting('theme_options', 'theme_options', 'theme_validate_settings');

    // Добавляем секцию
    add_settings_section('theme_section_1', '', '', $options_page);
    add_settings_section('theme_section_2', '', '', $options_page);

    $theme_field_params = array(
        'type' => 'input',
        'id' => 'contact-phone',
        'desc' => ''
    );
    add_settings_field('theme-contact-phone', 'Контактный телефон', 'theme_option_display_settings', $options_page, 'theme_section_1', $theme_field_params);

    $theme_field_params = array(
        'type' => 'input',
        'id' => 'contact-address',
        'desc' => ''
    );
    add_settings_field('theme-contact-address', 'Адрес офиса', 'theme_option_display_settings', $options_page, 'theme_section_1', $theme_field_params);

    $theme_field_params = array(
        'type' => 'input',
        'id' => 'social-vk',
        'desc' => ''
    );
    add_settings_field('theme-social-vk', 'Ссылка на группу Вконтакте', 'theme_option_display_settings', $options_page, 'theme_section_2', $theme_field_params);

    $theme_field_params = array(
        'type' => 'input',
        'id' => 'social-fb',
        'desc' => ''
    );
    add_settings_field('theme-social-fb', 'Ссылка на группу Facebook', 'theme_option_display_settings', $options_page, 'theme_section_2', $theme_field_params);

    $theme_field_params = array(
        'type' => 'input',
        'id' => 'social-tg',
        'desc' => ''
    );
    add_settings_field('theme-social-tg', 'Telegram', 'theme_option_display_settings', $options_page, 'theme_section_2', $theme_field_params);

    $theme_field_params = array(
        'type' => 'input',
        'id' => 'social-youtube',
        'desc' => ''
    );
    add_settings_field('theme-social-youtube', 'Ссылка на канал Youtube', 'theme_option_display_settings', $options_page, 'theme_section_2', $theme_field_params);

}

add_action('admin_init', 'theme_option_settings');

/*
 * Функция отображения полей ввода
 * Здесь задаётся HTML и PHP, выводящий поля
 */
function theme_option_display_settings($args)
{
    extract($args);

    $option_name = 'theme_options';

    $o = get_option($option_name);

    switch ($type) {
        case 'textarea':
            $o[$id] = esc_attr(stripslashes($o[$id]));
            echo "<textarea class='code large-text' cols='50' rows='10' type='text' id='$id' name='" . $option_name . "[$id]'>$o[$id]</textarea>";
            echo ($desc != '') ? "<br /><span class='description'>$desc</span>" : "";
            break;
        case 'input':
            $o[$id] = esc_attr(stripslashes($o[$id]));
            echo "<input class='code large-text' type='text' id='$id' name='" . $option_name . "[$id]' value='" . $o[$id] . "'>";
            echo ($desc != '') ? "<br /><span class='description'>$desc</span>" : "";
            break;

    }
}

/*
 * Функция проверки правильности вводимых полей
 */
function theme_validate_settings($input)
{
    foreach ($input as $k => $v) {
        $valid_input[$k] = trim($v);

        /* Вы можете включить в эту функцию различные проверки значений, например
        if(! задаем условие ) { // если не выполняется
            $valid_input[$k] = ''; // тогда присваиваем значению пустую строку
        }
        */
    }
    return $valid_input;
}