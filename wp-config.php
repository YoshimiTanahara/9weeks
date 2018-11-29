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
define('DB_NAME', 'homework');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'root');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', '');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '9lLt7TB/>2^<2ZFo,(aS+YhMF>Q/E*2AHH&*R5*OmAX81%XY644vZVR)iSl0B0*g');
define('SECURE_AUTH_KEY',  '=(xCQ|o]4a3Ht>+tN-J1;a]%idwU?r7OHUc_YSWBVB_{ oW`UOv9IS{X*x/>veQ6');
define('LOGGED_IN_KEY',    'sUsVd)f{`U#=1G[jDf^q.yeiC_oX7Sk!1@=7+FL[y[U6$e*D)#8LEM43Jpo8$w}I');
define('NONCE_KEY',        '3DuI]Ut^6~:a@MFP}539|s~,a`/h8V0B&k38?Si!cxXCP.[TbAFF/iF|Rs.kQ[`e');
define('AUTH_SALT',        'z@M&zvuVa}.NB]9z?N X&Oqv9 XU.!TytyGY{Hh^r&M(P>Q:,qc{y3Lt*uL>3eh6');
define('SECURE_AUTH_SALT', 'f0<,fq1T^{BWI>s=CDG1bfp#l]k~4s&U!N5FGgb{`PQ!h,?WON{:%uwQ?/)yS92x');
define('LOGGED_IN_SALT',   'cu6MEr,zEo9o3hVAYToD<NI4:Dyt}Kbua%fWU&5.ci^Hb7f%a{uxIAjDak S1O2Q');
define('NONCE_SALT',       '`7YAjW24^jd}4;aA(NVXf#m%:}>? |>6EW*|/Z*/.@&Uk/#b!8}+|A^ZAk[j-uC ');

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
