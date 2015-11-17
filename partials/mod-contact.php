<?php $module = get_module_by_slug("contact"); ?>

<div id="module-contact" class="module">
	<div class="container">
		<div class="row boxy">
			<div class="col-xs-12 text-center">
				<h2>Contact</h2>
			</div>
			<div class="col-xs-12 col-md-4 col-md-offset-3">
				<?php the_field("left_col", $module->ID); ?>
			</div>
			<div class="col-xs-12 col-md-2">
				<?php the_field("right_col", $module->ID); ?>
			</div>
		</div>
	</div>
</div>