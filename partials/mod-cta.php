<?php $module = get_module_by_slug("cta"); ?>

<div id="module-hero" style="background-image: url('<?php echo $image; ?>');" >
	<div class="container">
		<div class="row">
			<div class="col-xs-12 text-center">
				<h1><?php the_field("header", $module->ID); ?></h1>
				<hr>
				<?php the_field("text", $module->ID); ?>
			</div>
		</div>
	</div>
</div>