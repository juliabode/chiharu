<?php

function add_custom_post_types() {
  /*
   * Create here your custom post types. You can both use the WordPress register_post_type()
   * function, or the Wordless new_post_type() helper.
   */

   new_post_type("news",        array('title', 'editor'));
   new_post_type("biography",   array('title', 'editor'));
   new_post_type("works",       array('title', 'editor'));
   new_post_type("press",       array('title', 'editor'));
   new_post_type("publication", array('title', 'editor'));
}

function add_custom_taxonomies() {
  /*
   * Create here your custom post types. You can both use the WordPress register_taxonomy()
   * function, or the Wordless new_taxonomy() helper.
   */

   new_taxonomy("year", array('news', 'works'));
}

add_action('init', 'add_custom_post_types');
add_action('init', 'add_custom_taxonomies');


