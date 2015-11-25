<?php
/**
 * Template Name: Publications
 */

get_header(); ?>

<body class='add-nav-padding'>
  <div class="container add-nav-padding">
    <div id="external-pubs">
      <a href="http://scholar.google.com/citations?user=Xnk4W5cAAAAJ&hl=en&oi=ao">
        <div id="scholar">Google Scholar</div>
      </a>
      <a href="http://www.dblp.org/pers/hc/g/Ghosh:Joydeep.html">
        <div id="dblp">DBLP</div>
      </a>
    </div>
    <hr class="featurette-divider" />
    <h3>Selected Publications on Selected Topics:</h3>
    <h2 id="pub-title">All Publications</h2>
    <table id="pubTable" class="table"></table>
    <?php if (have_posts()) : while (have_posts()): the_post(); ?>
    <pre id="bibtex" style="display: none"><?php echo get_the_content(); ?></pre>
    <script src='<?php echo get_template_directory_uri(); ?>/static/js/bib-list-min.js'></script>
    <script>
      $(document).ready(function() {
        bibtexify('#bibtex', 'pubTable', {visualization: false});
      });
    </script>
    <hr class="featurette-divider" />
    <?php endwhile; else: ?>
    <p><?php _e('Sorry, no posts matches your criteria.'); ?></p>
    <?php endif; ?>
  </div>
  <script>
    $(function() {
      $('thead').each(function(i) {
        $('th').each(function(i) {
          if ($(this).text() == 'Type') {
            $(this).hide();
          }
        });
      });
    });
  </script>
</body>
<?php get_footer(); ?>
