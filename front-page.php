<?php get_header();  ?>

<div class="main">
  <div class="container">
    <div class="content">
      <ul class="social">
      	<?php if(have_rows('social', 'options')) while(have_rows('social','options')) : the_row();?>
  	    <li><a href="<?php the_sub_field('link');?>" target="_blank" style="background:<?php the_sub_field('color'); ?>"><i class="fa fa-<?php the_sub_field('icon')?> aria-hidden="true"></i></a></li>
        	<?php endwhile;?>
        </ul>

      <div class="box profile">
        <div class="label" style="border:3px solid <?php the_field('profile_color')?>">
          <div class="iconBox" style="background:<?php the_field('profile_color')?>">
            <div class="icon">
              <i class="fa fa-user" aria-hidden="true"></i>
            </div>
          </div>
          <h2>Profile</h2>
        </div>
        <div class="contentBox">
          <div class="me">
            <h1><?php the_field('name') ?></h1>
            <h2><?php the_field('title') ?></h2>
            <?php $my_image = get_field('my_image') ?>
            <img src="<?php echo $my_image['url'] ?>" alt="">
          </div>
          <div class="aboutMe">
            <h1 style="color:<?php //the_field('profile_color')?>">About Me</h1>
            <p><?php the_field('about_me') ?></p>
          </div>
          <div class="skills">
            <h1>My Skills</h1>
            <div class="skillContainer">
              <?php if (have_rows('skills') ) while ( have_rows('skills') ) : the_row(); ?>
              <div class="eachSkill">
                  <i class="<?php the_sub_field('icon'); ?>"></i>
                  <p><?php the_sub_field('skill_name'); ?></p>
              </div>
              <?php endwhile; ?>
            </div>
          </div>
        </div>
      </div>

      <div class="box resume">
        <div class="label" style="border:3px solid <?php the_field('resume_color')?>">
          <div class="iconBox" style="background:<?php the_field('resume_color')?>">
            <div class="icon">
              
            </div>
          </div>
          <h2>Resume</h2>
        </div>
        <div class="contentBox">
          
        </div>
      </div>
      
      <div class="box portfolio">
        <div class="label" style="border:3px solid <?php the_field('port_color')?>">
          <div class="iconBox" style="background:<?php the_field('port_color')?>">
            <div class="icon">
              
            </div>
          </div>
          <h2>Portfolio</h2>
        </div>
        <div class="contentBox">
            <?php if (have_rows('portfolio') ) while ( have_rows('portfolio') ) : the_row(); ?>
            <div class="eachProject <?php the_sub_field('text'); ?>" style="background: <?php the_sub_field(bgcolor) ?>" >
		<?php $project_image = get_sub_field('port_image') ?>
            	    <img src="<?php echo $project_image['url'] ?>" alt="">
                <div class="text">
			<h2> <?php the_sub_field('title'); ?></h2>
			<p><?php the_sub_field('text'); ?></p>
			<p class="categories"><?php the_sub_field('categories'); ?></p>
			<div class="buttons">
				<a href="<?php the_sub_field('live_url'); ?>" target="_blank">View it Live</a>
				<a href="<?php the_sub_field('git_url'); ?>" target="_blank">Git Hub <i class="devicons devicons-github_badge"></i></a>
			</div>
		</div>
		
            </div>
            <?php endwhile; ?>
        </div>
      </div>
      
      <div class="box blog">
        <div class="label" style="border:3px solid <?php the_field('blog_color')?>">
          <div class="iconBox" style="background:<?php the_field('blog_color')?>">
            <div class="icon">
              
            </div>
          </div>
          <h2>Blog</h2>
        </div>
        <div class="contentBox">
          <?php if(have_posts()) while(have_posts()) : the_post();?>
	 	<?php the_post_thumbnail();?>
	 	<h1><?php the_title();?></h1>
	 	<p><?php the_excerpt();?></p>	
	 	<p><?php the_date();?></p>
	  <?php endwhile;?>
        </div>
      </div>

      <div class="box contact">
        <div class="label" style="border:3px solid <?php the_field('contact_color')?>">
          <div class="iconBox" style="background:<?php the_field('contact_color')?>">
            <div class="icon">
               <i class="fa fa-paper-plane" aria-hidden="true"></i>
            </div>
          </div>
          <h2>Contact</h2>
        </div>
        <div class="contentBox">
          <h1>Like what you see?</h1>
          <div class="left">
            <?php the_field('contact_form'); ?>
          </div>
          <div class="right">
            <p class="bold">Whether you want to just say Hi, ask for quote or follow me online, here you will find all necessary information.</p>
              <?php if(have_rows('contact_info')) while (have_rows('contact_info')) : the_row(); ?>
		        <div class="contactInfo">
              <i class="fa fa-<?php the_sub_field('icon')?>" aria-hidden="true"></i>
		          <p><?php the_sub_field('info')?></p>
            </div>  
	            <?php endwhile; ?>
            <ul class="social">
              <?php if(have_rows('social', 'options')) while(have_rows('social','options')) : the_row();?>
                  <li><a href="<?php the_sub_field('link');?>" target="_blank" style="background:<?php the_sub_field('color'); ?>"><i class="fa fa-<?php the_sub_field('icon')?> aria-hidden="true"></i></a></li>
              <?php endwhile;?>
            </ul>
          </div>
        </div>
      </div>  
    </div> <!-- /,content -->

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>