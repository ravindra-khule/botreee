
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

get_header(); ?>

 <div id="container"> 
    <nav class="navBg">
    <div class="container">
      <div class="click-nav">
        <ul class="no-js clearfix">
          <li> <a href="#" class="clicker">&nbsp;</a>
            <ul class="mainDrop clearfix">
            <?php
                wp_nav_menu();
            ?>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<div class="contentWrap">
    <div class="container">
      <div  id="portfolio">
          <h2>WORK</h2>  
          <ul class="grid effect-2 projectList" id="grid">
              <?php  
//            //           
                        query_posts('section_name=projects1');
                        if( have_posts() ) {
                        while ( have_posts()) :the_post() ;
                                                        
                                                        

                        ?>
              
                       <li class="work"> 
                           <a class="various" href="#<?php echo $post->post_name;?>">
                                <?php echo get_the_post_thumbnail($post->ID);?>
                                <div class="projectInfo"> <span><?php echo $post->post_title; ?></span> </div>
                           </a>
                           <div id="<?php  echo $post->post_name;?>" style="display: none">
                           <?php echo the_content();?>
                            </div>
                        </li>
                        
                            
                                                
                        <?php
                    
                     
                      endwhile;
                    }
             
                    wp_reset_query();
              
              ?>
          </ul>
          
          
          </div>
    </div>
  </div>
 </div>


<?php

get_footer();


/* End of file index.php */
/* Location: ./wp-content/themes/the-bootstrap/index.php */