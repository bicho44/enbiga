<?php
/*
shortcode: chefsxevento
*/
?>

<?php
	// Define the query
	$args = array(
		'post_type' => 'imgd_chef'
	);
	$query = new WP_Query( $args );
?>
<?php
if ( $query->have_posts() ) : ?>

    <header class="page-header">
        <h1>Chefs Invitados</h1>
        <?php
            //the_archive_title( '<h1 class="page-title">', '</h1>' );
            //the_archive_description( '<div class="archive-description">', '</div>' );
        ?>
    </header><!-- .page-header -->
    
    <div class="row">
        <?php
            /* Start the Loop */
            while ( $query->have_posts() ) : $query->the_post();

                /*
                * Include the Post-Format-specific template for the content.
                * If you want to override this in a child theme, then include a file
                * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                */
                get_template_part( 'template-parts/content/archive', 'imgd_chef');

            endwhile;
        ?>
    </div> <!-- row --> 


<?php
endif;
// use reset postdata to restore orginal query
wp_reset_postdata();
?>