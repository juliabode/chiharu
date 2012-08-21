<?php

function add_custom_post_types() {
  /*
   * Create here your custom post types. You can both use the WordPress register_post_type()
   * function, or the Wordless new_post_type() helper.
   */

   new_post_type("exhibitions", array('title', 'editor'));
   new_post_type("biography",   array('title', 'editor'));
   new_post_type("works",       array('title', 'editor'));
   new_post_type("press",       array('title', 'editor'));
   new_post_type("publication", array('title', 'editor', 'thumbnail'));
}

function add_custom_taxonomies() {
  /*
   * Create here your custom post types. You can both use the WordPress register_taxonomy()
   * function, or the Wordless new_taxonomy() helper.
   */

   new_taxonomy("year_exhibitions", array('exhibitions'));
   new_taxonomy("year_works", array('works'));
   new_taxonomy("biography_steps", array('biography'));
   new_taxonomy("press_type", array('press'));
   new_taxonomy("year_publications", array('publication'));
}

add_action('init', 'add_custom_post_types');
add_action('init', 'add_custom_taxonomies');


