<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <link href='//cdn.jsdelivr.net/devicons/1.8.0/css/devicons.min.css' rel='stylesheet'>
  <link href="https://fonts.googleapis.com/css?family=Fugaz+One|Montserrat" rel="stylesheet">
  <?php $favicon = get_field('favicon', 'options') ?>
  <link rel="shortcut icon" href="<?php echo $favicon['url']?>"/>
  <style>
    .profile .close p:hover:before{
      background: <?php the_field('profile_color')?>;
    }
    .resume .close p:hover:before{
      background: <?php the_field('resume_color')?>;
    }
    .portfolio .close p:hover:before{
      background: <?php the_field('port_color')?>;
    }
    .blogFront .close p:hover:before{
      background: <?php the_field('blog_color')?>;
    }
    .contact .close p:hover:before{
      background: <?php the_field('contact_color')?>;
    }

  </style>
  <!-- stylesheets should be enqueued in functions.php -->
  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header>
  <div class="container">
    <h1>
      <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
        by Julia Kim
      </a>
    </h1>
  </div> <!-- /.container -->
</header><!--/.header-->

