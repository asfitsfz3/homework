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
define('DB_NAME', 'turistik');

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
define('AUTH_KEY',         'U3|fVKx%<lG<[,)YI6ThnAUiT%cx)L6ukK}#f#yiawCx`w-YQhz^C1h7K|stCij{');
define('SECURE_AUTH_KEY',  '`fI$fL5]Cat`qtJ}ecN*P;_G25=h|]IIAk^|J+9nOdnFyW2AYhr$,&Er8t{V%##.');
define('LOGGED_IN_KEY',    'Hze fIVMD.E50}%]<b`CCY,G:E:sYj1i/^^J,S7[`owhXvx8fS`VdZjRf(o5aa*N');
define('NONCE_KEY',        '$tdgpa~0!{I T@:t.^iCmW#;QHcaPGBvsQSjSbDpW#.mtwbPf;O,x.U4;g^Dch%7');
define('AUTH_SALT',        'db,5mE.+JuO0M]>!Z.wmlzD2~^]wTs)8F,0??7~;Ou6f!-=CdFtQiR.&M@,~kh.2');
define('SECURE_AUTH_SALT', '_N>,S6TYdO*ykbVL7iw4?v/E[+D$(6-i-7XTF1<1}-DhhBUjZ5qT%F2U@/}V !!R');
define('LOGGED_IN_SALT',   'zr(#)T3^(O(^Cvx&`h+nI;[s1TpeFxbGRAL_{MTdgrjwrH*W7q4L Z~sxiPjN]Wd');
define('NONCE_SALT',       '^5a!<Zx$~KPGP+I<-qdqlY)u2/4![1ZFCy2{/>MU(ML1LvF2^(.Ofcm#8a_Pr_Pj');

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
