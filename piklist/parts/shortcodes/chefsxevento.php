<?php
/*
shortcode: chefsxevento
*/
?>

<?php
	// Define the query
	$args = array(
		'post_type' => 'imgd_chef'
        ,'tax_query' => array(
            array(
                'taxonomy' => 'imgd_servicio_categoria',
                'field' => 'slug',
                'terms'    => $imgd_chef_evento,
            ),
	    )
        ,'posts_per_page' => -1
        ,'orderby'=>'title'
        ,'order' => 'ASC'
	);
	$query = new WP_Query( $args );
?>
<?php
if ( $query->have_posts() ) : 
    echo '<h4> Cantidad Chefs: '. $query->post_count.'</h4>';
    echo '<h4> Chefs Encontrados: '. $query->found_posts.'</h4>';
?>
    
    <div class="row">
        <?php
            /* Start the Loop */
            while ( $query->have_posts() ) : $query->the_post();

                /*
                * Include the Post-Format-specific template for the content.
                * If you want to override this in a child theme, then include a file
                * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                */

               include( locate_template( 'template-parts/content/archive-imgd_chef.php' ) );
                //get_template_part( 'template-parts/content/archive', 'imgd_chef');

            endwhile;


        ?>
    </div> <!-- row --> 
        <?php
        if (function_exists("wp_bs_pagination"))
				{
					//wp_bs_pagination($the_query->max_num_pages);
					wp_bs_pagination();
				} else {
					the_posts_navigation();
				}
        ?>

<?php
endif;
// use reset postdata to restore orginal query
wp_reset_postdata();
?>