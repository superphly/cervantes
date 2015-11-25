<?php $module = get_module_by_slug("splash"); ?>

<div id="module-splash" class="module">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 text-center">
				<h1><?php echo get_bloginfo('sitename'); ?></h1>
				<h3><?php bloginfo('description');?></h3>
			</div>
			<div class="col-xs-12 col-md-8 col-md-push-2 text-center">
				<div class="vid-container">
					<?php the_field("youtube", $module->ID); ?>
				</div>
			</div>
		</div>
	</div>
</div>