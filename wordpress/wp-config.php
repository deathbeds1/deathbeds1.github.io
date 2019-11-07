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
define( 'DB_NAME', 'web' );

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
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'VfKU(+oCdSMFxi8;t*<(0O?&]rK*B>9Ju[|)OkmH7xW)Eocg6vv?Z>!GgS#%l3^v' );
define( 'SECURE_AUTH_KEY',  'R_@&#t]wKeasi*ErZX>DHbISn,&ljaX[jOKViySs2=dAs s{1X]_@!j4WA&Hr7zD' );
define( 'LOGGED_IN_KEY',    '&#.G=z4J9xcl6o:(X-aV)0KalZ2,#A5r4APM_btx]V`|dm!TriUQs! Gg|p{Ym3H' );
define( 'NONCE_KEY',        'DAFvb:Q*&v#p28Ar5b@uG^{|bA1d}l#^fH@Ixg$TevgtWw3N^(yyo!JV+@7j[IkM' );
define( 'AUTH_SALT',        'TyLW|<sixViB8l:9LeK^uwJ}Q6JPVLkM4+`$NISR)Jnq<K0pl(voDpmgv_7r=G0A' );
define( 'SECURE_AUTH_SALT', 'xk0E>:_LphHf#Cgn4rTgoE[U/u>2l]wpef0z![8PRE</lC#qE%E|PKx)y8%]B=Bz' );
define( 'LOGGED_IN_SALT',   'MuKQ`s,u*-H/ujqS^^+LAoiM000NOC(q64_@q? 9;!?n@:*@0O/lSNK[bbGV6v}c' );
define( 'NONCE_SALT',       'Rg@5%=#Hw/nMF9zg%<rUG!UGIqE!)W/(Ro61O3C:gF]!j,92;OR{8jd2~G3gmNMx' );

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
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
