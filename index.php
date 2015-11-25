<?php get_header(); ?>
<body class='add-nav-padding'>
  <div class="container">
    <?php if (have_posts()) : while (have_posts()): the_post(); ?>
    <div class="post">
      <h1><?php the_title(); ?></h1>
      <?php the_content(__('(more...)')); ?>
      <hr />
      <?php endwhile; else: ?>
      <p><?php _e('Sorry, no posts matches your criteria.'); ?></p>
      <?php endif; ?>
    </div>
  </div>
</body>
<?php get_footer(); ?>
