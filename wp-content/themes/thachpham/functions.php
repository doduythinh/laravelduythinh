<?php
/*
 * @khai bao gia tri
 * @THEM_URL = Lay duong dan thu muc theme
 *  @ CORE = Lay duong dan thu muc core
 **/

define( 'THEM_URL', get_stylesheet_directory() );
define( 'CORE', THEM_URL ."/core");
/**
 * @ nhung file /core/init.php
 */
require_once( CORE . "/init.php" );
/**
 * thiet lap chieu rong noi dung 
 */
if ( !isset($content_width) )
{
    $content_width = 620;
}
/**
 * @khai bao chuc nang trong theme
 */
if ( !function_exists('thachpham_theme_setup') ) {
    function thachpham_theme_setup() {
        /*thiet lap textdomain */
        $language_folder = THEM_URL . '/language';
        load_theme_textdomain( 'thachpham ', $language_folder );
        /*tu dong them link  RSS len the <head>*/
        add_theme_support( 'automatic-feed-link' );
        /* them post thumbnail*/
        add_theme_support( 'post-thumbnails' );
        /** POST  Format*/
        add_theme_support( 'post-formats', array(
            'image',
            'video',
            'gallery',
            'quote',
            'link'
        ) );
        /*them title*/ 
        add_theme_support( 'title-tag' );
        /*them custom background*/ 
        $default_background = array(
            'default-color' => '#e8e8e8'
        );
        add_theme_support( 'custom-background', $default_background );
        /**theme menu */
        register_nav_menu( 'primary-menu', __('Primary Menu', 'thachpham') );
        /*tao  side bar*/
        $sidebar = array(
            'name' => __('Main Sider', 'thachpham'),
            'id' => 'main-sidebar',
            'description' => __('Default sidebar'),
            'class' => 'main-sidebar',
            'before_title'=>'<h3 class="widgettitle">',
            'after_title' => '</h3>'

        );
        register_sidebar( $sidebar );
    }
    add_action( 'init', 'thachpham_theme_setup' );
}
/**------
 * TEMPLATE FUNCTION
 */
if(!function_exists('thachpham_header'))
{
    function thachpham_header()
    {?>
        <div class="site-name">
            <?php
            if( is_home() )
            {
            printf( '<h1><a href="%2$s" title="%2$s">%3$s</a></h1>',
            get_bloginfo('url'),
            get_bloginfo('description'),
            get_bloginfo('sitename') );
            } else{
                printf( '<p><a href="%2$s" title="%2$s">%3$s</a></p>',
            get_bloginfo('url'),
            get_bloginfo('description'),
            get_bloginfo('sitename') );
            }
            ?>
        </div>
        <div class="site-description"><?php bloginfo('description'); ?></div><?php
    }
}
/**------
 * thiet lap menu
 */
