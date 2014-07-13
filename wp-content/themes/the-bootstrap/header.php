<?php
/** header.php
 *
 * Displays all of the <head> section and everything up till </header>
 *
 * @author		Konstantin Obenland
 * @package		The Bootstrap
 * @since		1.0 - 05.02.2012
 */

?>
<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
	<head>
		<?php tha_head_top(); ?>
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
               
               
	
		<title><?php wp_title( '&laquo;', true, 'right' ); ?></title>
		
		<?php tha_head_bottom(); ?>
               
		<?php wp_head(); ?>
                 
	</head>
	
        <body class="homeBody">
            
          
            <header>
                <div class="container">
                    <h1>
                        
                    <img src="<?php echo get_template_directory_uri();?>/img/botree-logo1.png"  alt="BOTREE"/>
                   </h1>
                </div>
            </header>
            			
				


