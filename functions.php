<?php

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __('Header Menu'),
      'ghosh-menu' => __('Ghosh Personal Page Menu'),
      'left-footer-menu' => __('Left Footer Menu'),
      'right-footer-menu' => __('Right Footer Menu')
    )
  );
}
add_action('init', 'register_my_menus');

?>
