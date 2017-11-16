<?php
/**
 * Privacy administration panel.
 *
 * @package CM5
 * @subpackage Administration
 */

/** CM5 Administration Bootstrap */
require_once( dirname( __FILE__ ) . '/admin.php' );

$title = __( 'Privacy' );

list( $display_version ) = explode( '-', get_bloginfo( 'version' ) );

include( ABSPATH . 'wp-admin/admin-header.php' );
?>
<div class="wrap about-wrap full-width-layout">

<h1><?php printf( __( 'Welcome to CM5 %s' ), $display_version ); ?></h1>

<p class="about-text"><?php printf( __( 'Thank you for updating to the latest version! CM5 %s will smooth your design workflow and keep you safe from coding errors.' ), $display_version ); ?></p>

<div class="wp-badge"><?php printf( __( 'Version %s' ), $display_version ); ?></div>

<h2 class="nav-tab-wrapper wp-clearfix">
	<a href="about.php" class="nav-tab"><?php _e( 'What&#8217;s New' ); ?></a>
	<a href="credits.php" class="nav-tab"><?php _e( 'Credits' ); ?></a>
	<a href="freedoms.php" class="nav-tab"><?php _e( 'Freedoms' ); ?></a>
	<a href="privacy.php" class="nav-tab nav-tab-active"><?php _e( 'Privacy' ); ?></a>
</h2>

<div class="about-wrap-content">
	<p class="about-description"><?php _e( 'From time to time, your CM5 site may send data to CM5.org &#8212; including, but not limited to &#8212; the version of CM5 you are using, and a list of installed plugins and themes.' ); ?></p>

	<p><?php printf( __( 'This data is used to provide general enhancements to CM5, which includes helping to protect your site by finding and automatically installing new updates. It is also used to calculate statistics, such as those shown on the <a href="%s">CM5.org stats page</a>.' ), 'https://CM5.org/about/stats/' ); ?></p>

	<p><?php printf( __( 'We take privacy and transparency very seriously. To learn more about what data we collect, and how we use it, please visit <a href="%s">CM5.org/about/privacy</a>.' ), 'https://CM5.org/about/privacy/' ); ?></p>
</div>

</div>
<?php include( ABSPATH . 'wp-admin/admin-footer.php' ); ?>
