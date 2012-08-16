<?php

/*
 * Place here all your WordPress add_filter() and add_action() calls.
 */

function change_default_title( $title ){
     $screen = get_current_screen();

     if  ( 'exhibitions' == $screen->post_type ) {
          $title = 'Enter Exhibition Date Here';
     }

     return $title;
}

add_filter( 'enter_title_here', 'change_default_title' );