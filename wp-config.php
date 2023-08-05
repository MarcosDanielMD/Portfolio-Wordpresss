<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'ativpw3' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '{RX_Kfwf?4B{1?9 d_2x5^rT(%gC_Ej|a]e(fTNtt01NVYofW@$G# ,I$$WBFF[6' );
define( 'SECURE_AUTH_KEY',  'Dnw-Y/N;q>;3jCgnQH}Cxd4>RTT#|.T!k2?)`WM=tw>vKjKk`SCHo[k6Zqw_?9}9' );
define( 'LOGGED_IN_KEY',    '~]:HIgCU&5uBc|.Mi#lASwst4%2>s#DknsK%E}EyG7=1n0#v|y@ah#0^;&7`O(BT' );
define( 'NONCE_KEY',        'kv<k^g`&[ZVScmhEyjA#_&cn#R? ,A3C.]q@(~<o]}VZfwW)wX|DNnsJXmbR5I^r' );
define( 'AUTH_SALT',        '?;`VV$wT<=$K3yP)9r]:5[/gyh!;T!l;+. {[5bDkZJX$BqSV3X3NX6QC$@$fqlE' );
define( 'SECURE_AUTH_SALT', 'S(P6A3s8Q-9Um;*sUk>]OJk6rF9vXg$a#C6e4{o) 6]G8E`K3~72~.^ QEJy%Sr^' );
define( 'LOGGED_IN_SALT',   'A%f88zSOa`VxmNYr8w`(EJUTl@PfHM8FK7Y-u`}HK--uB6K>~s:SY pbd-Nh4B92' );
define( 'NONCE_SALT',       'g3aBxzam8^g7 ]6!g-Qt_]rYauru7{,{#)lUFuc/f@N#4b;fkt,,=o-nZ6G%bpT4' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
