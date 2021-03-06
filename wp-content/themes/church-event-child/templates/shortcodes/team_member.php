<?php
	$content   = trim($content);
	$icons_map = array(
		'googleplus' => 'googleplus',
		'linkedin'   => 'linkedin',
		'facebook'   => 'facebook',
		'twitter'    => 'twitter',
		'youtube'    => 'youtube',
		'pinterest'  => 'pinterest',
		'lastfm'     => 'lastfm',
		'instagram'  => 'instagram',
		'dribble'    => 'dribbble2',
		'vimeo'      => 'vimeo',
	);
?>
<div class="team-member<?php echo (!empty($content) ? ' has-content' : '')?>">
	<?php if(!empty($picture)): ?>
	<div class="thumbnail">
		<?php if(!empty($url)):?>
			<a target="_blank" href="<?php echo $url ?>" title="<?php echo $name?>">
		<?php endif ?>
			<?php wpv_lazy_load($picture, $name)?>
		<?php if(!empty($url)):?>
			</a>
		<?php endif ?>
	</div>
	<?php endif ?>
	<div class="team-member-info">
		<h4>
			<?php if(!empty($url)):?>
				<a target="_blank" href="<?php echo $url ?>" title="<?php echo $name?>">
			<?php endif ?>
				<?php echo $name?>
			<?php if(!empty($url)):?>
				</a>
			<?php endif ?>
		</h4>
		<?php if(!empty($position)): ?>
			<h6 class="team-member-position"><?php echo $position ?></h6>
		<?php endif ?>
		<?php if(!empty($from)): ?>
			<div class="team-member-from"><?php echo $from?></div>
		<?php endif ?>
		<?php if(!empty($email)):?>
			<div><a target="_blank" href="mailto:<?php echo $email ?>" title="<?php printf(__('email %s', 'church-event'), $name)?>"><?php echo $email?></a></div>
		<?php endif ?>
		<?php if(!empty($phone)):?>
			<div class="team-member-phone"><?php echo $phone?></div>
		<?php endif ?>
		<div class="share-icons clearfix">
			<?php
				$icons = array_keys( $icons_map );
				foreach($icons as $icon): if(!empty($$icon)):  // that's not good enough, should be changed
					$icon_name = isset( $icons_map[$icon] ) ? $icons_map[$icon] : $icon;
			?>
					<a target="_blank" href="<?php echo $$icon?>" title=""><?php echo do_shortcode('[icon name="'.$icon_name.'"]'); ?></a>
			<?php endif; endforeach; ?>
		</div>
		<?php if(!empty($highlights)): ?>
			<div class="team-member-highlights team-member-title">Highlights:<br /><em><?php echo $highlights?></em></div>
		<?php endif ?>
		<?php if(!empty($about)): ?>
			<div class="team-member-about team-member-title">About:<br /><em><?php echo $about?></em></div>
		<?php endif ?>
	</div>
</div>
