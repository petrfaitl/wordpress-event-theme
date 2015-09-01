<?php


function child_styles() {
	wp_enqueue_style( 'my-child-theme-style', get_stylesheet_directory_uri() . '/style.css', array('front-all'), false, 'all' );
}
add_action('wp_enqueue_scripts', 'child_styles', 11);

// Runs the <title> element through our custom filter
//add_filter('tribe_events_title_tag', 'filter_events_title');
// If you are using certain versions of Yoast you might try deleting the above line and uncommenting the following one
//add_filter('wpseo_title', 'filter_events_title');

// Tribe events: Manually set title for each page
function filter_events_title ($title) {

	if ( tribe_is_month() && !is_tax() ) {  // Month View Page
		$title = 'Events - Month view page | Czech and Slovak Club Tauranga';
	}
	elseif ( tribe_is_month() && is_tax() ) { // Month View Category Page
		$title = 'Events - Month view category page | Czech and Slovak Club Tauranga';
	}
	elseif ( tribe_is_upcoming() && !is_tax() ) { // List View Page: Upcoming Events
		$title = 'Events - Upcoming events page | Czech and Slovak Club Tauranga';
	}
	elseif ( tribe_is_upcoming() && is_tax() ) { // List View Category Page: Upcoming Events
		$title = 'Events - Upcoming events page | Czech and Slovak Club Tauranga';
	}
	elseif ( tribe_is_past() && !is_tax() ) { // List View Page: Past Events
		$title = 'Events - Past events page | Czech and Slovak Club Tauranga';
	}
	elseif ( tribe_is_past() && is_tax() ) { // List View Category Page: Past Events
		$title = 'Events - Category: Past events page | Czech and Slovak Club Tauranga';
	}
	elseif ( tribe_is_week() && !is_tax() ) { // Week View Page
		$title = 'Events - Week view page | Czech and Slovak Club Tauranga';
	}
	elseif ( tribe_is_week() && is_tax() ) { // Week View Category Page
		$title = 'Events - Week view category page | Czech and Slovak Club Tauranga';
	}
	elseif ( tribe_is_day() && !is_tax() ) { // Day View Page
		$title = 'Events - Day view page | Czech and Slovak Club Tauranga';
	}
	elseif ( tribe_is_day() && is_tax() ) { // Day View Category Page
		$title = 'Events - Day view category page | Czech and Slovak Club Tauranga';
	}
	elseif ( tribe_is_map() && !is_tax() ) { // Map View Page
		$title = 'Events - Map view page | Czech and Slovak Club Tauranga';
	}
	elseif ( tribe_is_map() && is_tax() ) { // Map View Category Page
		$title = 'Events - Map view category page | Czech and Slovak Club Tauranga';
	}
	elseif ( tribe_is_photo() && !is_tax() ) { // Photo View Page
		$title = 'Events - Photo view page | Czech and Slovak Club Tauranga';
	}
	elseif ( tribe_is_photo() && is_tax() ) { // Photo View Category Page
		$title = 'Events - Photo view category page | Czech and Slovak Club Tauranga';
	}

	return $title;
}


 