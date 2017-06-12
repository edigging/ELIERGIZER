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
define('DB_NAME', 'a171279_woocom');

/** Имя пользователя MySQL */
define('DB_USER', 'a171279_woocom');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'woocom');

/** Имя сервера MySQL */
define('DB_HOST', 'm6.i.h.mchost.ru');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         ') Ja,7B_FH8o_>h}k$f659%/*DDZP3CshQXTR`QvP7lQ(Zv>*H&$9;YqqvU^QThm');
define('SECURE_AUTH_KEY',  'N,T*+i+=b5?<{:Ix|:5P}h`m3*r]YN5b;2(UwAm$X2[k%_%y}C,zH_bMQG6AEKoe');
define('LOGGED_IN_KEY',    'k[Rz_y_O7TlFRV~WlaD]{bj?YDMa_xd=q[T9]e.23mw?W8D!?|)-3Q=a&X#&C5Ls');
define('NONCE_KEY',        'Z-xTh#=Gy+a3`qr:k_N#qZ@+^?CR=@CyY^dN_:rtcJ$V7T=Qh8R,Pr-XZQ|Z*-J#');
define('AUTH_SALT',        '(oYzld@X+&::Ae0I|9BgyE|I@ZfWJ/.*CKzuG}6XcY|nH&}kyxG1%3%!Zp7*ufI~');
define('SECURE_AUTH_SALT', 'zsipht;E?08MjwEY9jNHG?fn(p8+xSz4kr|1/CxKChv~CmDaxEJCA5.%*o6PXYPu');
define('LOGGED_IN_SALT',   'rs=Gk;Mm(#q=+O<P=}RIT/lw8x`qR`#xiIy%<|M_zYPic_p7Y~G</3?_Yo~~[)n`');
define('NONCE_SALT',       'Xu(v@q`Ty{wcztauT4Vf<u*y&B@k)Us8yevFjV#e&|@812hJj**8E3GKcb]epv|C');

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
