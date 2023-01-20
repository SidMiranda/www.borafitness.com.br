<div id="contentCards">
	<?php

		$args = array(
			'post_type' => 'post',
			'posts_per_page' => 6,
			'post_status' => 'publish',
			'orderby' => 'date',
			'order' => 'DESC'
		);

		$query = new WP_Query($args);
		if($query->have_posts()) {
				while($query->have_posts()){
						$query->the_post();
						$titulo = get_the_title();
						$link = get_the_permalink();
						$categoria = get_the_category();
						$imgDestaque = get_the_post_thumbnail_url();
				?> 
						<div id='cards'>
								<a href='<?= $link ?>'>
										<img id='imgcard' src='<?= $imgDestaque ?>'>
								</a>
								<div id='texts'>
										<span id='category' style="background-color:<?= $headerColor; ?>; color:<?= $menuColor; ?>"><?= $categoria[0]->name ?></span>
										<a href='<?= $link ?>'>
												<h3 id='titleCard'><?= $titulo ?></h3>
										</a>
								</div>

								<a href='<?= $link ?>' id='leiaMore'>Leia Mais</a>
						</div>

				<?php 
				}
			}   
	?>
</div>