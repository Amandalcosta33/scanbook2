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
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'livros' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'livros' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'amanda' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         'J85QSpPo kTz*Cq|k3{n;YWjk}{1fo+ |GpJ|gQ#e-2@Q~dHUS^b=*W(|y@|/y.M' );
define( 'SECURE_AUTH_KEY',  'I5i9:&#9TicJ)e<eWF$D =yvg#.ZUbR5,t?:=[xFZOpDIfsBOr%IS&POxc.qK6[]' );
define( 'LOGGED_IN_KEY',    '`CWuBKFQ30s?JPOVY}-evZM8wK1~7Q=80U~F*(pW&1P]REdX<[zACPs!b2syt.BO' );
define( 'NONCE_KEY',        '`V&C@P8Y9F^>?W{@}r7[~t,0k{K;)|-k6MRR>b*Gj`C(3v!:X:/NY?#y]voK![Ci' );
define( 'AUTH_SALT',        'S-?joB$+}+/t&nT,S=mP:DOqyQ@y$GBQ]6cieIG[zA83#JNO$o#D9;o3o=2|m=]|' );
define( 'SECURE_AUTH_SALT', ']4=S@yzRdX,hc6 VXg`LZrcu&1iU4)=T:N$vrw$n<F-}$biDGwd,&_@]nH]:1XGS' );
define( 'LOGGED_IN_SALT',   'G=<4X5^3-WfFZ0nMDH*S@T6?RpV%&;)AVlCmT~PxJ e0C!cuL*)EXy(<C_{axN2;' );
define( 'NONCE_SALT',       '3ilC_*f9pME<4HaRMJ2yr%lB.0<B#].ehBW%1UfQsHyP4QEE><F?G24/QBlrO0<o' );

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
