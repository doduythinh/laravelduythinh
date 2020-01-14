<?php
/** Enable W3 Total Cache */
define( 'WPCACHEHOME', 'E:\Wampthinh12\www\wordpress1\wp-content\plugins\wp-super-cache/' );
define('WP_CACHE', true); // Added by W3 Total Cache

/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'wordpress' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'e]X!_1nyjW>0o_#E7VK,Z,^N7Se~)vuR0KH/#wVl58BzA-u7BTKarOAC4(zdh!b4' );
define( 'SECURE_AUTH_KEY',  'hoJ{LelHnP(zRBs+XjPCA@^i]it~ofW~m^FxWYWPTRL0=G352?n&mnI:#bq8[3^M' );
define( 'LOGGED_IN_KEY',    'LmKoq,:<K5kdD2Ilg1%l6HKwNIq[l=T4tPT+gHHO;0km uC:--Y-Y?Zc )#o3@Nl' );
define( 'NONCE_KEY',        'ObfH<<:~~ Q/iGK-~jDI.S#)xr(hZh8~`7!1ATBvO}Mp,gqSE_M2=)K5^N{FMWLP' );
define( 'AUTH_SALT',        'Y62Ckhs`nA?o}F$85[IbI7<VKRW>:7s,1>if+@Z)MB6qoyR)SqmR}dS?6U`(:R7n' );
define( 'SECURE_AUTH_SALT', 'lZ2%]S!b*l`:6Z!Vnn?~ew)Gf=IBve6~Acr#71d%PpMyi5g6%W8~Y6/pfrJnJ#H?' );
define( 'LOGGED_IN_SALT',   'Lu:wX~-z40Ec1*(xFJY5Jh@L.B*hpP3vb`SFJe13 UoA0o]gGrhe(::dtaqwT=G:' );
define( 'NONCE_SALT',       'BzO)mGH=:*,P1+`mvg^Xxyf93UKHXybsvZQBA;R30_RdA:ou1vwxG#;y[[@!D,!}' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
