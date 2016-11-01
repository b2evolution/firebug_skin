<?php
/**
 * This file implements a class derived of the generic Skin class in order to provide custom code for
 * the skin in this folder.
 *
 * This file is part of the b2evolution project - {@link http://b2evolution.net/}
 *
 * @package skins
 * @subpackage firebug
 *
 * @version $Id: _skin.class.php,v 1.3 2009/05/24 21:14:38 fplanque Exp $
 */
if( !defined('EVO_MAIN_INIT') ) die( 'Please, do not access this page directly.' );

/**
 * Specific code for this skin.
 *
 * ATTENTION: if you make a new skin you have to change the class name below accordingly
 */
class firebug_Skin extends Skin
{
	var $version = '1.1.1';
	
	/**
	* Get default name for the skin.
	* Note: the admin can customize it.
	*/
	function get_default_name()
	{
		return 'firebug';
	}

	/**
	* Get default type for the skin.
	*/
	function get_default_type()
	{
		return 'normal';
	}

	/**
	* Get definitions for editable params
	*
	* @see Plugin::GetDefaultSettings()
	* @param local params like 'for_editing' => true
	*/
	function get_param_definitions( $params )
	{
		$r = array_merge( array(
			'html5_support'	=>	array(
				'label'		=>	T_('HTML5'),
				'defaultvalue'	=>	'1',
				'note'		=>	'activate HTML5 support across all browsers (as of 08/08/2009)',
				'type'		=>	'checkbox'
			),
		), parent::get_param_definitions( $params ) );
		return $r;
	}

	/**
	* Get ready for displaying the skin.
	*
	* This may register some CSS or JS...
	*/
	function display_init()
	{
		// call parent:
		parent::display_init();

		// Add CSS:
		require_css( 'basic_styles.css', 'blog' ); // the REAL basic styles
		require_css( 'basic.css', 'blog' ); // Basic styles
		require_css( 'blog_base.css', 'blog' ); // Default styles for the blog navigation
		require_css( 'item_base.css', 'blog' ); // Default styles for the post CONTENT

		// Make sure standard CSS is called ahead of custom CSS generated below:
		require_css( 'rsc/css/style.css', 'relative' );

		// Colorbox (a lightweight Lightbox alternative) allows to zoom on images and do slideshows with groups of images:
		if($this->get_setting("colorbox"))
		{
			require_js_helper( 'colorbox', 'blog' );
		}
		// Add custom CSS:
		$custom_css	=	'';
		$html5support	=	'';

		if( $this->get_setting('html5_support') == '1' )
		{	// HTML5 Support
			$html5support .= '
	<!--[if IE]>
		<script src="rsc/js/html5.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="rsc/css/html5.css" type="text/css" />
			';
		}

		$custom_css = ''.$html5support.'
		';
		add_headline( $custom_css );
	}
}
?>