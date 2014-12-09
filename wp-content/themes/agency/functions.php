<?php
/**
 * agency functions and definitions
 *
 * @package agency
 */
define('TFS_FUNCTIONS', get_template_directory()  . '/inc');
define('TFS_INDEX_JS', get_template_directory_uri()  . '/js');
define('TFS_INDEX_CSS', get_template_directory_uri()  . '/css');
define('TFS_INDEX_FONT', get_template_directory_uri()  . '/fonts');
/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
    $content_width = 640; /* pixels */
}
//require_once ('admin/startup.php');
if ( ! function_exists( 'agency_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function agency_setup() {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on agency, use a find and replace
         * to change 'agency' to the name of your theme in all the template files
         */
        load_theme_textdomain( 'agency', get_template_directory() . '/languages' );
        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );
        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
         */
        //add_theme_support( 'post-thumbnails' );
        // This theme uses wp_nav_menu() in one location.
        register_nav_menus( array(
            'primary'     => __( 'Primary Menu', 'agency' ),
            'footer_menu' => __( 'Footer Menu', 'agency' )
        ) );
        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support( 'html5', array(
            'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
        ) );
        /*
         * Enable support for Post Formats.
         * See http://codex.wordpress.org/Post_Formats
         */
        add_theme_support( 'post-formats', array(
            'aside', 'image', 'video', 'quote', 'link',
        ) );
        // Set up the WordPress core custom background feature.
        add_theme_support( 'custom-background', apply_filters( 'agency_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        ) ) );
    }
endif; // agency_setup
add_action( 'after_setup_theme', 'agency_setup' );
/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function agency_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Banner Header', 'agency' ),
        'id'            => 'banner-header',
        'description'   => '',
        'before_widget' => '<div class="logo-wrap  %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '',
        'after_title'   => '',
    ) );
    register_sidebar( array(
        'name'          => __( 'Hotline', 'agency' ),
        'id'            => 'hotline',
        'description'   => '',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer Text', 'agency' ),
        'id'            => 'footer_text',
        'description'   => '',
        'before_widget' => '<div class="row %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '',
        'after_title'   => '',
    ) );
    register_sidebar( array(
        'name'          => __( 'Slideshow', 'agency' ),
        'id'            => 'slideshow',
        'description'   => '',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '',
        'after_title'   => '',
    ) );
    register_sidebar( array(
        'name'          => __( 'Login Logout', 'agency' ),
        'id'            => 'login',
        'description'   => '',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '',
        'after_title'   => '',
    ) );
    register_sidebar( array(
        'name'          => __( 'Expert Consultant', 'agency' ),
        'id'            => 'expert_consultant',
        'description'   => '',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) );
    register_sidebar( array(
        'name'          => __( 'Success Partners', 'agency' ),
        'id'            => 'partners',
        'description'   => '',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) );
    register_sidebar( array(
        'name'          => __( 'Register Form', 'agency' ),
        'id'            => 'register_form',
        'description'   => '',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) );
    register_sidebar(array(
    'name'=>__("Support Form"),
        'id'=>'supporting_template',
    )  );
}
add_action( 'widgets_init', 'agency_widgets_init' );
/**
 * Enqueue scripts and styles.
 */
