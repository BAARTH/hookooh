<?php get_header(); //appel du template header.php  ?>
<div id="content" class="container">
	<div class="row">
		<h1 class="col-sm-12 text-center main-title">Profils</h1>
	</div>
    <div class="row">
	    <?php

	    $args = array(
	    	'post_type' => 'profil',
	    	'post_per_page' => '18',
	    	'orderby' => 'date',
	    	'order' => 'DESC',
	    );
		// The Query
		$the_query = new WP_Query( $args );

		// The Loop
		if ( $the_query->have_posts() ) {
		    while ( $the_query->have_posts() ) {
		        $the_query->the_post();
		        $term_genre = wp_get_post_terms($post->ID, 'genre', array("fields" => "all"));
		        $term_age = wp_get_post_terms($post->ID, 'age', array("fields" => "all"));
		     ?>
	

	    <article class="profil col-sm-12 col-md-4">
	    	<?php
	    	if(has_post_thumbnail()){
	    		echo '<div class="thumbnail">';
	    			the_post_thumbnail("hub_profil_thumbnail");
	    		echo '</div>';
	    	}
	    	?>
	    	<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); echo ', '.$term_age[0]->name.' ans' ?></a></h2>
	        <h5>Inscrit depuis le <?php the_time('j F, Y') ?></h5>
			   <h6><a href="<?= get_term_link($term_genre[0]->slug, 'genre')?>"><?= $term_genre[0]->name ?></a></h6>
	        <p><?php the_excerpt(); ?></p>
	    </article>
	            
		<?php 
			}
		}
		    /* Restore original Post Data */
		    wp_reset_postdata();
		?>
	    <div class="pagination">
	    	<?php wp_pagenavi(array('query' => $the_query)); ?>
	    </div>
    </div>
</div> <!-- /content -->

<?php get_footer(); //appel du template footer.php ?>