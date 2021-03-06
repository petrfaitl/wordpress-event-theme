<?php
/**
 * Week View Nav
 * This file loads the week view navigation.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/week/nav.php
 *
 * @package TribeEventsCalendar
 * @since  3.0
 * @author Modern Tribe Inc.
 *
 */

if ( !defined('ABSPATH') ) { die('-1'); } ?>

<h3 class="tribe-events-visuallyhidden"><?php _e( 'Week Navigation', 'tribe-events-calendar-pro' ); ?></h3>
<div class="wp-pagenavi">
	<div class="tribe-events-sub-nav">
		<ul>
			<li class="tribe-events-nav-previous">
				<?php echo tribe_previous_week_link() ?>
			</li><!-- .tribe-events-nav-previous -->
			<li class="tribe-events-nav-next">
				<?php echo tribe_next_week_link() ?>
			</li><!-- .tribe-events-nav-next -->
		</ul><!-- .tribe-events-sub-nav -->
	</div>
</div>