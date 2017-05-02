<?php
/*
name: Chefs por Evento
description: Obtener los chefs que participan de un evento específico
shortcode: chefsxevento
icon: dashicons-id-alt
preview: true
*/

  piklist('field', array(
    'type' => 'text'
    ,'field' => 'imgd_evento'
    ,'label' => __('Evento que particpan','imgd')
    ,'attributes' => array(
      'class' => 'large-text'
    )
  ));

