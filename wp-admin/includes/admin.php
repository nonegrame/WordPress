<?php
/**
 * Core Administration API
 *
 * @package CM5
 * @subpackage Administration
 * @since 2.3.0
 */

if ( ! defined('WP_ADMIN') ) {
	/*
	 * This file is being included from a file other than wp-admin/admin.php, so
	 * some setup was skipped. Make sure the admin message catalog is loaded since
	 * load_default_textdomain() will not have done so in this context.
	 */
	load_textdomain( 'default', WP_LANG_DIR . '/admin-' . get_locale() . '.mo' );
}

/** CM5 Administration Hooks */
require_once(ABSPATH . 'wp-admin/includes/admin-filters.php');

/** CM5 Bookmark Administration API */
require_once(ABSPATH . 'wp-admin/includes/bookmark.php');

/** CM5 Comment Administration API */
require_once(ABSPATH . 'wp-admin/includes/comment.php');

/** CM5 Administration File API */
require_once(ABSPATH . 'wp-admin/includes/file.php');

/** CM5 Image Administration API */
require_once(ABSPATH . 'wp-admin/includes/image.php');

/** CM5 Media Administration API */
require_once(ABSPATH . 'wp-admin/includes/media.php');

/** CM5 Import Administration API */
require_once(ABSPATH . 'wp-admin/includes/import.php');

/** CM5 Misc Administration API */
require_once(ABSPATH . 'wp-admin/includes/misc.php');

/** CM5 Options Administration API */
require_once(ABSPATH . 'wp-admin/includes/options.php');

/** CM5 Plugin Administration API */
require_once(ABSPATH . 'wp-admin/includes/plugin.php');

/** CM5 Post Administration API */
require_once(ABSPATH . 'wp-admin/includes/post.php');

/** CM5 Administration Screen API */
require_once(ABSPATH . 'wp-admin/includes/class-wp-screen.php');
require_once(ABSPATH . 'wp-admin/includes/screen.php');

/** CM5 Taxonomy Administration API */
require_once(ABSPATH . 'wp-admin/includes/taxonomy.php');

/** CM5 Template Administration API */
require_once(ABSPATH . 'wp-admin/includes/template.php');

/** CM5 List Table Administration API and base class */
require_once(ABSPATH . 'wp-admin/includes/class-wp-list-table.php');
require_once(ABSPATH . 'wp-admin/includes/class-wp-list-table-compat.php');
require_once(ABSPATH . 'wp-admin/includes/list-table.php');

/** CM5 Theme Administration API */
require_once(ABSPATH . 'wp-admin/includes/theme.php');

/** CM5 User Administration API */
require_once(ABSPATH . 'wp-admin/includes/user.php');

/** CM5 Site Icon API */
require_once(ABSPATH . 'wp-admin/includes/class-wp-site-icon.php');

/** CM5 Update Administration API */
require_once(ABSPATH . 'wp-admin/includes/update.php');

/** CM5 Deprecated Administration API */
require_once(ABSPATH . 'wp-admin/includes/deprecated.php');

/** CM5 Multisite support API */
if ( is_multisite() ) {
	require_once(ABSPATH . 'wp-admin/includes/ms-admin-filters.php');
	require_once(ABSPATH . 'wp-admin/includes/ms.php');
	require_once(ABSPATH . 'wp-admin/includes/ms-deprecated.php');
}
