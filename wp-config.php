<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'elang');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'elang');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'elang14');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ':X*F}B]Xa2DSXE~+G{6NOCCU2_u?;Ru+zi=tF|q_u;v,|`|1=kwof5as>JQe}Z&e');
define('SECURE_AUTH_KEY',  '3`wsU@DET=`B&fl>y1?nBX2$1?3+jnm)Dw$l(|<k&cYF,<D+)-sKFD`Cz%y-|J<I');
define('LOGGED_IN_KEY',    'rK,OH`4`%EB`F?fGw?`wwa1lYMypr~r[bo3qp/ )kLa3{L76)+K*ODaj*,FD{ Z/');
define('NONCE_KEY',        '4rr<DC5sd ! 1p| fJTrsuaHT.( Rlh/h[HxrWHuJqjLMtrvLGrT~w$3#5UtgWId');
define('AUTH_SALT',        'QA_a/O@3DV?aH5<h[.baj:Dsqr:0-.p)0H%>0l=qL/.:-b|$:}EN/FoR+8*A]TJA');
define('SECURE_AUTH_SALT', ' AI;6Ur[n`R+>+P*_Mnati?OTsoIAN!aimie+n(I@<O~Ld~?[4mUmIj>]p[?>@pm');
define('LOGGED_IN_SALT',   'J^OKcek,:x,COlk/2+@++iV6$c@8k`VD_)R}p0}{%qk1cnIxsYVii?.T3:l:Le9s');
define('NONCE_SALT',       ',68ZxWPJK@~9VqliZN=zB9mWHC)+L]JxJDa>#)X*L;!~mcwrM>VEy&.Y/ hA>6IQ');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
