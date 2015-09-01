<?php
/**
 * 404 page template
 *
 * @package wpv
 * @subpackage church-event-child
 */

get_header(); ?>

<div class="clearfix">
	<div id="header-404">
		<div class="line-1"><?php _e('Silence is golden...', 'church-event') ?></div>
		<div class="line-2"><?php _e('Oooops!', 'church-event') ?></div>
		<div class="line-3"><?php _e('Page not found', 'church-event') ?></div>
		<div class="line-4"><?php printf(__('<a href="%s">&larr; Go to the home page</a> or just search...', 'church-event'), home_url()) ?></div>
		</div>
	<div class="page-404">
		<?php get_search_form(); ?>
	</div>
</div>
<div id="sitemap-404">
	<div class="header"><?php _e('Try one of the pages instead', 'church-event') ?></div>
	<div class="sitemap" ><?php get_template_part('/partials/sitemap'); ?>
	</div>
</div>



<?php get_footer(); ?>