function agency_scripts() {
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
    wp_enqueue_style( 'agency-style', get_stylesheet_uri() );
    wp_enqueue_script( 'agency-navigation', get_template_directory_uri() . '/js/wow.js', array(), '20120206', true );
    wp_enqueue_script( 'agency-script', get_template_directory_uri() . '/js/script.js', array(), '20120206', true );
    //wp_enqueue_script( 'agency-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );
    //wp_enqueue_script( 'agency-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'agency_scripts' );
/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';
// /**
//  * Custom template tags for this theme.
//  */
require get_template_directory() . '/inc/template-tags.php';
// /**
//  * Custom functions that act independently of the theme templates.
//  */
// require get_template_directory() . '/inc/extras.php';
// /**
//  * Customizer additions.
//  */
// require get_template_directory() . '/inc/customizer.php';
// /**
//  * Load Jetpack compatibility file.
//  */
// require get_template_directory() . '/inc/jetpack.php';
//Limit word description
function content($limit) {
    $content = explode(' ', get_the_content(), $limit);
    if (count($content)>=$limit) {
        array_pop($content);
        $content = implode(" ",$content).'...';
    } else {
        $content = implode(" ",$content);
    }
    $content = preg_replace('/\[.+\]/','', $content);
    $content = apply_filters('the_content', $content);
    $content = str_replace(']]>', ']]&gt;', $content);
    return $content;
}
//Create shortcode contact page
function leftContact( $atts , $content = null ) {
    // Attributes
    $a = extract( shortcode_atts(
            array(
                'title' 	=> 	$title,
                'address' 	=> 	$address,
                'phone' 	=> 	$phone,
                'email' 	=> 	$email,
            ), $atts )
    );
    $content .= '<h3>'.$title.'</h3>';
    $content .= '<p><strong>Địa chỉ: </strong>'.$address.'</p>';
    $content .= '<p><strong>Điện thoại: </strong>'.$phone.'</p>';
    $content .= '<p><strong>Email: </strong><a href="mailto:'.$email.'">'.$email.'</a></p>';
    return $content;
}
add_shortcode( 'contact', 'leftContact' );
/* * ******************************************************************
 * Breadcrumbs
 * ****************************************************************** */
function get_category_breadcrumbs( $id, $link = false, $separator = '/', $nicename = false, $visited = array() ) {
    $chain = '';
    $parent = get_term( $id, 'category' );
    if ( is_wp_error( $parent ) )
        return $parent;

    if ( $nicename )
        $name = $parent->slug;
    else
        $name = $parent->name;

    if ( $parent->parent && ( $parent->parent != $parent->term_id ) && !in_array( $parent->parent, $visited ) ) {
        $visited[] = $parent->parent;
        $chain .= get_category_breadcrumbs( $parent->parent, $link, " > ", $nicename, $visited );
    }
    if ( $link )
        $chain .= '<a href="' . esc_url( get_category_link( $parent->term_id ) ) . '">'.$name.'</a>' . $separator;
    else
        $chain .= $name.$separator;
    return $chain;
}
function get_breadcrumbs() {
    global $wp_query, $post;
    // Start the UL
    echo '<div class="breadcrumbs"><ul>';
    echo '<li> <a href="' . home_url() . '" class="home">' . __( "Trang chủ", 'agency' ) . '</a><span>></span></li>';
    if ( is_category() ) {
        $catTitle = single_cat_title( "", false );
        $cat      = get_cat_ID( $catTitle );
        echo '<li>'.get_category_breadcrumbs( $cat, TRUE, "  " ).'</li>';
    } elseif ( is_archive() && ! is_category() ) {
        if ( get_post_type() == "portfolio" ) {
            echo "Portfolio";
        } else {
            echo "Archives";
        }
    } elseif ( is_search() ) {
        echo "Search Result";
    } elseif ( is_404() ) {
        echo "404 Not Found";
    } elseif ( is_single( $post ) ) {
        if ( get_post_type() == 'post' ) {
            $category    = get_the_category();
            $category_id = get_cat_ID( $category[0]->cat_name );
            echo '<li>'.get_category_breadcrumbs( $category_id, TRUE, " " ).'</li>';
        } else {
            echo get_post_type();
            echo get_the_title();
        }
    } elseif ( is_page() ) {
        $post = $wp_query->get_queried_object();
        if ( $post->post_parent == 0 ) {
            echo "<li>" . the_title( '', '', FALSE ) . "</li>";
        } else {
            $ancestors = array_reverse( get_post_ancestors( $post->ID ) );
            array_push( $ancestors, $post->ID );
            foreach ( $ancestors as $ancestor ) {
                if ( $ancestor != end( $ancestors ) ) {
                    echo '<li><a href="' . get_permalink( $ancestor ) . '">' . strip_tags( apply_filters( 'single_post_title', get_the_title( $ancestor ) ) ) . '</a></li>';
                } else {
                    echo '' . strip_tags( apply_filters( 'single_post_title', get_the_title( $ancestor ) ) );
                }
            }
        }
    } elseif ( is_attachment() ) {
        $parent = get_post( $post->post_parent );
        if ( $parent->post_type == 'page' || $parent->post_type == 'post' ) {
            $cat = get_the_category( $parent->ID );
            $cat = $cat[0];
            echo get_category_parents( $cat, true, ' ' );
        }
        echo '<li> <a href="' . get_permalink( $parent ) . '">' . $parent->post_title . '</a><span>></span></li> ';
        echo '<li>'.get_the_title().'</li>';
    }
    // End the UL
    echo "</ul></div>";
}
// Redefine woocommerce_output_related_products()
function woocommerce_output_related_products() {
    woocommerce_related_products(4,4); // Display 4 products in rows of 2
}
function vc_remove_wp_ver_css_js( $src ) {
    if ( strpos( $src, 'ver=' . get_bloginfo( 'version' ) ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}
add_filter( 'style_loader_src', 'vc_remove_wp_ver_css_js', 9999 );
add_filter( 'script_loader_src', 'vc_remove_wp_ver_css_js', 9999 );
add_theme_support( 'post-thumbnails' );