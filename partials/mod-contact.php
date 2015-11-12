<?php $module = get_module_by_slug("contact"); ?>

<div id="module-contact" class="module">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-6 col-md-offset-2">
				<?php the_field("left_col", $module->ID); ?>
			</div>
			<div class="col-xs-12 col-md-2 text-large">
				<?php the_field("right_col", $module->ID); ?>
			</div>
		</div>
	</div>
</div>