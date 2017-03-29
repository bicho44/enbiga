<?php
/**
* Template part para Mostrar los Programas
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package IMGD porcitions
*/

?>


    <?php
    // Must be inside a loop.
    if (has_post_thumbnail()) {?>

      <a href="<?php the_permalink(); ?> ">
        <?php
          /* @todo Cambiar para que la imagen sea responsive */
          the_post_thumbnail('thumb-archive');
        ?>
      </a>
      <?php }
      //echo var_dump($notitle);

      ?>
      <header class="destacados-caption caption">
        <?php
        //get_the_terms(get_the_ID());
        the_title(sprintf('<h3><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h3>');
        ?>
        Cargo
      </header><!-- .entry-header -->