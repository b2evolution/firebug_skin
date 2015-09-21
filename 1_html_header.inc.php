<?php
/**
 * This is the HTML header include template.
 *
 * For a quick explanation of b2evo 2.0 skins, please start here:
 * {@link http://manual.b2evolution.net/Skins_2.0}
 *
 * This is meant to be included in a page template.
 * Note: This is also included in the popup: do not include site navigation!
 *
 * @package evoskins
 * @subpackage firebug
 */
if( !defined('EVO_MAIN_INIT') ) die( 'Please, do not access this page directly.' );

global $xmlsrv_url;

add_js_for_toolbar();	// Registers all the javascripts needed by the toolbar menu
require_js( 'ajax.js', 'blog' );

header_content_type();	// Sets charset!
?>
<?php
if( $Skin->get_setting('html5_support') == '1' )
{
	echo '<!DOCTYPE html>
<html lang="'; locale_lang(); echo '">
';
}
else
{
	echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="'; locale_lang(); echo '" lang="'; locale_lang(); echo '">
';
}
?>
<head>
	<?php skin_content_meta(); /* Charset for static pages */ ?>
	<?php skin_description_tag(); ?>
	<?php skin_keywords_tag(); ?>
	<title><?php
		// ------------------------- TITLE FOR THE CURRENT REQUEST -------------------------
		request_title( array(
			'auto_pilot'      => 'seo_title',
		) );
		// ------------------------------ END OF REQUEST TITLE -----------------------------
	?></title>
	<!--[if gte IE 8]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<![endif]-->
	<?php skin_base_tag(); /* Base URL for this skin. You need this to fix relative links! */ ?>
	<?php $Plugins->trigger_event( 'SkinBeginHtmlHead' ); ?>
	<?php robots_tag(); ?>
	<meta name="generator" content="b2evolution <?php app_version(); ?>" /> <!-- Please leave this for stats -->
	<!--[if lt IE 8]>
		<script src="rsc/js/ie7/IE8.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="rsc/css/style.css" type="text/css" />
	<?php include_headlines() /* Add javascript and css files included by plugins and skin */ ?>
	<?php
		$Blog->disp( 'blog_css', 'raw');
		$Blog->disp( 'user_css', 'raw');
	?>
	<?php
		if( $Blog->get_setting( 'feed_content' ) != 'none' )
		{ // auto-discovery urls
	?>
	<link rel="feed alternate" type="application/atom+xml" title="Atom" href="<?php $Blog->disp( 'atom_url', 'raw' ) ?>" />
	<link rel="feed alternate" type="application/rss+xml" title="RSS 2.0" href="<?php $Blog->disp( 'rss2_url', 'raw' ) ?>" />
	<?php
		}
	?>
 	<link rel="EditURI" type="application/rsd+xml" title="RSD" href="<?php echo $xmlsrv_url; ?>rsd.php?blog=<?php echo $Blog->ID; ?>" />
	<link rel="icon" href="favicon.ico" />
	<meta name="viewport" content="width = 750" />
</head>

<body>

<?php
// ---------------------------- TOOLBAR INCLUDED HERE ----------------------------
require $skins_path.'_toolbar.inc.php';
// ------------------------------- END OF TOOLBAR --------------------------------

echo "\n";
if( is_logged_in() )
{
	echo '<div id="skin_wrapper" class="skin_wrapper_loggedin">';
}
else
{
	echo '<div id="skin_wrapper" class="skin_wrapper_anonymous">';
}
echo "\n";
?>
<!-- Start of skin_wrapper -->
