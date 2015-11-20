<?php
/* Required Files
===============================================================================*/
include( get_template_directory() .'/includes/constant-variables.php' );

/* Content Width
===============================================================================*/
if ( ! isset( $content_width ) ) {
    $content_width = 1000;
}

/* Theme Support and Registers
===============================================================================*/
function theme_support() {
    /**
     * Automatic Feed Support
     */
    add_theme_support( 'automatic-feed-links' );
    /**
     * Title Tage Support
     */    
    add_theme_support( 'title-tag' );
    /**
     * Post Thumbnails
     */
    add_theme_support( 'post-thumbnails' );

    add_image_size( 'logo', 294, 120 );
    add_image_size( 'logo@2', 588, 240 );

    add_image_size( 'slide-large', 1200, 565, array( 'center', 'top') );
    add_image_size( 'slide-large@2', 2400, 1130, array( 'center', 'top') );

    add_image_size( 'slide-med', 768, 362, array( 'center', 'top') );
    add_image_size( 'slide-med@2', 1536, 724, array( 'center', 'top') );

    add_image_size( 'slide-small', 480, 226, array( 'center', 'top') );
    add_image_size( 'slide-small@2', 960, 452, array( 'center', 'top') );

    add_image_size( 'case_study', 380, 186, array( 'center', 'top') );
    add_image_size( 'case_study@2', 760, 372, array( 'center', 'top') );

    add_image_size( 'post-excerpt', 783, 186, array( 'center', 'top') );
    add_image_size( 'post-excerpt@2', 1566, 372, array( 'center', 'top') );

    add_image_size( 'page-large', 1200, 734, array( 'center', 'top') );
    add_image_size( 'page-large@2', 2400, 744, array( 'center', 'top') );

    add_image_size( 'page-med', 768, 470, array( 'center', 'top') );
    add_image_size( 'page-med@2', 1536, 940, array( 'center', 'top') );

    add_image_size( 'page-small', 480, 294, array( 'center', 'top') );
    add_image_size( 'page-small@2', 960, 588, array( 'center', 'top') );

    add_image_size( 'author-small', 141, 141, array( 'center', 'top') );
    add_image_size( 'author-small@2', 282, 282, array( 'center', 'top') );

    /**
     * Post Formats
     */
    $post_formats_args = array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat' );
    // add_theme_support( 'post-formats', $post_formats_args );
    /**
     * HTML5 Support
     */
    $html5_args = array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' );
    add_theme_support( 'html5', $html5_args );
    /**
     * Custom Background
     */
    $custom_background_args = array(
        'default-color'          => '',
        'default-image'          => '',
        'default-repeat'         => '',
        'default-position-x'     => '',
        'wp-head-callback'       => '_custom_background_cb',
        'admin-head-callback'    => '',
        'admin-preview-callback' => ''
    );
    add_theme_support( 'custom-background', $custom_background_args );
    /**
     * Custom Header
     */
    $custom_header_args = array(
        'default-image'          => '',
        'random-default'         => false,
        'width'                  => 0,
        'height'                 => 0,
        'flex-height'            => false,
        'flex-width'             => false,
        'default-text-color'     => '',
        'header-text'            => true,
        'uploads'                => true,
        'wp-head-callback'       => '',
        'admin-head-callback'    => '',
        'admin-preview-callback' => '',
    );
    add_theme_support( 'custom-header', $custom_header_args );
    /**
     * Register Nav Menus
     */
    register_nav_menus( array(
        'primary' => __( 'Primary', DOMAIN ),
    ) );
}
add_action( 'after_setup_theme', 'theme_support' );

/* Editor Styles
===============================================================================*/
if( file_exists( 'editor-style.css' ) ) {
    add_editor_style( 'editor-style.css' );
}

/* Load Stylesheets
================================================================================*/
if( !function_exists( 'fcwpf_load_stylesheets' ) ) :
  function fcwpf_load_stylesheets() {
    wp_enqueue_style( 'fc-wp-ie8-style', get_template_directory_uri() . '/css/ie8.style.css', array( 'fc-wp-style' ), '1.0.0' );
    wp_style_add_data( 'fc-wp-ie8-style', 'conditional', 'IE 8' );
    // Load the Internet Explorer 7 specific stylesheet.
    wp_enqueue_style( 'fc-wp-ie9-style', get_template_directory_uri() . '/css/ie9.style.css', array( 'fc-wp-style' ), '1.0.0' );
    wp_style_add_data( 'fc-wp-ie9-style', 'conditional', 'IE 9' );
  }
  add_action( 'wp_enqueue_scripts', 'fcwpf_load_stylesheets' );
