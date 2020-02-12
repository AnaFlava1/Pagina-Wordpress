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
define( 'DB_NAME', 'test' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'iY_Lr9olO|.NvoLK;Z($)HYQ[9SA_h`G_?UlVvnrOi4A$U75>+J<)6n(iM/b_qXs' );
define( 'SECURE_AUTH_KEY',  'R92bHg6:FhsWv)9 `05haxi):,jc6FqH<n7;kKv[CERc$Z~]Q`xqjU;e W6Sxc`Y' );
define( 'LOGGED_IN_KEY',    ':5Kq%6eywp#X<=@Kc97>>mAP[5Znvc)h8{xqykYOhs-B5eg`/,#}OTxzfAwqX1u7' );
define( 'NONCE_KEY',        'T:G746T9GLgT_wCzU`uP^KG|ls_ctB*M%t~Qp0qsw:>OFD-hN$#Gf(lW|2CAt|Gk' );
define( 'AUTH_SALT',        'HT(gsY}?g}PyDh{*<!oA%-IW4X?T XsqhBcIS].Dlb@.?l;K#2~xh9xJy3#6M&Ml' );
define( 'SECURE_AUTH_SALT', 'WT}^Sb>RfDmO)&1MJD]/LB7:C!Qi-.H5Eqbso)]mnt1a0T/T@<<[Czodp/g_f.^p' );
define( 'LOGGED_IN_SALT',   'Wx 6rv{H$F6[^E$<cP=|$cRJbO/y;A@2!44XU2UE7(LCMwT?$?[|u{ItltnLM!*b' );
define( 'NONCE_SALT',       '+L45#`I }XmEKuC UL=BuCx:?:;>Sk$hKs$xWvnPGv!*f+k !8Ib7^~Gg$ab{MuM' );

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
