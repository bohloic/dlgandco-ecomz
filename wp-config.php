<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wp_ss' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '?b.]SXvWwM3Gx)I`(#F2MZ!;xgzO,7g4HueXM.U>Ncx9Ak_AoD(Rbr_aTi{OL(^X' );
define( 'SECURE_AUTH_KEY',  '#y@v*c;2hHAti 5Eg:)O2_1WU>NUZ<Mgb(^5WdDpiH;d+gJ6|v_!^*qr`eOYo$u/' );
define( 'LOGGED_IN_KEY',    'sUtr)}!W}T<}%@<k3Z85`vIn[y;|19xMD0&*M f)E+K[6s]D]2VK|;8[XgVA{z8c' );
define( 'NONCE_KEY',        '%0e_WgylM9 F(i~5CBN>g;P |4R>yh3926eZ]fF];ZqHTVbeA!&c5=1:b:$)[ASi' );
define( 'AUTH_SALT',        '`{ZqGRSeb*<$0)ho~BjrcuaD6#hkh,h/.@Y& =DUUZG.>@<}z(`gc*qU:ChCuKIc' );
define( 'SECURE_AUTH_SALT', '[iHa((!$,2sBy>eRhlyJ_>[/Y Xwv8<2(|lJk[J#P{QmF;[zLUDmdDsy8i}k%)B$' );
define( 'LOGGED_IN_SALT',   '!,v)sr)5Xxd(/lt0F5gouH/S;Eprb[gn;e*=sw@)Ok^BIvPH_[oG e(U63k{6p`C' );
define( 'NONCE_SALT',       'dCW3tFw3Nil>y9{5DeE5(=JXdx5CM)+77~k?sp!nKN:A6v,=5B#y`.tT! :U,c_%' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
