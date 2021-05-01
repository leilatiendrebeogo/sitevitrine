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
define( 'DB_NAME', 'blogwordpress' );

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
define( 'AUTH_KEY',         'GsZW(fLXlH{2O#0{>Rv@.H:T#b9u!0~a1<=B^b$*]U`yfQn4IZ~c|%E&?^B3cy|`' );
define( 'SECURE_AUTH_KEY',  '% Rq3..~9y|QE (kxrN^sCo70!^2N{](,0]e/@E#I<3E55v1FfQyGB0%.-5mS58m' );
define( 'LOGGED_IN_KEY',    '!x] e]7VU*H.zVM=w^nl_|hOpk>XxpR-f0=}dGkn]3!cy|#l+;a``SZdbw.T:[jN' );
define( 'NONCE_KEY',        'Q)4d:RC+:;{GRXGJCLw^bq{zrao_9]R#[IG<sh9S=V`N`Lj$J;QIGpH]z%^TsMab' );
define( 'AUTH_SALT',        'm?}~+Y`!dwMk}GZ?O)G-Zz-lkf7b97{]e@!YgCDX^l2&NI|wAU+Tf}iOO*=%-ZH{' );
define( 'SECURE_AUTH_SALT', 's;((^A&//*/G]?-v%Wp2Kj[PWLj/[rfv>Gow`5HM33VT`jBo.n}n3Xz:3Grxm7)Z' );
define( 'LOGGED_IN_SALT',   'b|H/&$d1?@.U]D6l.&:?S--^~)K+*L71Ae5qtM=w?NTe7|uadb:6#ylMK|IQ<tQ6' );
define( 'NONCE_SALT',       't:y?hq}](`$IT_{L3TUzNO4O$MK8}p0BRqqNkpG @rx#[%sw|AQ,]M|[;@|6F1sY' );
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
