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
define( 'DB_NAME', 'tests' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'SjE*S#0.JilFz+8O,..WY-kwUcs93^+:NiIaD@cSC~rg+KBw3X|{et:sa?oA2oMG' );
define( 'SECURE_AUTH_KEY',  '1DgAp@aH0^b|%oh[YqL3h|dl;Y@[Xm]~|fJ0Oy.vCTogZ9/,&r=o(?|trKU2!|^m' );
define( 'LOGGED_IN_KEY',    'ZBE(P/dH[p}5;CbDHXFG%OFVwK|#QXk.-(GWhK+eX;l)/LR/W@`t7B!n}Z[YXqD:' );
define( 'NONCE_KEY',        '@?Q=R-b7^K:b(AeOdr*Ft^Dw+^UqX;rc!7%&wLEVS~S!C<n5(eP E0KsP8&}AHbs' );
define( 'AUTH_SALT',        '9i0YU8p^y!J^~)=YmJ%-O&NqFIG|RU35[Mfp` fMnZ=}N}o9x$#Ah:one}GJa)U4' );
define( 'SECURE_AUTH_SALT', 'FpWyl#c%o=s>fPNa1_o:LtXNxE,OH8;W1 1!dXZ<;C6Cx.1_E/).h6?-bV1ysVwW' );
define( 'LOGGED_IN_SALT',   'r0>n(N:l[nz~1WEdd/Y1.^Ag[Z1tXD>1#+BtPu/+Ka $i{+hQog$f4`ci1X1ky@E' );
define( 'NONCE_SALT',       '4K1O?n!E9wbC,a?DYZKF|[hRW<>^xV[:E|uK8SD2[P9ip9]ULP&vAU=d]&I/tcoS' );

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
