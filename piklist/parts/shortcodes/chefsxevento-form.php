<?php
/*
Name: Chefs por Evento
Description: Obtener los chefs que participan de un evento específico
Shortcode: pullquote
Icon: dashicons-editor-quote
*/

  piklist('field', array(
    'type' => 'text'
    ,'field' => 'imgd_evento'
    ,'label' => __('Evento que particpan','imgd')
    ,'attributes' => array(
      'class' => 'large-text'
    )
  ));

