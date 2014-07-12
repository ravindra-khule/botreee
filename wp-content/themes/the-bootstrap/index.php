

<?php
/**
 * Template Name: projects Page
 *
 * Selectable from a dropdown menu on the edit page screen.
 */
?>
<?php
/** index.php
 *
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @author		Konstantin Obenland
 * @package		The Bootstrap
 * @since		1.0.0 - 05.02.2012
 */
//function mythemename_all_scriptsandstyles() {
////Load JS and CSS files in here
// 
//    wp_register_style('botree', get_stylesheet_directory_uri() . '/botree/css/botree.css', array(),'2','all');
//    wp_register_style('botstrap', get_stylesheet_directory_uri() . '/botree/css/botstrap.css', array(),'2','all');
//    wp_register_style('bootstrap-responsive', get_stylesheet_directory_uri() . '/botree/css/bootstrap-responsive.css', array(),'2','all');
//    wp_register_style('component', get_stylesheet_directory_uri() . '/botree/css/component.css', array(),'2','all');
//    
//    
//     wp_register_script ('botreejs', get_stylesheet_directory_uri() . 'botree/js/botree.js', array( 'jquery' ),'1',true);
//     wp_register_script ('AnimOnScroll', get_stylesheet_directory_uri() . 'botree/js/AnimOnScroll.js', array( 'jquery' ),'1',true);
//     wp_register_script ('classie', get_stylesheet_directory_uri() . 'botree/js/classie.js', array( 'jquery' ),'1',true);
//     wp_register_script ('framework', get_stylesheet_directory_uri() . 'botree/js/framework.js', array( 'jquery' ),'1',true);
//     wp_register_script ('botree/imgloaded', get_stylesheet_directory_uri() . 'botree/js/botree/imgloaded.js', array( 'jquery' ),'1',true);
//     wp_register_script ('masonry.pkgd.min', get_stylesheet_directory_uri() . 'botree/js/masonry.pkgd.min.js', array( 'jquery' ),'1',true);
//     wp_register_script ('modernizr.custom', get_stylesheet_directory_uri() . 'botree/js/modernizr.custom.js', array( 'jquery' ),'1',true);
//     
//    
//     wp_enqueue_style( 'botree');
//     wp_enqueue_style( 'botstrap');
//     wp_enqueue_style( 'bootstrap-responsive');
//     wp_enqueue_style( 'component');
//     
//     wp_enqueue_script('botreejs');
//     wp_enqueue_script('AnimOnScroll');
//     wp_enqueue_script('classie');
//     wp_enqueue_script('framework');
//     wp_enqueue_script('botree/imgloaded');
//     wp_enqueue_script('masonry.pkgd.min');
//     wp_enqueue_script('modernizr.custom');
//     
//
//}
//add_action( 'wp_enqueue_scripts', 'mythemename_all_scriptsandstyles' );

get_header(); ?>

<section id="primary" class="span12">
	<?php tha_content_before(); ?>
	<div id="content" role="main">
                
		<?php tha_content_top();
       
                $type = 'projects';
                $args=array(
                    'post_type' => $type,
                    'post_status' => 'publish',
                     );
                
                    $my_query = null;
                    $my_query = new WP_Query($args);
                                
                    if( $my_query->have_posts() ) {
                        
                      while ($my_query->have_posts()) :
             
                           $my_query->the_post(); 
                          
                       echo get_the_post_thumbnail($post->ID);
                   
                       echo get_the_content($post->ID);
                      
                      endwhile;
                    }
             
                    wp_reset_query();  // Restore global post data stomped by the_post().

//             
//		if ( have_posts() ) {
//			while ( have_posts() ) {
//				echo get_the_post_thumbnail(get_the_ID(),'full'); 
//                                the_post();
//                              	get_template_part( '/partials/content', get_post_format() );
//			}
//			the_bootstrap_content_nav( 'nav-below' );
//        	}
//		else {
//			get_template_part( '/partials/content', 'not-found' );
//		}
	
		tha_content_bottom(); ?>
	</div><!-- #content -->
  

	<?php tha_content_after(); ?>
</section><!-- #primary -->

<?php

get_footer();


/* End of file index.php */
/* Location: ./wp-content/themes/the-bootstrap/index.php */