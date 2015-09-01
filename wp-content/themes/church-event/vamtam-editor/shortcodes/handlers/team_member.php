<?php

class WPV_Team_Member {
	public function __construct() {
		add_shortcode('team_member', array(&$this, 'team_member'));
	}

	public function team_member($atts, $content = null, $code) {
		extract(shortcode_atts(array(
			'name' => '',
			'position' => '',
			'from' => '',
			'highlight' => '',
			'about' => '',
			'phone' => '',
			'email' => '',
			'picture' => '',
			'url' => '',
			'googleplus' => '',
			'facebook' => '',
			'twitter' => '',
			'linkedin' => '',
			'youtube' => '',
			'instagram' => '',
			'dribble'   => '',
			'vimeo'     => '',
		), $atts));

		ob_start();

		include(locate_template('templates/shortcodes/team_member.php'));

		return ob_get_clean();
	}
}

new WPV_Team_Member;
