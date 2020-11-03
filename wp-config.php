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
define( 'DB_NAME', 'childhoodwp' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'admin' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '12345' );

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
define( 'AUTH_KEY',         'F7Rmn4S?+4{zACYZ/jR1a:}Q<8rLO:K*`=mPl7z4w|{2D+yyme#PWLWMrU]q4VrY' );
define( 'SECURE_AUTH_KEY',  'MLPn,Mg|.yV)Jz[~PmneCcX.}.zY;DJ)xqoC9_F=l%Fa}>Y <<[(ccwR3u~`bt4S' );
define( 'LOGGED_IN_KEY',    '#m$mN3[av <R+b2zn12XQi0xf<2(:d{3KeVzmB;TD(.;T[24V?eT+~wHz2 LN:^i' );
define( 'NONCE_KEY',        '+B(CRykA@9wK4:A<7}9=g?0604ypcK[vk]M2Q![pl$^VKrHi2S=1{WWW]hUD0F5R' );
define( 'AUTH_SALT',        '%Zy7nT8)_wZxO3u`niNJ7H`/Q=qr3/(C+Ay/yyNr4!e6<X>Nz,KzOvo1NQb,iUYL' );
define( 'SECURE_AUTH_SALT', 'n^q<fDZu)LGFmT&4X=_z|k-w,7%<|L2GF*M^2?X4,XerZun0Y7jE-5/kxq|&] @4' );
define( 'LOGGED_IN_SALT',   '$5gqDS9}tcBVR->X<++)?.;c^jy$>rb2(IK/?b-eq/*s)dn) aoJi@kt3OiW6;,P' );
define( 'NONCE_SALT',       'Jz^&DwG~z9si# e_)gnmR7? QA#Yb]IxSJA|5gz]06nnkG/+I)G(;PA`>wHeKam@' );

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
