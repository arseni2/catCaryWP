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
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'CatCaryDB' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
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
define( 'AUTH_KEY',         '^i4LO/zPU{G$^;kbbed-_#nMrOrdD*i^&XtQVn0YQ9>%[)J+!%!MneFie;%<Jtc|' );
define( 'SECURE_AUTH_KEY',  '`+k}P`pK{%g7Sj=UYDBB$+`A4mNXa?SRT&o+{R<353CKZcD4*uNCK1$wB1QB0UeD' );
define( 'LOGGED_IN_KEY',    'uv-$_lx-~=P/v0KUI1_@~=<q0#.{U)?jf[9cY>FjJ~MHC[6!Ua2xe7OZZecM%Qb6' );
define( 'NONCE_KEY',        'mPhW-Cf[c(!^UUhS51_Q?z4]koN6&$XxK0Ol{grT,#9+i?=22%!n0|=(y:_,S~L5' );
define( 'AUTH_SALT',        'x  (yyh$6yszf`hC?J&P4}OyV#D:miB5jS95_02uo<,JPIPmI;Q~O%{n7B%WwhsL' );
define( 'SECURE_AUTH_SALT', ' p IanfMKk~ygW4SXyxbBH0;F`W8 9r@jVvJ48:KA5doj5w@9X_utUhc`#h$r8V`' );
define( 'LOGGED_IN_SALT',   'kkwD=TT:;5_.MA3|FoMyKNs&Thp8=e8B@?u7%&1~-o%p(!pQbEFQFN8.IY&*q9XQ' );
define( 'NONCE_SALT',       'jw*^NT|lG[OMJO(BDYcR.yTX=?o`/f|k1aW&OS<-C0DT/10yVqkGTX5:0NCom.el' );

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
