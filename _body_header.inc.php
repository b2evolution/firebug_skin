<?php
/**
 * This is the BODY header include template.
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

<div id="wrapper">

<div id="header">
	<div id="logo">
		<?php
			// ------------------------- "Header" CONTAINER EMBEDDED HERE --------------------------
			// Display container and contents:
			skin_container( NT_('Header'), array(
					// The following params will be used as defaults for widgets included in this container:
					'block_start' => '<span class="$wi_class$">',
					'block_end' => '</span>',
					'block_title_start' => '<h1>',
					'block_title_end' => '</h1>',
				) );
			// ----------------------------- END OF "Header" CONTAINER -----------------------------
		?>

	</div> <!-- end of id="logo" -->

	<div class="floatright">
		<div id="pagetop">
			<?php if ( true /* change to false to hide the blog list */ ) { ?>
				<div class="blog_list">
				<?php
				  // START OF BLOG LIST
				  skin_widget( array(
						'widget' => 'colls_list_public',
						'block_start' => '',
						'block_end' => '',
						'block_display_title' => false,
						'list_start' => '<ul>',
						'list_end' => '</ul>',
						'item_start' => '<li>',
						'item_end' => '</li>',
						'item_selected_start' => '<li class="selected">',
						'item_selected_end' => '</li>',
					  ) );
				?>
				</div>
			<?php } ?>

		</div> <!-- end of id="pagetop" -->

		<div id="topsearch">
	  <?php 
	  skin_widget( array(
		// CODE for the widget:
		'widget' => 'coll_search_form',
		// Optional display params
		'block_start' => '',
		'block_end' => '',
		'block_display_title' => false,
		'disp_search_options' => 0,
		'search_class' => 'extended_search_form',
		'use_search_disp' => 0,
	) );
	?>
		</div> <!-- end of id="topsearch" -->
	</div> <!-- end of class="floatright" -->
	<div class="clear"></div>

</div> <!-- end of id="header" -->

<div id="nav">
	<ul>
		<?php
			// ------------------------- "Menu" CONTAINER EMBEDDED HERE --------------------------
			// Display container and contents:
			skin_container( NT_('Menu'), array(
					// The following params will be used as defaults for widgets included in this container:
					'block_start' => '',
					'block_end' => '',
					'block_display_title' => false,
					'list_start' => '',
					'list_end' => '',
					'item_start' => '<li>',
					'item_end' => '</li>',
				) );
			// ----------------------------- END OF "Menu" CONTAINER -----------------------------
		?>

		<li class="date"><script src="rsc/js/date.js"></script></li>
	</ul>
</div> <!-- end of id="nav" -->