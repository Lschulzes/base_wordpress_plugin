<?php

namespace Inc\Base;

/**
 * 
 */
class Enqueue extends BaseController
{
  public function register()
  {
    add_action('admin_enqueue_scripts', [$this, 'enqueue']);
  }

  public function enqueue()
  {
    // here we enqueue the scripts
    wp_enqueue_style('mypluginstyle', $this->plugin_url . 'assets/style.css');
    wp_enqueue_script('mypluginscript', $this->plugin_url . 'assets/script.js');
  }
}
