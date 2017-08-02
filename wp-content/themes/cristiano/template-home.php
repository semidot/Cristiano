<?php
/**
 * Template Name: home
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<section class="home-banner" style=" width:100%;background:url(http://localhost/cristiano/wp-content/themes/cristiano/images/home-banner.jpg); background-repeat:no-repeat; background-position:center center;  background-size: 100%; float:left">
	<div class="container">
    	<div class="row">
        	<div class="col-md-12">
            	<div class="banner-text">
                	<h1>Specialists in Laser<br/>Hair and Skin Techniques</h1>
                    <a href="#"  data-toggle="modal" data-target=".bs-example-modal-lg">WATCH THE VIDEO</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--************-->	
<div class="modal fade bs-example-modal-lg popup-video" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <div class="modal-body">
      	<iframe width="560" height="315" src="https://www.youtube.com/embed/oC6X3f51uc8" frameborder="0" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</div>
<!--************-->
<section class="home-category">
	<div class="container">
    	<div class="row">
        	<h2>Our Treatments</h2>
        	<div class="col-md-4 col-sm-4 category-one">
            	<div class="thumbnail">
                	<span><img src="<?php bloginfo( 'template_url' ); ?>/images/cat1.jpg" /></span>
                <div class="caption">
                	<h3>Hair Removal<br/>for Men/Women</h3>
                    <p>At Cristianos we can offer treatment on all body area inc back, shoulders, buttocks etc</p>
                    <a href="#">find out more</a>
                </div>
                  </div>
            </div>
            <div class="col-md-4 col-sm-4 category-one">
            	<div class="thumbnail">
                	<span><img src="<?php bloginfo( 'template_url' ); ?>/images/cat2.jpg" /></span>
                <div class="caption orange">
                	<h3>Hair Removal<br/>for transgender</h3>
                    <p>At Cristianos we can offer treatment on all body area inc back, shoulders, buttocks etc</p>
                    <a href="#">find out more</a>
                </div>
                  </div>
            </div>
            <div class="col-md-4 col-sm-4 category-one">
            	<div class="thumbnail">
                	<span><img src="<?php bloginfo( 'template_url' ); ?>/images/cat3.jpg" /></span>
                <div class="caption green">
                	<h3>Hair Removal<br/>for Men/Women</h3>
                    <p>At Cristianos we can offer treatment on all body area inc back, shoulders, buttocks etc</p>
                    <a href="#">find out more</a>
                </div>
                  </div>
            </div>
        </div>
    </div>
</section>	
<!--************-->
<section class="home-text">
	<div class="container">
    	<div class="row">
        	<div class="col-md-4 col-sm-4">
            	<h2>Specialists in Laser Hair and Skin Techniques</h2>
            </div>
            <div class="col-md-8 col-sm-8">
            	<p>Hair Removal at Cristianos emerged in 1997, with the experience of one woman, Chris Hart. She was determined that all treatments in which she was involved had an ethical approach; the needs of clients would always be the first consideration. She established the first Cristianos Laser Clinic in Altrincham, near Manchester, to provide that service. The reputation of the Clinic became such that demand increased and in response to that need she aimed to reduce the traveling times of clients by opening other Clinics in Bury, Leeds, London and Liverpool which are all now established around the U.K</p>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
