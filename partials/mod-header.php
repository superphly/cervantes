<?php $module = get_module_by_slug("header"); ?>

<div id="module-hero" style="background-image: url('<?php echo $image; ?>');" >
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h1 class="text-center"><?php echo get_bloginfo('sitename'); ?></h1>
				<hr>
				<?php the_field("youtube", $module->ID); ?>
			</div>
		</div>
	</div>
</div>