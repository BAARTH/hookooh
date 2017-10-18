<?php get_header();
$term_genre = wp_get_post_terms($post->ID, 'genre', array("fields" => "all"));?>
<div id="content" class="container">
	<div class="row">
		<h1 class="col-sm-12 text-center main-title">
			<?= $term_genre[0]->name.'s';?>
		</h1>
	</div>
    <div class="row">
	    <?php
	    // boucle WordPress
	    if (have_posts()){
	        while (have_posts()){
	            the_post();
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
	    	<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title();echo ', '; the_field('age'); echo ' ans';?></a></h2>
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
	    <div class="pagination">
	    	<?php wp_pagenavi(); ?>
	    </div>
    </div>
</div> <!-- /content -->

<?php get_footer(); //appel du template footer.php ?>