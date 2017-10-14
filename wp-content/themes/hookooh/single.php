<?php get_header(); //appel du template header.php  ?>
<div id="content" class="container">
    <div class="row">
	    <?php
	 //    $args = array(
	 //    	'post_type' => 'profil',
	 //    );
		// // The Query
		// $the_query = new WP_Query( $args );

		// echo '<pre>';
		// print_r($url);
		// echo '</pre>';
		// The Loop
		if ( have_posts("profil") ) {
		    while ( have_posts() ) {
		        the_post();
		        $term_genre = wp_get_post_terms($post->ID, 'genre', array("fields" => "all"));
		        $term_age = wp_get_post_terms($post->ID, 'age', array("fields" => "all"));
		     ?>
	

	    <article class="profil col-sm-12">
	    	<?php
	    	if(has_post_thumbnail()){
	    		echo '<div class="thumbnail">';
	    			the_post_thumbnail("hub_profil_thumbnail");
	    		echo '</div>';
	    	}
	    	?>
	    	<h2><?php the_title(); echo ', '.$term_age[0]->name.' ans' ?></h2>
	        <h5>Inscrit depuis le <?php the_time('j F, Y') ?></h5>
			   <h6><a href="<?= get_term_link($term_genre[0]->slug, 'genre')?>"><?= $term_genre[0]->name ?></a></h6>
	        <p><?php the_excerpt(); ?></p>
	    </article>
	            
	    <?php
	    }
	    }
	    else {
	    ?>
	    Nous n'avons pas trouvé d'article répondant à votre recherche
	    <?php
	    }
	    ?>
    </div>
</div> <!-- /content -->

<?php get_footer(); //appel du template footer.php ?>