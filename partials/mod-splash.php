<?php $module = get_module_by_slug("splash"); ?>

<div id="module-splash" style="background-image: url('<?php echo $image; ?>');" >
	<div class="container">
		<div class="row">
			<div class="col-xs-12 text-center">
				<h1><?php echo get_bloginfo('sitename'); ?></h1>
				<hr>
				<?php the_field("youtube", $module->ID); ?>
			</div>
		</div>
	</div>
</div>