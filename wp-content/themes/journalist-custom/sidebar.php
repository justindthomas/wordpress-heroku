<div id="sidebar">

<h3>Search</h3>
<p class="searchinfo">search site archives</p>
<div id="search">
<div id="search_area">
    <form id="searchform" method="get" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    <div>
        <input class="searchfield" type="text" name="s" id="s" value="" title="Enter keyword to search" />
        <input class="submit" type="submit" value="search" title="Click to search archives" />
    </div>
    </form>
</div>
</div>

<script type="text/javascript"><!--
google_ad_client = "ca-pub-9531634117427136";
/* Sidebar Wide */
google_ad_slot = "6409385367";
google_ad_width = 160;
google_ad_height = 600;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>

<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>

<div id="pages">
<h3>Pages</h3>
<ul>
    <?php wp_list_pages('title_li='); ?>
</ul>
</div>

<h3>Archives</h3>
<ul>
<?php wp_get_archives('type=monthly'); ?>
</ul>

<h3>Categories</h3>
<ul>
    <?php wp_list_cats(); ?>
</ul>	

<?php endif ?>

<?php if (function_exists('wp_theme_switcher')) { ?>
<h3>Themes</h3>
<div class="themes">
<?php wp_theme_switcher(); ?>
</div>
<?php } ?>

</div>
