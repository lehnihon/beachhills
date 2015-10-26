<article class="acomodacoes">
	<div class="image">
		<?php the_post_thumbnail('home-thumb', array(
			'class' => "img-responsive e-cinza",
		)); ?>								
	</div>
	<div class="content">
		<h4><?php the_title( ); ?></h4>	
		<p><?php the_excerpt(); ?></p>						
	</div>		
</article>