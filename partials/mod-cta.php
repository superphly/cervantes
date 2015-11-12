<?php $module = get_module_by_slug("cta"); ?>

<div id="module-cta" class="module">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-6 col-md-offset-3 text-center">
				<h1><?php the_field("header", $module->ID); ?></h1>
			</div>
			<div class="col-xs-12 col-md-4 col-md-offset-4">
				<?php the_field("text", $module->ID); ?>
			</div>
		</div>
	</div>
</div>