<?php
/**
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página {@link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/}.
 * Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

/* Environment */
define( 'WP_ENVIRONMENT_TYPE', 'production' );

/* Database connection */
define( 'DB_NAME', 'nombre_database' );
define( 'DB_USER', 'nombre_usuario' );
define( 'DB_PASSWORD', 'password_usuario' );
define( 'DB_HOST', 'localhost' );
define( 'DB_CHARSET', 'utf8mb4' );
define( 'DB_COLLATE', 'utf8mb4_general_ci' );

/* Tables */
$table_prefix  = 'prefijo_';
define( 'CUSTOM_USER_TABLE',      $table_prefix . 'usuarios' );
define( 'CUSTOM_USER_META_TABLE', $table_prefix . 'usuariometadatos' );

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '[B&dQ;(Bq00[FWSX@b8VPoF}]N^Y+G6EH>V/|5pM2@vYXiwMua4Sm{n~NXT^^]BC' );
define( 'SECURE_AUTH_KEY',  '!>]zdm{xJ&8Ew+!2q3rpSZ98p3jJ7TWKT<l6h-zSE8AP3#U9Y`Yks2#=!OmxU[e|' );
define( 'LOGGED_IN_KEY',    '%[h,,+-Z~,p?Aw:%7G3~Bbwb~W6A$)g_-etA~x%H4#3_BmMWp^aK[s{8H36?j<n<' );
define( 'NONCE_KEY',        ':.&>UddRNJ^4VG!J62(bk5<P{^gGQH#wH+n5/>?n4miT{A`clK<@$ X=_$v<<ApA' );
define( 'AUTH_SALT',        'VEN=$!bIr[ke)+p!:vGY:Epvtso{T]-&OV*b-hLiQv42?;)fNt8]HdQP}E!F2%vJ' );
define( 'SECURE_AUTH_SALT', 'sE1B[K&N;KMLq]t(MFI(GZ$(P-ixh-%S/L~M:|)J`yTPPqN&r%wi@sAkEfT2$>BJ' );
define( 'LOGGED_IN_SALT',   '][l{K,KguO5!m!CmH 2t+;r$}$Q1{nC$:)}&sRp6g1EQDB?-Q$I)K.j:?9zF4yH5' );
define( 'NONCE_SALT',       'SEXYCn3Y!T4UQmqm[J2Ma3^ @aQ8}$lBE9@]Ql.L ~#,du!-*8oc3evQq<UW6AiU' );

/**#@-*/

/* HTTPS */
define( 'FORCE_SSL_LOGIN', true );
define( 'FORCE_SSL_ADMIN', true );
define( 'WP_DISABLE_FATAL_ERROR_HANDLER', false );
define( 'WP_DISABLE_ADMIN_EMAIL_VERIFY_SCREEN', false );

/* URL / Path */
define( 'WP_SITEURL', 'https://sitio.dominio' );
define( 'WP_HOME', 'https://sitio.dominio' );
define( 'WP_CONTENT_DIR', '/ruta_carpeta_sitio/contenido' );
define( 'WP_CONTENT_URL', 'https://sitio.dominio/contenido' );
define( 'WP_PLUGIN_DIR', '/ruta_carpeta_sitio/contenido/plugins' );
define( 'PLUGINDIR', '/ruta_carpeta_sitio/contenido/plugins' );
define( 'WP_PLUGIN_URL', 'https://sitio.dominio/contenido/plugins' );
define( 'UPLOADS', 'contenido/uploads' );

/* Cookies */
define( 'TEST_COOKIE', 'sitio_test_cookie' );
define( 'COOKIEHASH', 'xFnSGMFTVR6BpsmAwWDXVNFM2kkKv9PEWYyaywTV79Bh4lQbE4Wc8cFHI6IBzExZ' );
define( 'LOGGED_IN_COOKIE', 'sitio_logged_in_xFnSGMFTVR6BpsmAwWDXVNFM2kkKv9PEWYyaywTV79Bh4lQbE4Wc8cFHI6IBzExZ' );
define( 'SECURE_AUTH_COOKIE', 'sitio_logged_in_xFnSGMFTVR6BpsmAwWDXVNFM2kkKv9PEWYyaywTV79Bh4lQbE4Wc8cFHI6IBzExZ' );
define( 'AUTH_COOKIE', 'sitio_xFnSGMFTVR6BpsmAwWDXVNFM2kkKv9PEWYyaywTV79Bh4lQbE4Wc8cFHI6IBzExZ' );
define( 'PASS_COOKIE', 'sitiopass_xFnSGMFTVR6BpsmAwWDXVNFM2kkKv9PEWYyaywTV79Bh4lQbE4Wc8cFHI6IBzExZ' );
define( 'USER_COOKIE', 'sitiouser_xFnSGMFTVR6BpsmAwWDXVNFM2kkKv9PEWYyaywTV79Bh4lQbE4Wc8cFHI6IBzExZ' );
define( 'RECOVERY_MODE_COOKIE', 'sitio_rec_xFnSGMFTVR6BpsmAwWDXVNFM2kkKv9PEWYyaywTV79Bh4lQbE4Wc8cFHI6IBzExZ' );

