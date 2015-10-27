<article class="acomodacoes">
	<div class="image">
		<a href="<?php the_permalink(); ?>">
			<?php the_post_thumbnail('home-thumb', array(
				'class' => "img-responsive effect-gray",
			)); ?>	
		</a>							
	</div>
	<div class="content">
		<h4><?php the_title( ); ?></h4>	
		<p><?php the_excerpt(); ?></p>
		<a href="<?php the_permalink(); ?>">saiba mais</a>						
	</div>		
</article>