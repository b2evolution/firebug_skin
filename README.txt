/* ---------------------------------------------------------------------------------------------- */
/* I. Search Field (Top-Right)                                                         */
/* ---------------------------------------------------------------------------------------------- */

The Search Field in the top-right corner of the theme is hardcoded.  If you want to change it to your favorite search engine, for example Google Custom Search Engine, just follow these steps:

Step 1.1: Open the file /firebug/_body_header.inc.php
Step 1.2: Look for:

<div id="topsearch">
	<form action="<?php $Blog->gen_blogurl() ?>" method="get" id="searchform" class="search">
		<input type="text" value="" name="s" id="s" class="swap_value" />
		<input type="image" src="rsc/img/go.gif" id="go" alt="Search" title="Search" />
	</form>
</div> <!-- end of id="topsearch" -->

Step 1.3: Change to:

<div id="topsearch">
	<form action="http://www.google.com/cse" id="cse-search-box" target="_blank">
		<input name="cx" type="hidden" value="YOUR-GOOGLE-CSE-PARTNER-NUMBER"/>
		<input name="ie" type="hidden" value="UTF-8"/>
		<input class="swap_value" id="s" name="q" type="text"/>
		<input type="image" src="rsc/img/go.gif" id="go" name="sa" alt="Search" title="Search" />
	</form>
</div> <!-- end of id="topsearch" -->

Step 1.4: Save and upload the file


/* ---------------------------------------------------------------------------------------------- */
/* II. RSS Link                                                                              */
/* ---------------------------------------------------------------------------------------------- */

The original theme have a hard-coded link to an RSS Feed.  Staying true to the original design, here's how to add it via b2evolution's Widget-Containers.

Step 2.1: Create a 'Free HTML' widget under the 'Menu' container
Step 2.2: In the 'block title' field put 'Feed'
Step 2.3: In the 'name' field put 'Feed'
Step 2.4: In the 'block content' field put the following:

<li class="feedlink"><a href="#YOUR-FEED-URL-HERE">{FEED}</a></li>

Step 2.5: Change '#YOUR-FEED-URL-HERE' to the URL of your Feed.
Step 2.6: Click the 'Update' button


/* ---------------------------------------------------------------------------------------------- */
/* III. 125x125 Advertisements                                                       */
/* ---------------------------------------------------------------------------------------------- */

Step 3.1: Create a 'Free HTML' widget under the 'Sidebar-w-1' container
Step 3.2: In the 'block title' field put 'Advertisements'
Step 3.3: In the 'name' field put 'Advertisements'
Step 3.4: In the 'block content' field put the following:

<span class="ads"><a href="#YOUR-URL-HERE" class="ads"><img src="rsc/img/ad.gif" border="0" alt="Ad" /></a></span><span class="ads"><a href="#YOUR-URL-HERE" class="ads"><img src="rsc/img/ad.gif" border="0" alt="Ad" /></a></span><span class="ads"><a href="#YOUR-URL-HERE" class="ads"><img src="rsc/img/ad.gif" border="0" alt="Ad" /></a></span>

Step 3.5: Change '#YOUR-URL-HERE' to the URL of your ad.
Step 3.6: Change 'rsc/img/ad.gif' to where your AD Image is located.

* If you want to add a 2nd row of 125x125 ADs, just repeat Steps 1.4 to 1.6.

Step 3.7: Click the 'Update' button


/* ---------------------------------------------------------------------------------------------- */
/* IV. Socialbar (Container)                                                            */
/* ---------------------------------------------------------------------------------------------- */

The Socialbar of Firebug is hardcoded as it requires PHP calls.  If you do not want to use the default of the theme (which is part of the original design), follow these steps:

Step 4.1: Open the file /firebug/_socialbar.inc.php
Step 4.2: Delete the following:

<strong><span>Submit Article :- </span></strong>
<a href="http://blinklist.com/index.php?Action=Blink/addblink.php&amp;Description=<?php echo $Item->title( array( 'link_type' => 'none', ) ); ?>&amp;Url=<?php echo $Item->get_permanent_url(); ?>" title="BlinkList Submit" target="_blank"> BlinkList</a> + <a href="http://blogmarks.net/my/new.php?mini=1&amp;title=<?php echo $Item->title( array( 'link_type' => 'none', ) ); ?>&amp;url=<?php echo $Item->get_permanent_url(); ?>" title="Blogmarks" target="_blank">Blogmarks</a> + <a href="http://www.digg.com/submit?phase=2&amp;url=<?php echo $Item->get_permanent_url(); ?>&amp;title=<?php echo $Item->title( array( 'link_type' => 'none', ) ); ?>" title="Submit Post to Digg" target="_blank">Digg</a> + <a href="http://del.icio.us/post?url=<?php echo $Item->get_permanent_url(); ?>&amp;title=<?php echo $Item->title( array( 'link_type' => 'none', ) ); ?>" title="Submit to Del.icio.us" target="_blank">Del.icio.us</a> + <a href="http://www.feedmarker.com/admin.php?do=bookmarklet_mark&amp;url=<?php echo $Item->get_permanent_url(); ?>&amp;title=<?php echo $Item->title( array( 'link_type' => 'none', ) ); ?>;" title="Submit to Feedmarker" target="_blank">Feedmarker</a> + <a href="http://furl.net/storeIt.jsp?t=<?php echo $Item->title( array( 'link_type' => 'none', ) ); ?>&amp;u=<?php echo $Item->get_permanent_url(); ?>" title="Submit to Furl" target="_blank">Furl</a> + <a href="http://www.google.com/bookmarks/mark?op=add&amp;bkmk=<?php echo $Item->get_permanent_url(); ?>&amp;title=<?php echo $Item->title( array( 'link_type' => 'none', ) ); ?>" title="Submit to Google Bookmarks" target="_blank">Google Bookmarks</a> + <a href="http://www.netvouz.com/action/submitBookmark?url=<?php echo $Item->get_permanent_url(); ?>&amp;title=<?php echo $Item->title( array( 'link_type' => 'none', ) ); ?>" title="submit to Netvous" target="_blank">Netvouz</a> + <a href="http://reddit.com/submit?url=<?php echo $Item->get_permanent_url(); ?>&amp;title=<?php echo $Item->title( array( 'link_type' => 'none', ) ); ?>" title="Submit Reddit" target="_blank">Reddit</a> + <a href="http://www.simpy.com/simpy/LinkAdd.do?href=<?php echo $Item->get_permanent_url(); ?>&amp;title=<?php echo $Item->title( array( 'link_type' => 'none', ) ); ?>" title="Submit to Simpy" target="_blank">Simpy</a> + <a href="http://www.spurl.net/spurl.php?title=<?php echo $Item->title( array( 'link_type' => 'none', ) ); ?>&amp;url=<?php echo $Item->get_permanent_url(); ?>" title="submit to Spurl" target="_blank">Spurl</a> + <a href="http://technorati.com/faves?add=<?php echo $Item->get_permanent_url(); ?>" title="Submit to Technorati" target="_blank">Technorati</a> + <a href="http://www.wink.com/_/tag?url=<?php echo $Item->get_permanent_url(); ?>&amp;doctitle=<?php echo $Item->title( array( 'link_type' => 'none', ) ); ?>" title="Submit to Wink" target="_blank">Wink</a>

Step 4.3: Save and upload the file

You can now use the Socialbar container and put your own content, for example, your XML Feed (Atom 1.0 / RSS 2.0).

