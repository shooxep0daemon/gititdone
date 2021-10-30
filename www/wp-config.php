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
define( 'DB_NAME', 'wordpress' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'mysqluser' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'mysqlpwd' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'db:3306' );

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
define( 'AUTH_KEY',         'mYS[!OxXU|`Up$ShA:,(-&_>MY@L>9Gx30GJ7UZ#<f~/KXW<IjK#3; Z$a`[|PBP' );
define( 'SECURE_AUTH_KEY',  '!8cVHHNa_+ >&8rXL+Ie fvXEx8vS+zeBM[sO3GbPfX:#@[U.1rivvvxieNV%;5:' );
define( 'LOGGED_IN_KEY',    'j|jy7>R]*+ CVtJ)c0^ >9$i</4E%<c3<3ibq1!dVC[jyolhlp?<5Y=6Hm11VkN:' );
define( 'NONCE_KEY',        'ym2=g{m@HyRH6H-39gccAIKOL.cL_4I=W<U)/s399i_W0ibQj9+zH}B@8.Q?>S3k' );
define( 'AUTH_SALT',        ',du21aJQB^M|f@{xeH1XjCH*eHE/pEc&|#hh~2IH,yCIk-%++|4oNla(qP30u)!a' );
define( 'SECURE_AUTH_SALT', 'V!9G6FU[uM=|!SO+I7xKt aZug-Zpt@Z>KPkS9?6LYjZV{IKYIKUuAF7t 9]-03<' );
define( 'LOGGED_IN_SALT',   'My2WuY:IjZ=L%e`T`bpzBZQJ3qi{M?uPERU=l=Xu*.MU%%z0@W4Esk3v?F>RD.c7' );
define( 'NONCE_SALT',       '}&]}ljIr`8HtiC1/f]fEUOUzvTA7*#<F(gYYC-r,Whq^y290kfehz#>HSF6VZYLW' );

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
