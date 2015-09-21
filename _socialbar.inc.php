<?php
/**
 * This is the SIDEBAR include template.
 *
 * This is meant to be included in a page template.
 *
 * @package evoskins
 * @subpackage firebug
 */
if( !defined('EVO_MAIN_INIT') ) die( 'Please, do not access this page directly.' );

?>

<div class="socialbar">
	<p>
		<strong><span>Submit Article :- </span></strong>
		<a href="http://blinklist.com/index.php?Action=Blink/addblink.php&amp;Description=<?php echo $Item->title( array( 'link_type' => 'none', ) ); ?>&amp;Url=<?php echo $Item->get_permanent_url(); ?>" title="BlinkList Submit" target="_blank"> BlinkList</a> + <a href="http://blogmarks.net/my/new.php?mini=1&amp;title=<?php echo $Item->title( array( 'link_type' => 'none', ) ); ?>&amp;url=<?php echo $Item->get_permanent_url(); ?>" title="Blogmarks" target="_blank">Blogmarks</a> + <a href="http://www.digg.com/submit?phase=2&amp;url=<?php echo $Item->get_permanent_url(); ?>&amp;title=<?php echo $Item->title( array( 'link_type' => 'none', ) ); ?>" title="Submit Post to Digg" target="_blank">Digg</a> + <a href="http://del.icio.us/post?url=<?php echo $Item->get_permanent_url(); ?>&amp;title=<?php echo $Item->title( array( 'link_type' => 'none', ) ); ?>" title="Submit to Del.icio.us" target="_blank">Del.icio.us</a> + <a href="http://www.feedmarker.com/admin.php?do=bookmarklet_mark&amp;url=<?php echo $Item->get_permanent_url(); ?>&amp;title=<?php echo $Item->title( array( 'link_type' => 'none', ) ); ?>;" title="Submit to Feedmarker" target="_blank">Feedmarker</a> + <a href="http://furl.net/storeIt.jsp?t=<?php echo $Item->title( array( 'link_type' => 'none', ) ); ?>&amp;u=<?php echo $Item->get_permanent_url(); ?>" title="Submit to Furl" target="_blank">Furl</a> + <a href="http://www.google.com/bookmarks/mark?op=add&amp;bkmk=<?php echo $Item->get_permanent_url(); ?>&amp;title=<?php echo $Item->title( array( 'link_type' => 'none', ) ); ?>" title="Submit to Google Bookmarks" target="_blank">Google Bookmarks</a> + <a href="http://www.netvouz.com/action/submitBookmark?url=<?php echo $Item->get_permanent_url(); ?>&amp;title=<?php echo $Item->title( array( 'link_type' => 'none', ) ); ?>" title="submit to Netvous" target="_blank">Netvouz</a> + <a href="http://reddit.com/submit?url=<?php echo $Item->get_permanent_url(); ?>&amp;title=<?php echo $Item->title( array( 'link_type' => 'none', ) ); ?>" title="Submit Reddit" target="_blank">Reddit</a> + <a href="http://www.simpy.com/simpy/LinkAdd.do?href=<?php echo $Item->get_permanent_url(); ?>&amp;title=<?php echo $Item->title( array( 'link_type' => 'none', ) ); ?>" title="Submit to Simpy" target="_blank">Simpy</a> + <a href="http://www.spurl.net/spurl.php?title=<?php echo $Item->title( array( 'link_type' => 'none', ) ); ?>&amp;url=<?php echo $Item->get_permanent_url(); ?>" title="submit to Spurl" target="_blank">Spurl</a> + <a href="http://technorati.com/faves?add=<?php echo $Item->get_permanent_url(); ?>" title="Submit to Technorati" target="_blank">Technorati</a> + <a href="http://www.wink.com/_/tag?url=<?php echo $Item->get_permanent_url(); ?>&amp;doctitle=<?php echo $Item->title( array( 'link_type' => 'none', ) ); ?>" title="Submit to Wink" target="_blank">Wink</a>
	<?php
		// ------------------------- "Sidebar" CONTAINER EMBEDDED HERE --------------------------
		// Display container contents:
		skin_container( NT_('Socialbar'), array(
				// The following (optional) params will be used as defaults for widgets included in this container:
				// This will enclose each widget in a block:
				'block_start' => '<!-- <div class="$wi_class$"> -->',
				'block_end' => '<!-- </div> -->',
				// This will enclose the title of each widget:
				'block_title_start' => '<strong><span>',
				'block_title_end' => '</span></strong>',
				// If a widget displays a list, this will enclose that list:
				'list_start' => '',
				'list_end' => '',
				// This will enclose each item in a list:
				'item_start' => '',
				'item_end' => '',
				// This will enclose sub-lists in a list:
				'group_start' => '',
				'group_end' => '',
				// This will enclose (foot)notes:
				'notes_start' => '<div class="notes">',
				'notes_end' => '</div> <!-- end of class="notes" -->',
			) );
		// ----------------------------- END OF "Sidebar" CONTAINER -----------------------------
	?>
	</p>
</div> <!-- end of class="socialbar" -->