endif;

/*  Load JavaScript
===============================================================================*/
function load_javascript() {
    /**
     * jQuery
     */
    wp_enqueue_script('jquery');
    /**
     * main.js
     */
    wp_register_script( 'main.min.js', THEME_URL . 'js/main.min.js', false, '1.0', true );
    wp_enqueue_script( 'main.min.js' );
    if( !is_admin() ) {
        wp_enqueue_script('masonry');
    }
    /*
     * Removed on client request
    wp_register_script( 'masonry-init.js', THEME_URL . 'js/masonry-init.js', array( 'masonry' ), '1.0', true );
    wp_enqueue_script( 'masonry-init.js' );*/
}
add_action( 'wp_enqueue_scripts', 'load_javascript' );

/* IE Conditional JavaScript
===============================================================================*/
function load_ie() {
  ob_start();?>
<!--[if (lt IE 9) & (!IEMobile)]><script src="<?php echo get_template_directory_uri(); ?>/js/ie.min.js"></script><![endif]-->
  <?php
  echo ob_get_clean();
}
add_action( 'wp_head', 'load_ie',10 );

/* Custom Comments Layout
===============================================================================*/
/**
 * Custom Comments Template
 * @param  string $comment
 * @param  array $args
 * @param  int $depth
 * @global strins  $GLOBALS['comment']
 * @global int $user_ID
 */
function custom_comments($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment;
    global $user_ID; 
    ob_start(); ?>
    <li id="comment-<?php comment_ID() ?>" <?php comment_class( 'comment-wrapper' ) ?> itemscope itemtype="http://schema.org/Comment">
      <?php if( $user_ID ) : if( current_user_can('administrator') ) : ?>
            <div class="comment-edit">
              <?php edit_comment_link( __( 'Edit', DOMAIN ),'','' ) ?>
            </div>
            <div class="comment-approval">
              <p>
                <?php 
                  if ( $comment->comment_approved == '0' ) 
                  _e( 'Your comment is awaiting moderation.', '' ) 
                ?>
              </p>
          </div>
      <?php endif; endif; ?>
    <article class="comment-container">
        <header class="comment-header comment-meta">
          <?php echo '<span itemprop="image">' . get_avatar( $comment, $size='50' ) . '</span>'; ?>
          <?php get_template_part( 'template-parts/comments/comment-meta/meta', 'author'); ?>
          <?php get_template_part( 'template-parts/comments/comment-meta/meta', 'date' ); ?>
        </header>
        <section class="comment-body" itemprop="comment">
            <?php comment_text(); ?>
        </section>
        <footer class="comment-footer">
            <p class="comment-reply">
                <?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
            </p>
        </footer>
    </article>
<?php echo ob_get_clean();
}

/* Sidebar Widget Area
===============================================================================*/
function register_custom_sidebars() {
    register_sidebar( array(
        'name'          => __( 'Main Sidebar', DOMAIN ),
        'id'            => 'home-sidebar',
        'description'   => '',
        'class'         => '',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>'
    ));
    register_sidebar( array(
        'name'          => __( 'Short Sidebar', DOMAIN ),
        'id'            => 'short-sidebar',
        'description'   => '',
        'class'         => '',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>'
    ));
}
add_action( 'init', 'register_custom_sidebars' );


