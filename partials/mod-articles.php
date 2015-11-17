<?php $module = get_module_by_slug("articles"); ?>

<div id="module-articles" class="module">
	<div class="container">
		<div class="row">

			<div class="col-xs-12 col-md-3 col-md-offset-2">
				<?php $image = get_field('image', $module->ID); ?>
					
				<?php if( !empty($image) ): ?>
					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-responsive img-circle" />
				<?php endif; ?>
			</div>
			<div class="col-xs-12 col-md-4 col-md-offset-1">
				<h2><?php the_field("header", $module->ID); ?></h2>
				<?php the_field("text", $module->ID); ?>
			</div>
		</div>
	</div>
</div>