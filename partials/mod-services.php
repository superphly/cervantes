<?php $module = get_module_by_slug("services"); ?>

<div id="module-services" class="module">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 text-center">
				<h2>Services</h2>
			</div>
			<div class="col-xs-12 col-md-4 col-md-offset-2">
				<?php the_field("left_col", $module->ID); ?>
			</div>
			<div class="col-xs-12 col-md-4">
				<?php the_field("right_col", $module->ID); ?>
			</div>
		</div>
	</div>
</div>