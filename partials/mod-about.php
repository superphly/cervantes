<?php $module = get_module_by_slug("about"); ?>

<div id="module-about" class="module">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-6">
				<?php $image = get_field('image', $module->ID); ?>
					
				<?php if( !empty($image) ): ?>
					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-responsive" />
				<?php endif; ?>
			</div>
			<div class="col-xs-12 col-md-6">		
				<?php the_field("text", $module->ID); ?>
			</div>
		</div>
	</div>
</div>