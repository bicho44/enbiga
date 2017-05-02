<?php
/*
name: Chefs por Evento
description: Obtener los chefs que participan de un evento específico
shortcode: chefsxevento
icon: dashicons-id-alt
preview: true
*/

$choices = piklist(
      get_terms('imgd_servicio_categoria', array(
        'hide_empty' => false
      ))
      ,array(
        'term_id'
        ,'name'
      ));
$choices[-1] = 'All Eventos';
ksort($choices);

piklist('field', array(
    'type' => 'select'
    ,'field' => 'imgd_servicio_categoria'
    ,'label' => 'Evento'
    ,'choices' => $choices
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