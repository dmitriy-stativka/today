<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'today');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'n`b0FBug-Y>=Eae~AcjM_v?Ylc~lur?_>fUe%C;o-e9/q3/&]cH%w&5yZdFyK+rd');
define('SECURE_AUTH_KEY',  '*@l/Lg!;4oMu7LFldC.a6@5~Rn08vo0J}W~%s?P!WCZT)?]Pxj#$@<D|lyyzDh{(');
define('LOGGED_IN_KEY',    '8M16f#@yQkuUpfTIK@#/J;Zj=-OA<#g)C;]G~H/@33~}CCZLpI&{nqycP,eR(sd_');
define('NONCE_KEY',        'Mg0%lC>U-;hK)2eOKKUBU^k>!Q{,i/jqcBS.<z_V07E7P4E0zYlZj)(t*e3Sk4H<');
define('AUTH_SALT',        '~+w0d@i/K(Pxm|E5`cgEHN1JDwHIQy-)N}}8CzWbG?3^?Ps^;cPZU-U}#9%quf2A');
define('SECURE_AUTH_SALT', 'u-iw;>`1unJ?f .p!%V!WP8Lf1*E1iD@UpVf7BrSRRoj)$9 !LhtZV5eCmU+e-p`');
define('LOGGED_IN_SALT',   'BHyhG5Ck(ObsTJ]rM-d^qdr~LL>MfUNUb<%c`O?yaT`J55m@YSobGh@gpcu,R3ll');
define('NONCE_SALT',       '*wMS.g .^X]SW*jJ`~4InIN)(Y;:u@;p;pD`%-F7dN@t~;:;~z{7IP8A2$Bfv#$/');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
