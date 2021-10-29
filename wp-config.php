<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wp_chivic' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'wp_chivic' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'Pervil-9' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'z4:/;2%Y>wGN46D|E%;-v/YF^sn&0gZ#;~)L *;l_$Fy]:N.@8&+zIQzP_K*ql26' );
define( 'SECURE_AUTH_KEY',  'B}ha`cI},M/ch#cGcJ6|]E5Avf>mqBM|y]as)F<!w[bNdiqZC6wGBsC=R1bW`}Cq' );
define( 'LOGGED_IN_KEY',    'n=ShjM&N,ETwmro>zQwBN<`+<3b( oi^ +<cKQTN17w(T;rp;>=Lo-A9>bGbZFPu' );
define( 'NONCE_KEY',        'J;<SJ#^xZl_}f0EhMd[Bqvf3=]ghS:e[|*L8>e(gq2]ZnLML%-`!De,NL-Stl4j)' );
define( 'AUTH_SALT',        '6v&}XJo?.l[=Is7_h+}_r@7h:^-36Y$TA!/=ZY 2uV9x~.,]I(pOjC;C]0usGb~F' );
define( 'SECURE_AUTH_SALT', 'M-j+0.VbTAsD%r| 9L&}?:qEg4A5+eE!hbO#2po=O(H.^An?<;`VK#N;UKf7op;4' );
define( 'LOGGED_IN_SALT',   '/.?LS)F UA1<5r :Jnn*}?gHkdL~Bq3@d:~iSm4j+F(2zK%6GE j&;>1|Glp]qy|' );
define( 'NONCE_SALT',       'b)?!01e9f)Kme(wO%1~|7-6D}n`X5m#`*y_1IRV )rm3VZ+s#Z_WI_TsdzR%eNTh' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
