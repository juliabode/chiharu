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

/*
 * The Theme setting page
 */

function chiharu_add_menu() {
  add_menu_page('Extra Theme Options', 'Extra Options', 'manage_options', 'extra_theme_options', 'chiharu_settings_page_fn');
}

function chiharu_settings_page_fn() { ?>

  <div class="wrap">
    <h2>Extra Theme Options</h2>

    <form action="options.php" method="post">

      <?php settings_fields( 'chiharu-theme-group' ); ?>

      <table class="form-table">
          <tr valign="top">
          <th scope="row">Homepage Image Url</th>
          <td><input style="width:600px;" type="text" name="homepage_image_url" value="<?php echo get_option('homepage_image_url'); ?>" /></td>
          </tr>
      </table>

      <p class="submit">
        <input name="Submit" type="submit" class="button-primary" value='Save Changes' />
      </p>

    </form>
  </div>

<?php }

function chiharu_register_settings() {
  register_setting('chiharu-theme-group', 'homepage_image_url' );
}

add_action( 'admin_menu', 'chiharu_add_menu' );
add_action( 'admin_init', 'chiharu_register_settings' );