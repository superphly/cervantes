<?php $module = get_module_by_slug("contact"); ?>

<div id="module-contact" class="module">
	<div class="container">
		<div class="row boxy">
			<div class="col-xs-12 text-center">
				<h1>Contact</h1>
			</div>
			<div class="col-xs-12 col-md-4 col-md-offset-2">
				<?php the_field("left_col", $module->ID); ?>
			</div>
			<div class="col-xs-12 col-md-3 text-right col-md-offset-1 social-links">
				<?php the_field("right_col", $module->ID); ?>
			</div>
		</div>
	</div>
</div>