if( !function_exists('thachpham_menu'))
{
    function thachpham_menu($menu)
    {
        $menu =array(
            'theme_location'=>$menu,
            'container'=>'nav',
            'container_clas'=>$menu,
            'items_wrap' =>'<ul id="%1$s" class="%2$s sf-menu">%3$s</ul>'
        );
        wp_nav_menu( $menu );
    }
}
/** 
 * hàm tạo phân trang đơn giản
*/
if( !function_exists('thachpham_pagination'))
{
    function thachpham_pagination()
    {
        if( $GLOBALS['wp_query']->max_num_pages < 2 )
        {
            return '';
        }?>
        <nav class ="pagination" role="navigation">
        <?php if( get_next_posts_link() ) : ?>
        <div class ="prev"><?php next_posts_link( __('Older Post','thachpham') ); ?> </div>
        <?php endif;?>
        <?php if( get_previous_post_link() ) : ?>
        <div class ="next"><?php previous_posts_link( __('Newest Post','thachpham') ); ?> </div>
        <?php endif; ?>
    </nav>
    <?php }
}
/*hàm hiển thị thumnail */
if( !function_exists('thachpham_thumbnail'))
{
    function thachpham_thumbnail($size)
    {
        if( !is_single() && has_post_thumbnail() && !post_password_required() || has_post_format('image') ) :?>
        <figure class="post-thumbnail"><?php the_post_thumbnail($size); ?></figure>
    <?php endif; ?>
    <?php }
}
/**thachpham entry_header = hien thi tieu de post **/
if( !function_exists('thachpham_entry_header') )
{
    function thachpham_entry_header() { ?>
    <?php if(is_single() ) :?>
    <h1 class="entry-title"><a href="<?php the_permalink();?>"title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
    <?php else : ?>
    <h2 lass="entry-title"><a href="<?php the_permalink();?>"title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
    <?php endif; ?>
    <?php }
}/**thach pham entrymeta= lay du lieu post */
if( !function_exists('thachpham_entry_meta') )
{
    function thachpham_entry_meta() { ?>
        <?php if ( !is_page() ) : ?>
        <div class="entry-meta">
             <?php
             printf( __('<span class="author">Posted by %1$s','thachpham') ,
             get_the_author() );

             printf( __('<span class="date-published"> at %1$s','thachpham'),
             get_the_modified_date() );

             printf( __('<span class="category"> in %1$s','thachpham'),
             get_the_category_list( ',' ) );

             if( comments_open() ):
             echo '<span class="meta-reply">';
             comments_popup_link(
                __('Leave a comment', 'thachpham'),
                __('One comment', 'thachpham'),
                __(' % comment'),
                __('Read all comments', 'thachpham')
                );
            echo '</span>';
            endif;
             ?>
        </div>
    <?php endif; ?>
    <?php }
}
/**thachpham_entry_content = ham hien thi noi dung  */
if( !function_exists('thachpham_entry_content') )
{
    function thachpham_entry_content(){
        if( !is_single() && !is_page() ){
            the_excerpt();
        } else {
            the_content();

            /**phan trang trong 1 cai single */
            $link_pages = array(
                'before' => __('<p>Page: ', 'thachpham'),
                'after' => '</p>',
                'nextpagelink' => __('Next Page', 'thachpham'),
                'previouspagelink' => __('Previous Page', 'thachpham')
            );
            wp_link_pages( $link_pages );
        }
    }
}
function thachpham_readmore()
{
    return '<a class="read-more" href="' . get_permalink( get_the_ID() ) .'">'.__('...[Read More]','thachpham').'</a>';
   
}
add_filter('excerpt_more', 'thachpham_readmore');
/** thachpham_entry_tag = hien thi tag */
if( !function_exists('thachpham_entry_tag'))
{
    function thachpham_entry_tag()
    {
        if( has_tag() ):
            echo '<div class="entry-tag">';
            printf(__('Tagged in %1$s', ' thachpham'),get_the_tag_list('',',') );
            echo  '</div>';
        endif;
    }
}
/*====NHÚNG FILE CSS =========*/
function thachpham_style()
{
    wp_register_style( 'main-style', get_template_directory_uri() . "/style.css", 'all' );
    wp_enqueue_style('main-style');
    wp_register_style( 'reset-style', get_template_directory_uri() . "/reset.css", 'all' );
    wp_enqueue_style('reset-style');
    //superfish Menu 
    wp_register_style( 'superfish-style', get_template_directory_uri() . "./superfish.css", 'all' );
    wp_enqueue_style('superfish-style');
    wp_register_script( 'superfish-script', get_template_directory_uri() . "./superfish.js", array('jquery') );
    wp_enqueue_script('superfish-script');
    //custom scipt 
    wp_register_script( 'custom-script', get_template_directory_uri() . "./custom.js", array('jquery') );
    wp_enqueue_script('custom-script');
    

}
add_action('wp_enqueue_scripts','thachpham_style');

 

