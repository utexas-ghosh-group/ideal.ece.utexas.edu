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
        <?php wp_nav_menu(array('theme_location' => 'header-menu', 'items_wrap' => '<ul id="%1$s" class="%2$s nav navbar-nav">%3$s</ul>')); ?>
      </div>
    </div>
  </nav>
</header>
