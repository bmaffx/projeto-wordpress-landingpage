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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'jornadaviagens' );

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
define( 'AUTH_KEY',         'E:>~XLhj?=f$BgSo^l!fn2$-<^wazYfSSA=,ktE4Su9P9CTS7!S]02GsRgeu:{nz' );
define( 'SECURE_AUTH_KEY',  'prih|N-M=,trppC/^_l<htv+Yi+}u8SagA~SG4fh kJ@P( kmJaz_p$kNUa%5,)M' );
define( 'LOGGED_IN_KEY',    '42M;5f%),F@[ Vmkyo>8s}FA0}O`tQ=kwR!c0fYboEN1Ir#*2ndqjeqK@2LKEFJi' );
define( 'NONCE_KEY',        'CuB&Zh9/I`IZ%T-0M|`I~{d$d2<rt*z]-A)Fk/](hr^^p?~C3E9M S=yOzP<^vpi' );
define( 'AUTH_SALT',        'oU1ay8n;wh3%R91-0T!5PxuagY)rBROaL84;=`5xg$g|08CDKT{R?`GK2Xqp-P=j' );
define( 'SECURE_AUTH_SALT', '^Xc1u(3,[(MbQc`z1hy%{N$~2>ifDMR5sk[b6!p2Vn%DU y}n!aS11][64pv[j^H' );
define( 'LOGGED_IN_SALT',   'F2UzKd_ aCZAnUYc?9gbUa!?,Br|#3h:I-;Yr@_Dy|ry7pq(2,4kPfj%[;FK7W7o' );
define( 'NONCE_SALT',       'yc}lJ2Z!~8~Ps}N1Sn!wNOf!fZf:-//+@h&@DR7UJzFFU+/%J=g|A|=a/i|A})Jg' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'jvwp_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
