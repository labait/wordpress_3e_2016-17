<?php

define('WP_HOME','http://localhost/laba/wordpress_terzoanno');
define('WP_SITEURL','http://localhost/laba/wordpress_terzoanno');
define('FS_METHOD', 'direct');

/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via
 * web, è anche possibile copiare questo file in «wp-config.php» e
 * riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni MySQL
 * * Prefisso Tabella
 * * Chiavi Segrete
 * * ABSPATH
 *
 * È possibile trovare ultetriori informazioni visitando la pagina del Codex:
 *
 * @link https://codex.wordpress.org/it:Modificare_wp-config.php
 *
 * È possibile ottenere le impostazioni per MySQL dal proprio fornitore di hosting.
 *
 * @package WordPress
 */

// ** Impostazioni MySQL - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define('DB_NAME', 'laba_wordpress_terzoanno');

/** Nome utente del database MySQL */
define('DB_USER', 'root');

/** Password del database MySQL */
define('DB_PASSWORD', '');

/** Hostname MySQL  */
define('DB_HOST', '127.0.0.1');

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define('DB_CHARSET', 'utf8mb4');

/** Il tipo di Collazione del Database. Da non modificare se non si ha idea di cosa sia. */
define('DB_COLLATE', '');

/**#@+
 * Chiavi Univoche di Autenticazione e di Salatura.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tuttii cookie esistenti. Ciò forzerà tutti gli utenti ad effettuare nuovamente il login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'a-tC}C-XBIRW4:.dCLp3<ouG*bVWDrCz?B>gMwY,eB3eRlMhUIPZApD.klE_98wc');
define('SECURE_AUTH_KEY',  'iz6lP):B8NcX=Q)HIbl;w<tT)-c;}CUn2`&o4:E0Mmk H#&~eK$Q1#6HH%(1bl[V');
define('LOGGED_IN_KEY',    'aIX,<(T+qQ9`3IYnBtxx#i0i`cRA$Oh.KXT]yl?o;-HEh4ydM#VgWjHXnk+#Xxjb');
define('NONCE_KEY',        'I#!;nhGecK?QW!n`-w1f>-7VJ=uoZAF,Z=*fv<S:m*e6//&>]R=VEJ4}q`}rqAEr');
define('AUTH_SALT',        'NdXSlu|@}wF$[uEm==<T#U@/C}:#lkd%$<qv>=yruRb#s_=,irMQ_}St7fNSnZKJ');
define('SECURE_AUTH_SALT', 'ES!dB)oq=%-zdI@z[Z-HVU7=?$I d*!7sD[dx@B=anw*:K.,mi{x;oT011{KV0+<');
define('LOGGED_IN_SALT',   'cIw#lqq%,6r-}i#3W56RV$K(O}-_4S@PLPMdKoa9mh@4qi-[1Q1x4X061!~/}va]');
define('NONCE_SALT',       '/n0gpzh1D]IN#<[pqnX3%(`*p|(t_RU={2f;Np-1vK|3-Zu=(QF6X$R35vEKumQ^');

/**#@-*/

/**
 * Prefisso Tabella del Database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco.
 * Solo numeri, lettere e sottolineatura!
 */
$table_prefix  = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi
 * durante lo sviluppo.
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 */
define('WP_DEBUG', false);

/* Finito, interrompere le modifiche! Buon blogging. */

/** Path assoluto alla directory di WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Imposta le variabili di WordPress ed include i file. */
require_once(ABSPATH . 'wp-settings.php');
