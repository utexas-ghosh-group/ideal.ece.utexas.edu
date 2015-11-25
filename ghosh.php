<?php
/**
 * Template Name: Ghosh's Websites
 */
?>

<html>
<head>
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <title><?php wp_title(''); ?></title>
  <link href='<?php bloginfo('stylesheet_url'); ?>' rel='stylesheet'>
  <link href='<?php echo get_template_directory_uri(); ?>/static/css/bootstrap.min.css' rel='stylesheet'>
  <link href='<?php echo get_template_directory_uri(); ?>/static/css/style.css' rel='stylesheet'>
  <link href='<?php echo get_template_directory_uri(); ?>/static/elements/ideal-person.php' rel='import'>
  <script src='<?php echo get_template_directory_uri(); ?>/static/js/jquery-1.10.2.js'></script>
  <script src='<?php echo get_template_directory_uri(); ?>/static/js/bootstrap.min.js'></script>
  <script src='<?php echo get_template_directory_uri(); ?>/static/js/masonry.pkgd.min.js'></script>
</head>
<header>
  <nav class='navbar navbar-default navbar-fixed-top navbar-inverse' role='navigation'>
    <div class='container'>
      <div class='navbar-header'>
        <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='.navbar-ex1-collapse'>
          <span class='sr-only'>Toggle navigation</span>
          <span class='icon-bar'></span>
          <span class='icon-bar'></span>
          <span class='icon-bar'></span>
        </button>
      </div>
      <div class='collapse navbar-collapse navbar-ex1-collapse'>
        <?php wp_nav_menu(array('theme_location' => 'ghosh-menu', 'items_wrap' => '<ul id="%1$s" class="%2$s nav navbar-nav">%3$s</ul>')); ?>
      </div>
    </div>
  </nav>
</header>
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
