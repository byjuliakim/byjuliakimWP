<?php get_header();  ?>

<div class="main">
  <div class="container">

    <div class="content">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
        <h4>djaijwerjowaeijrjweo</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, magni. Perspiciatis hic, nisi vitae, veniam porro odio et quisquam natus quibusdam iusto doloremque voluptate autem libero iure nulla unde itaque aut, ducimus cumque similique ipsum reprehenderit molestias officia enim! Numquam magnam modi repudiandae mollitia maxime, blanditiis corporis dicta, alias, ipsam officiis deserunt cupiditate voluptate, nihil magni minus a doloribus nisi.</p>
      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>