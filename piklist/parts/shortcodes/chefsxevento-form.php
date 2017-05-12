<?php
/*
name: Chefs por Evento
description: Obtener los chefs que participan de un evento específico
shortcode: chefsxevento
icon: dashicons-id-alt
preview: true
*/

piklist('field', array(
  'type' => 'select'
  ,'scope' => 'taxonomy'
  ,'field' => 'imgd_chef_evento'
  ,'label' => __('Evento','imgd')
  ,'description' => __('Selecciones el evento en el que participa','imgd')
  ,'choices' => array(
      '' => 'Seleccione un Evento'
    )
    + piklist(get_terms(array(
      'taxonomy' => 'imgd_servicio_categoria'
      ,'hide_empty' => true
    ))
    ,array(
      'term_id'
      ,'name'
    )
  )
));

piklist('field', array(
  'type' => 'text'
  ,'field' => 'imgd_cant_mostrar'
  ,'label' => __('Cantidad de Chefs a mostrar','imgd')
  ,'attributes' => array(
    'class' => 'small-text'
  )
));

piklist('field', array(
  'type' => 'select'
  ,'field' => 'imgd_image_size'
  ,'label' => __('Tamaño imagen del Archivo', 'imgd')
  ,'choices' =>  get_intermediate_image_names()
  ,'value' => 'thumbnail'
  )
);