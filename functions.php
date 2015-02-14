  <?php
  function mytheme_enqueue_scripts() {
    // register AngularJS
    wp_register_script('angular-core', 'https://ajax.googleapis.com/ajax/libs/angularjs/1.2.14/angular.js', array(), null, false);

    //register bootstrap, jquery, angular-dependencies
    wp_register_script('jquery-min', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js', array(), null, false);
    wp_register_script('bootstrap-min', 'http://getbootstrap.com/dist/js/bootstrap.min.js', array(), null, false);
    wp_register_script('angular-sanitize', 'http://ajax.googleapis.com/ajax/libs/angularjs/1.2.14/angular-sanitize.js', array(), null, false);
    wp_register_script('angular-route', 'http://ajax.googleapis.com/ajax/libs/angularjs/1.2.14/angular-route.js', array(), null, false);

    // register our app.js, which has a dependency on angular-core
    wp_register_script('angular-app', get_bloginfo('template_directory').'/js/app.js', array('angular-core'), null, false);
    wp_register_script('angular-controllers', get_bloginfo('template_directory').'/js/controller.js', array(), null, false);
    wp_register_script('angular-directives', get_bloginfo('template_directory').'/js/directives.js', array(), null, false);
    wp_register_script('angular-routes', get_bloginfo('template_directory').'/js/routes.js', array(), null, false);

    // enqueue all scripts
    wp_enqueue_script('angular-core');
    wp_enqueue_script('jquery-min');
    wp_enqueue_script('bootstrap-min');
    wp_enqueue_script('angular-sanitize');
    wp_enqueue_script('angular-route');
    wp_enqueue_script('angular-app');
    wp_enqueue_script('angular-controllers');
    wp_enqueue_script('angular-directives');
    wp_enqueue_script('angular-routes');

    // enqueue all CSS
    wp_enqueue_style( 'mytheme-style', get_stylesheet_uri() );

    // we need to create a JavaScript variable to store our API endpoint...
    wp_localize_script( 'angular-core', 'AppAPI', array( 'url' => get_bloginfo('wpurl').'/api/') ); // this is the API address of the JSON API plugin
    // ... and useful information such as the theme directory and website url
    wp_localize_script( 'angular-core', 'BlogInfo', array( 'url' => get_bloginfo('template_directory').'/', 'site' => get_bloginfo('wpurl')) );
  }
  add_action('wp_enqueue_scripts', 'mytheme_enqueue_scripts');

  function mytheme_widgets_init() {
    register_sidebar( array(
      'name' => __( 'Main Sidebar', 'AngularWordpress-Theme' ),
      'id' => 'sidebar-1',
      'description' => __( 'Appears on posts and pages except the optional Front Page template, which has its own widgets', 'AngularWordpress-Theme' ),
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget' => '</aside>',
      'before_title' => '<h3 class="widget-title">',
      'after_title' => '</h3>',
      ) );

    }
    add_action( 'widgets_init', 'mytheme_widgets_init' );

    ?>
