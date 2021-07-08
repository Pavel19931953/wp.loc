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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wp1' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         ',Mx;K3}SR|0f!PvC(,mjPuHJN{GxEEH5:gEC8$8?h8EvLr9(E9VK?w.6j|op1-QT' );
define( 'SECURE_AUTH_KEY',  'Ua61OS=NjG&:7>L8bW^IxQbs#p!o;RwojiC#/W2C.CEW(ZzFA:s]/31-^eqcf;~-' );
define( 'LOGGED_IN_KEY',    '/eUkY1 ?/8|#Q85&M;h?Dynl!|h_+L[c$QkpMUy;=o2E}l{{!S#A1}rS9k]G]Jv#' );
define( 'NONCE_KEY',        'Y|~[^Bf.Y@h0On)la,iuWdOaVw2NEVGsfUu[UVg^%3HEM $`fiHR8:bSy}$#Xiot' );
define( 'AUTH_SALT',        ')if>*&{i@U|y)P>nm8cb+L?b4qxh:d~E>Wv%TzYAq~DL;eEG7.PDPFA ^(?qjAZ}' );
define( 'SECURE_AUTH_SALT', '!y_cl1c#[@rL%%^H0=%a/tc`Cm1H.)OyzCgo1tdinSZ@$,jn0yUwXel)ZL?bZ*Av' );
define( 'LOGGED_IN_SALT',   'E5|=UO~PDS0ZI;_?LcQ8/iy$0Z1E(WGiv+FFK6C&B{E<P~dl9?lhJ{!WZgiS_^0v' );
define( 'NONCE_SALT',       ';j}Vo$=uylg$y^/Ju3nT1Ifp9~_=$?D?-=-){|DA1c|IB+gUi5zsqo#wO A4>nYj' );

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

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
