<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
    
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
    <link href="<?php bloginfo( 'template_url' ); ?>/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="<?php bloginfo( 'template_url' ); ?>/css/font-awesome.css" rel="stylesheet"/>
    <link href="<?php bloginfo( 'template_url' ); ?>/css/style.css" rel="stylesheet"/>
    <script src="<?php bloginfo( 'template_url' ); ?>/js/jquery-2.1.1.js"></script>
    <script src="<?php bloginfo( 'template_url' ); ?>/js/bootstrap.min.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header>
 <div class="top-bar">
	<div class="container">
    	<div class="row">
        	<div class="col-md-5 col-sm-5 top-bar-left">
            	<h2>Specialists in Laser Hair and Skin Techniques</h2>
            </div>
            <div class="col-md-7 col-sm-7 top-bar-right">
            	<ul>
                	<li class="first"><a><i class="fa fa-phone" aria-hidden="true"></i>0800 085 0661</a></li>
                    <li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    <li class="last"><input type="text" placeholder="search">
                    	<input type="submit" class="serach-button">
                    </li>
                </ul>
            </div>
        </div>
    </div>
  </div>
  <div class="top-bottom">
  	<div class="container">
    	<div class="row">
        	<div class="col-md-3 col-sm-3">
            	<div class="logo"><a href="#"><img src="<?php bloginfo( 'template_url' ); ?>/images/logo.jpg"></a></div>
                </div>
                <div class="col-md-9 col-sm-9 menu-bar">
                <?php wp_nav_menu( array('theme_location' => 'primary', 'menu_class'      => 'heade-menu', )); ?>
            </div>
        </div>
    </div>
  </div>  	
</header>