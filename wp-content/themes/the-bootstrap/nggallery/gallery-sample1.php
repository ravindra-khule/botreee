<?php 
/**
Template Page for the gallery overview

Follow variables are useable :

	$gallery     : Contain all about the gallery
	$images      : Contain all images, path, title
	$pagination  : Contain the pagination content

 You can check the content when you insert the tag <?php var_dump($variable) ?>
 If you would like to show the timestamp of the image ,you can use <?php echo $exif['created_timestamp'] ?>
**/
//echo "<pre>";
//print_r($images);
?>




              <div class="slideShowImg">
                <div class="slideShowHead">
                  <h2>title: children's day<span>media: press - print</span></h2>
                </div>
                <div class="cycle-slideshow" 
                    data-cycle-fx=scrollHorz
                    data-cycle-timeout=0
                    data-cycle-slides="> .rj"
                   
                    data-cycle-pager="#<?php echo $images[0]->_cache['image_slug'] ;?>"
                    data-cycle-pager-template=""
                    >
                    <?php
                  foreach ( $images as $image ) :   ?>
                    <div class="rj"> <div class="slideImg"><img src="<?php echo $image->imageURL; ?>"> </div></div>
                   <?php endforeach;?>
                </div>
              </div>
              <div class="slideShowPager">
              <div class="photosInfo">
              	<i class="projectLogo">
                    <img src="http://mywordpress.com/wp-content/themes/the-bootstrap/img/projectLogo.jpg" alt=""/></i><h3>Center One Mall</h3>
              </div>
                <div id= '<?php echo $images[0]->_cache['image_slug'] ;?>' class = "cycle-pager external slidePager">
                    <?php
                  foreach ( $images as $image ) :   ?>
                    <img src="<?php echo $image->imageURL; ?>" width=100 height=100>
                   <?php endforeach;?>
                    
                </div>
              </div>