<?php
/** page.php
 Template Name:Custom template
 */
/*comment passed */
get_header(); ?>

<div id="container">
    <nav>
    <div class="container">
        
      <ul class="dropdown">
       <li id="work" class="dropdown filter"> 
        <i class="menuBg"></i>
          <ul class="sub-menu1">
              <li><a href="mywordpress.com">Home</a>  </li>
              <li><a href="#">Contact</a>  </li>
              
            </ul>
          </li>
        </ul>
      </div>
   
  </nav>
<div class="contentWrap">
   <div class="container">
<div class="row">
  <div id="primary" class="span8">
      
		<?php
                
                        $type = 'post';
                        $args=array(
                          'post_type' => $type,
                          'post_status' => 'publish');
                          

                        $my_query = null;
                        $my_query = new WP_Query($args);
			if ($my_query->have_posts() ) :
				// Start the Loop.
				while ( $my_query->have_posts() ) : $my_query->the_post();
                                    ?>
                                <div class="well">
                                    <h3><?php the_title();?></h3>
                                    <p>  <?php the_content();?></p>
				</div>	
                                        <?php
				endwhile;
				

			else :
				// If no content, include the "No posts found" template.
				get_template_part( 'content', 'none' );

			endif;
		?>
     
       
        </div><!-- #primary -->
        <div class="span4">
            <?php
                get_sidebar();?>
        </div>
    </div>
</div>
</div>
</div>

<?php

get_footer();



/* End of file page.php */
/* Location: ./wp-content/themes/the-bootstrap/page.php */
