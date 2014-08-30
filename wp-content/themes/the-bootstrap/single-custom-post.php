<?php

/* 
 Single Post Template: My Custom Post Template
 */

get_header(); ?>
<div class="container">
    <div class="row">
        <section id="primary" class="span8">

                <?php tha_content_before(); ?>
            <div id="content" role="main">
                        <?php tha_content_top();

                        while ( have_posts() ) {
                                the_post();
                                get_template_part( '/partials/content', 'single' );
                                comments_template();
                        } ?>

                        <nav id="nav-single" class="pager">
                                <h3 class="assistive-text"><?php _e( 'Post navigation', 'the-bootstrap' ); ?></h3>
                                <span class="next"><?php next_post_link( '%link', sprintf( '%1$s <span class="meta-nav">&rarr;</span>', __( 'Next Post', 'the-bootstrap' ) ) ); ?></span>
                                <span class="previous"><?php previous_post_link( '%link', sprintf( '<span class="meta-nav">&larr;</span> %1$s', __( 'Previous Post', 'the-bootstrap' ) ) ); ?></span>
                        </nav><!-- #nav-single -->

                        <?php tha_content_bottom(); ?>
                </div><!-- #content -->
                <?php tha_content_after(); ?>
        </section><!-- #primary -->

        <?php get_sidebar(); ?>
    </div>
    <?php get_footer(); ?>
</div>



/* End of file index.php */
/* Location: ./wp-content/themes/the-bootstrap/single.php */