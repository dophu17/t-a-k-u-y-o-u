<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'takuyou2018');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'root');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', '123456');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '6B4{|@+LKC?H#55!)Df]aM`r.9I;y flE:UWgO_Wp_qhg;[Br77eRLb{2 n:-Ug#');
define('SECURE_AUTH_KEY',  'i@bK}g?j.{Co`{EdK}7b*@|*50QI.WE(!-Ddk[!@k`/qnrGiZo+}ULSTCz@9[`vI');
define('LOGGED_IN_KEY',    'HpL%ZU*)4g?34K[sNhaR~~r]_T$C>*xq)M)DWNt#{,zj[v)P>0X0|@,yv7DWmi8@');
define('NONCE_KEY',        '#oykzSH&`O1yMmC}F(Cr5I)ml>7U.U~sl6s2mPH1`hl J%hjp6(y9@tO$<L,AA|B');
define('AUTH_SALT',        'u`jMQ]KyW;=f5(C.sJE)m6-,[2^rDAT1Pi|U:FER}fDMDIZhDrb~FF9C5uh8AbDH');
define('SECURE_AUTH_SALT', 'H_59}^tteSW}N3*W#(k)#G),*&YOh,=DJAZvQ$<o[?dedTvzn0/pu?Dc)?#SfcbA');
define('LOGGED_IN_SALT',   '51B$M<xZjm{EDD%gV+tGJb2m[*8j5O)ZGI0GxhR+DCMTAxCKc$3pGj-%9EjmA Py');
define('NONCE_SALT',       'Y+bIqBQpY*;t5+:oygj^,gcgs,^6_o O$1F.L1iSkmKl2L1.Y@m?#=07J-<KOI/z');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
