<?php get_header();  ?>

<div class="main">
  <div class="container">
    <div class="content">
      <ul class="socialTop">
      	<?php if(have_rows('social', 'options')) while(have_rows('social','options')) : the_row();?>
  	    <li><a href="<?php the_sub_field('link');?>" target="_blank" style="background:<?php the_sub_field('color'); ?>"><i class="fa fa-<?php the_sub_field('icon')?> aria-hidden="true"></i></a></li>
        	<?php endwhile;?>
        </ul>

      <div class="box profile">
        <div class="labelBox"> 
          <div class="label" style="border:3px solid <?php the_field('profile_color')?>">
            <div class="iconBox" style="background:<?php the_field('profile_color')?>">
              <div class="icon">
                <i class="fa fa-user" aria-hidden="true"></i>
              </div>
            </div>
            <h2>Profile</h2> 
            <svg class="triangle" width="12" viewBox="0 0 12 55">
              <polygon points="0,0 0,55 12,27.5" style="fill:<?php the_field('profile_color')?>;" />
            </svg>
          </div>
          <div class="blink"><i class="fa fa-arrow-left" aria-hidden="true"></i>Click to Open</div>
        </div>
        <div class="boxbox clearfix">
          <div class="contentBox">
            <div class="me">
              <h1 style="color:<?php //the_field('profile_color')?>">Hello! <span> I'm Julia. </span></h1>
                <?php $my_image = get_field('my_image') ?>
              <img src="<?php echo $my_image['url'] ?>" alt="">
              <div class="aboutMe">
                <h2>Front-End Web Developer based in Toronto. </h2>
                <p><?php the_field('about_me') ?></p>
              </div>
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
            <!-- <p><i class="fa fa-plus-circle" aria-hidden="true"></i></p> -->
          </div>
          <div class="close"><p>CLOSE<i class="fa fa-times" aria-hidden="true"></i></p></div>
        </div><!-- boxbox END -->
      </div>

      <div class="box resume">
        <div class="labelBox">
          <div class="label" style="border:3px solid <?php the_field('resume_color')?>">
            <div class="iconBox" style="background:<?php the_field('resume_color')?>">
              <div class="icon">
                <i class="fa fa-th-list" aria-hidden="true"></i>
              </div>
            </div>
            <h2>Resume</h2>
            <svg class="triangle" width="12" viewBox="0 0 12 55">
              <polygon points="0,0 0,55 12,27.5" style="fill:<?php the_field('resume_color')?>;" />
            </svg>
          </div>
          <div class="blink"><i class="fa fa-arrow-left" aria-hidden="true"></i>Click to Open</div>
        </div>
        <div class="boxbox clearfix">
          <div class="contentBox">
            
          </div>
          <div class="close"><p>CLOSE<i class="fa fa-times" aria-hidden="true"></i></p></div>
        </div><!-- boxbox END -->
      </div>
      
      <div class="box portfolio">
        <div class="labelBox">
          <div class="label" style="border:3px solid <?php the_field('port_color')?>">
            <div class="iconBox" style="background:<?php the_field('port_color')?>">
              <div class="icon">
                <i class="fa fa-laptop" aria-hidden="true"></i>
              </div>
            </div>
            <h2>Portfolio</h2>
            <svg class="triangle" width="12" viewBox="0 0 12 55">
              <polygon points="0,0 0,55 12,27.5" style="fill:<?php the_field('port_color')?>;" />
            </svg>
          </div>
          <div class="blink"><i class="fa fa-arrow-left" aria-hidden="true"></i>Click to Open</div>
        </div>
        <div class="boxbox clearfix">
          <div class="contentBox">
              <h1>Check out my work!</h1>
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
              				<a class="git" href="<?php the_sub_field('git_url'); ?>" target="_blank">Git Hub 
                        <i class="devicons devicons-github_badge"></i></a>
          		      </div>
      		        </div>
              </div>
              <?php endwhile; ?>
          </div>
          <div class="close"><p>CLOSE<i class="fa fa-times" aria-hidden="true"></i></p></div>
        </div><!-- boxbox END -->
      </div>
      
      <div class="box blogFront">
        <div class="labelBox">
          <div class="label" style="border:3px solid <?php the_field('blog_color')?>">
            <div class="iconBox" style="background:<?php the_field('blog_color')?>">
              <div class="icon">
                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
              </div>
            </div>
            <h2>Blog</h2>
            <svg class="triangle" width="12" viewBox="0 0 12 55">
              <polygon points="0,0 0,55 12,27.5" style="fill:<?php the_field('blog_color')?>;" />
            </svg>
          </div>
          <div class="blink"><i class="fa fa-arrow-left" aria-hidden="true"></i>Click to Open</div>
        </div>
        <div class="boxbox clearfix blog">
          <div class="contentBox blogFront">
            <h1>I write... <span>Well, sometimes...</span> </h1>
            <?php static_front_posts() ?>
          </div>
          <div class="close"><p>CLOSE<i class="fa fa-times" aria-hidden="true"></i></p></div>
        </div><!-- boxbox END -->
      </div>

      <div class="box contact">
        <div class="labelBox">
          <div class="label" style="border:3px solid <?php the_field('contact_color')?>">
            <div class="iconBox" style="background:<?php the_field('contact_color')?>">
              <div class="icon">
                 <i class="fa fa-paper-plane" aria-hidden="true"></i>
              </div>
            </div>
            <h2>Contact</h2>
            <svg class="triangle" width="12" viewBox="0 0 12 55">
              <polygon points="0,0 0,55 12,27.5" style="fill:<?php the_field('contact_color')?>;" />
            </svg>
          </div>
          <div class="blink"><i class="fa fa-arrow-left" aria-hidden="true"></i>Click to Open</div>
        </div>
        <div class="boxbox clearfix">
          <div class="contentBox">
            <h1>Like what you see?</h1>
            <div class="contactBox">
              <div class="left">
                <p class="bold"><?php the_field('contact_p') ?></p>
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
              <div class="right">
                <?php the_field('contact_form'); ?>
              </div>
            </div><!-- CONTACTBox END -->
          </div> <!-- contentBox END -->
          <div class="close"><p>CLOSE<i class="fa fa-times" aria-hidden="true"></i></p></div>
          </div> <!-- boxbox END -->
      </div>  
    </div> <!-- /,content -->

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>