/* Content */
define( 'AUTOSAVE_INTERVAL', 60 );
define( 'WP_POST_REVISIONS', false );
define( 'MEDIA_TRASH', false );
define( 'EMPTY_TRASH_DAYS', 7 );
define( 'WP_MAIL_INTERVAL', 86400 );

/* Memory */
define( 'WP_MEMORY_LIMIT', '256M' );
define( 'WP_MAX_MEMORY_LIMIT', '256M' );

/* Updating */
define( 'AUTOMATIC_UPDATER_DISABLED', false );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
define( 'CORE_UPGRADE_SKIP_NEW_BUNDLED', false );

/* File edition */
define( 'DISALLOW_FILE_MODS', false );
define( 'DISALLOW_FILE_EDIT', true );
define( 'IMAGE_EDIT_OVERWRITE', true );

/* SMTP email settings */
define( 'SMTP_USER', 'usuario.sender@servidor.dominio' );
define( 'SMTP_PASS', 'password.sender' );
define( 'SMTP_AUTH', true );
define( 'SMTP_HOST', 'servidor.dominio' );
define( 'SMTP_PORT', '465' ); // Puede ser tambien el 25 o 587
define( 'SMTP_SECURE', 'TLS' ); // SSL/TSL
define( 'SMTP_FROM', 'usuario.remitente@servidor.dominio' );
define( 'SMTP_FROM_NAME', 'Texto remitente' );
define( 'SMTP_DEBUG', 2 ); // Para hacer un debug se necesita setear en 1 o 2

/* Performance */
//define( 'WP_CACHE', true );
//define( 'WP_CACHE_KEY_SALT', 'a4217j8tdllpfepaxd:' );
//define( 'COMPRESS_CSS', true );
//define( 'COMPRESS_SCRIPTS', true );
//define( 'CONCATENATE_SCRIPTS', false );
//define( 'ENFORCE_GZIP', true );

/* Cron */
define( 'DISABLE_WP_CRON', true );
define( 'ALTERNATE_WP_CRON', false );
define( 'WP_CRON_LOCK_TIMEOUT', 60 );

/* FTP Access */
define( 'FS_METHOD', 'ssh2' );
define( 'FTP_BASE', '/ruta_carpeta_sitio/' );
define( 'FTP_CONTENT_DIR', '/ruta_carpeta_sitio/contenido/' );
define( 'FTP_PLUGIN_DIR', '/ruta_carpeta_sitio/contenido/plugins/' );
define( 'FTP_USER', 'usuario_ftp' );
define( 'FTP_PASS', 'password_ftp' );
define( 'FTP_HOST', 'dominio_ftp' );
define( 'FTP_SSL', true ); // Sólo en el caso que tengamos SFTP

/* Plugins Must-Use */
define( 'WPMU_PLUGIN_DIR', '/contenido/imprescindibles' );
define( 'WPMU_PLUGIN_URL', 'https://sitio.dominio/contenido/imprescindibles' );
define( 'MUPLUGINDIR', 'contenido/imprescindibles' );

/* Filtering */
define( 'DISALLOW_UNFILTERED_HTML', false );
define( 'ALLOW_UNFILTERED_UPLOADS', false );

/* MultiSite */
define( 'WP_ALLOW_MULTISITE', false );
define( 'WP_DEFAULT_THEME', 'nombre_tema_base' );

/* File permissions */
define( 'FS_CHMOD_DIR', ( 0755 & ~ umask() ) );
define( 'FS_CHMOD_FILE', ( 0644 & ~ umask() ) );

/* Debug */
define( 'WP_DEBUG', false );
if ( WP_DEBUG ) {
	define( 'WP_DEBUG_DISPLAY', true );
	define( 'WP_DEBUG_LOG', true );
}
define( 'SCRIPT_DEBUG', true );
define( 'SAVEQUERIES', true );

/* Embed H5P */
define( 'H5P_EMBED_URL_ALWAYS_AVAILABLE', true );
define( 'H5P_DEV', false );

/* JWT Authentication */
define( 'JWT_AUTH_SECRET_KEY', 'palabra_secreta' );
define( 'JWT_AUTH_CORS_ENABLE', true );

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
