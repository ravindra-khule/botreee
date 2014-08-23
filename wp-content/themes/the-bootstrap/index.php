
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
  <nav>
    <div class="container">
      <ul id="filter" class="dropdown">
       <li id="work" class="dropdown filter"> 
        <i class="menuBg"></i>
          <ul class="sub-menu1">
            <li>
              <label>Work</label>
                <ul>
                    <?php
                    $category_ids = get_all_category_ids();
                    foreach($category_ids as $cat_id) {
                      $cat_name = get_cat_name($cat_id);
                      ?>
                     <li><a href="#" data-group="<?php echo $cat_name;?>"><?php echo $cat_name;?></a></li>
                      <?php
                    }
                    ?> 
                </ul>              
            </li>
            <li>
              <ul>   
                <?php wp_nav_menu(); ?>
              </ul>
            </li>
            <li>
              <ul> 
                <?php $args = array( 'menu' => 'about-us');?>
                <?php wp_nav_menu($args); ?>
              </ul>
            </li>
           
            </ul>
          </li>
        </ul>
      </div>
   
  </nav>
<div class="contentWrap">
    <div class="container">
    <h2>WORK</h2>
      <div id="portfolio">
          <div class="grid effect-2 projectList" id="grid">
              <?php  
//            //           
                query_posts('section_name=projects1');
                if( have_posts() ) {
                while ( have_posts()) :the_post() ;
                ?>
              <?php $category =get_the_category( $post->ID ); ?>
              
              <div class="work item" data-groups='["All", "<?php echo $category[0]->cat_name; ?>"]'>
               
                   <a class="various" href="#<?php echo $post->post_name;?>">
                        <?php echo get_the_post_thumbnail($post->ID);?>
                        <div class="projectInfo"> <span><?php echo $post->post_title; ?></span> </div>
                   </a>
                   <div id="<?php  echo $post->post_name;?>" style="display: none">
                       <div id="inline">
                   <?php echo the_content();?>
                           </div>
                    </div>
              </div>
                 <?php
                  endwhile;
                }             
                wp_reset_query();              
              ?>
          </div>
          </div>
    </div>
  </div>
 </div>


<?php

get_footer();


/* End of file index.php */
/* Location: ./wp-content/themes/the-bootstrap/index.php */