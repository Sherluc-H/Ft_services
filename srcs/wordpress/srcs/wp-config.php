<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'admin' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'pwd' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'mysql' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '=U5@xK(d[!U_fl UNh>*:EKY:<)K@qz`mM3/3lRzjRlFqUha7x~t$hPzo,J5)-$@' );
define( 'SECURE_AUTH_KEY',  'qq=-#({*APg0Y^23.Sr A`wjp3nYbu-<Go0(5[Rcnr.)iHe!1l{Hch2sA}23t7Xo' );
define( 'LOGGED_IN_KEY',    'e>ZD8=w!_~IfNI4}DYVR9Sa2~PdrowBXES!|pjdYVR0~,f$TOCKz#3q-{1naB,j!' );
define( 'NONCE_KEY',        'YrT>3#_:U4KXPti*pS{MVJq[!JyK)Q6I8}?WGQKZvhx.+.$QVFlbH4u`IL(dLXC+' );
define( 'AUTH_SALT',        'd=AdkHoF]0|hhvdN@4sE5u^`iNVOa#3z7 I6 Pm(Lr)q-9I fe@{Z<rG67uIZST=' );
define( 'SECURE_AUTH_SALT', 'cJn9J[_;RdT]WxQ]: U3f8<Q7p.ZWqw7)N:6t #OsR::pxj=]u5+bAu{q cm.in)' );
define( 'LOGGED_IN_SALT',   '/G FoVkn``Bi0@?{.g.i`0#puVgwg23{1c{Ufbg$7 nZPx<d`=|.GYO+F<`@<1W4' );
define( 'NONCE_SALT',       'OMkM+dAO72OJlONOI@!khly7Z7Pik5ZqmHcFrY/XV->;8,:&a6we?8e3VLJHdpXH' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');