/* Register Menus
===============================================================================*/
register_nav_menus( array(
    'primary' => 'Primary',
    'mobile'  => 'Mobile',
    'footer'  => 'Footer',
) );
/* Custom Excerpt Length and More Link
================================================================================*/
// custom length
function custom_excerpt_length( $length ) {
  $bene_fp_excerpt_length = ( get_field( 'bene_fp_excerpt_length', 'option' ) ? get_field( 'bene_fp_excerpt_length', 'option' ) : '' );
  $bene_case_study_excerpt_length = ( get_field( 'bene_case_study_excerpt_length', 'option' ) ? get_field( 'bene_case_study_excerpt_length', 'option' ) : '' );
  if( get_post_type() == 'clients' ) {
      $length = $bene_case_study_excerpt_length;
  } else {
      $length = $bene_fp_excerpt_length;
  }
  return $length;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
// Replaces the excerpt "more" text by a link
function new_excerpt_more($more) {
    $bene_fp_ellipse = ( get_field( 'bene_fp_ellipse', 'option' ) ? get_field( 'bene_fp_ellipse', 'option' ) : '' );
    $bene_case_study_ellipse = ( get_field( 'bene_case_study_ellipse', 'option' ) ? get_field( 'bene_case_study_ellipse', 'option' ) : '' );
    global $post;
    if( get_post_type() == 'clients' ) {
        $ellipse = $bene_case_study_ellipse;
    } else {
        $ellipse = $bene_fp_ellipse;
    }
    return '<a class="moretag" href="'. get_permalink($post->ID) . '"> '.$ellipse.'</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');
/* Add placeholer feild for gravity forms
===============================================================================*/
add_action("gform_field_standard_settings", "my_standard_settings", 10, 2);
function my_standard_settings($position, $form_id){
    if($position == 25){ ?>  
        <li class="admin_label_setting field_setting" style="display: list-item; ">
            <label for="field_placeholder">Placeholder Text
                <a href="javascript:void(0);" class="tooltip tooltip_form_field_placeholder" tooltip="&lt;h6&gt;Placeholder&lt;/h6&gt;Enter the placeholder/default text for this field.">(?)</a>
            </label>
            <input type="text" id="field_placeholder" class="fieldwidth-3" size="35" onkeyup="SetFieldProperty('placeholder', this.value);">
        </li>
        <?php 
    }
}
add_action("gform_editor_js", "my_gform_editor_js");
function my_gform_editor_js(){ ?>
<script>
  jQuery(document).bind("gform_load_field_settings", function(event, field, form){
    jQuery("#field_placeholder").val(field["placeholder"]);
  });
</script>
<?php
}
add_action('gform_enqueue_scripts',"my_gform_enqueue_scripts", 10, 2);
function my_gform_enqueue_scripts($form, $is_ajax=false){?>
    <script>
        jQuery(function(){
            <?php
            foreach($form['fields'] as $i=>$field){
                if(isset($field['placeholder']) && !empty($field['placeholder'])){      
                    ?>        
                    jQuery('#input_<?php echo $form['id']?>_<?php echo $field['id']?>').attr('placeholder','<?php echo $field['placeholder']?>');       
                    <?php
                }
            }
            ?>
        });
    </script>
<?php
}

/* Custom post listing
================================================================================*/
function custom_post_type_listings ( $query ) {
  if ( is_admin() || ! $query->is_main_query() )
      return;

  if ( is_tax('client_categories') ) {
    $query->set( 'posts_per_page', -1 );
    $query->set( 'orderby', 'title' );
    $query->set( 'order', 'ASC' );
    return;
  }
}

add_action( 'pre_get_posts', 'custom_post_type_listings', 1 );

/* Disable comment on attachment pages
================================================================================*/
function filter_media_comment_status( $open, $post_id ) {
  $post = get_post( $post_id );
  if( $post->post_type == 'attachment' ) {
    return false;
  }
  return $open;
}
add_filter( 'comments_open', 'filter_media_comment_status', 10 , 2 );

/* Ignore "the" in query order by title
================================================================================*/
$mam_global_fields = ", IF($wpdb->posts.post_title REGEXP('^the '),CONCAT(SUBSTR($wpdb->posts.post_title,5), ', ', SUBSTR($wpdb->posts.post_title,1,4)),$wpdb->posts.post_title) AS sort_title";
$mam_global_orderby = " UPPER(sort_title) ASC";
function mam_posts_fields ($fields) {
    global $mam_global_fields;
    if($mam_global_fields && !is_page('clients') ){
        $fields .= (preg_match('/^(\s+)?,/',$mam_global_fields)) ? $mam_global_fields : ", $mam_global_fields";
    }
    return $fields;
}
function mam_posts_orderby ($orderby) {
    global $mam_global_orderby;
    if ( $mam_global_orderby && !is_page('clients')) {
        $orderby = $mam_global_orderby;
    }
    return $orderby;
}
add_filter('posts_fields','mam_posts_fields');
add_filter('posts_orderby','mam_posts_orderby');