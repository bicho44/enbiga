<?php
/**
* Template part para Mostrar los Programas
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package IMGD porcitions
*/

?>

<div class="col-sm-6 col-md-4">
  <div class="thumbnail">
    <?php
    // Must be inside a loop.
    if (has_post_thumbnail()) {?>

      <a href="<?php the_permalink(); ?> ">
        <?php
          $attr = array(
            'class' => "img-responsive img-circle"
          );
          the_post_thumbnail($imgd_image_size, $attr);
        ?>
      </a>
      <?php $terms = wp_get_post_terms( get_the_ID(),'imgd_servicio_ciudad'); ?>
      <?php //$args = array('number' => '1',);
            //var_dump ($terms);
            echo '<strong>'. $terms[0]['name'].'</strong>';
            // foreach( $terms as $term ){
            //   echo __('<strong>País</strong>: ','imgd'). $term->name ;
            // } 
      ?>
      <?php }
      //echo var_dump($notitle);

      ?>
      <header class="destacados-caption caption">
        <?php
        
        the_title(sprintf('<h3><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h3>');
        
        get_the_terms(get_the_ID());
        ?>
      </header><!-- .entry-header -->

    </div><!-- Thumbnail -->
</div><!-- Col -->
