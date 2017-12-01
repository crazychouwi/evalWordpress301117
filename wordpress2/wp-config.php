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
define('DB_NAME', 'crazychouwiWordpress');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'crazychouwi');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'crazychouwi88659000');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'GD=zyV0Wfs&9EF^`fmH69>492JV|Zzst%(8Fmi+TX6L0v3KREfN]fHkW/biz6@d+');
define('SECURE_AUTH_KEY',  'fx/=!83yp|8( %YEzkYKT=[B+xk[~Nj2Iu,UKa-{<_HbNP$oBcd18|z,kNTzfx-u');
define('LOGGED_IN_KEY',    'DCt#o(uowj?+Em`,ZHB{JUS. &2KlyWNq&^TSu|qY{z2d)A.dl;QLDLsu4*I53o(');
define('NONCE_KEY',        't^#JI+X.E.O@i4/M4t{zm[=h^)5BqwvT[^76054esl?DA9nRmv83nhTDuk@+wiBv');
define('AUTH_SALT',        'REnTHvBsyDyj&]q~l(8Dz%OVcV5Qvysw!CH<$7@%f$xu?OKB26qG/eLwc`|3p~Ov');
define('SECURE_AUTH_SALT', 'a|N)ab7ExrEX]_|m5n),, 1(=2E-n:|_2dX?A(o+fB`?KT?KlV/oH+]GcIZUFN#L');
define('LOGGED_IN_SALT',   '5fC}51-ed~%mB#0%p`6dQ]@>!Y6Vi]I*{5~0i8vMG3Z+K.5;:pDh#l1.</;K~HS}');
define('NONCE_SALT',       '5nv``g2Q3jnVFr,JekelUXj`y6/f>BhHvb5NJ&]ye0^4/H[EJ.M;9Q?8.^xi=7t#');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

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

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
