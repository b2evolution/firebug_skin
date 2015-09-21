<?php
/**
 * This is the BODY footer include template.
 *
 * For a quick explanation of b2evo 2.0 skins, please start here:
 * {@link http://manual.b2evolution.net/Skins_2.0}
 *
 * This is meant to be included in a page template.
 *
 * @package evoskins
 * @subpackage firebug
 */
if( !defined('EVO_MAIN_INIT') ) die( 'Please, do not access this page directly.' );
?>

<!-- =================================== START OF FOOTER =================================== -->
<div id="footer">
	<p style="float: left; text-align: left;">
		A <a href="http://b2evolution.net/" title="b2evolution">b2evolution</a> port by <a href="http://Laibcoms.asia/" title="Snow World">JC John Sese Cuneta</a>.
		<br/>Firebug Theme by <a href="http://www.blogohblog.com/" title="Firebug">Blog Oh! Blog</a>.
	</p>

	<p style="float: right; text-align: right;">
		<?php
		// Display a link to contact the owner of this blog (if owner accepts messages):
		$Blog->contact_link( array(
				'before'      => '',
				'after'       => ' &bull; ',
				'text'   => T_('Contact'),
				'title'  => T_('Send a message to the owner of this blog...'),
			) );
		?>

		Powered by <a href="http://b2evolution.net/" title="b2evolution home" target="_blank">b2evolution</a>
		<br/>
		Credits: <a href="http://skinfaktory.com/">skin makers</a>

		<?php
		// Display additional credits:
		// If you can add your own credits without removing the defaults, you'll be very cool :))
		// Please leave this at the bottom of the page to make sure your blog gets listed on b2evolution.net
		credits( array(
				'list_start'  => ' &bull; ',
				'list_end'    => ' ',
				'separator'   => ' &bull; ',
				'item_start'  => ' ',
				'item_end'    => ' ',
			) );
		?>

	</p>

	<br clear="all" />
</div> <!-- end of id="footer" -->