<?php

/**
 * Initalize Plugin Links
 * @package LschulzePlugin
 */

namespace Inc\Base;

class Links extends BaseController
{
  public function register()
  {
    add_filter("plugin_action_links_" . $this->plugin_basename,  [$this, 'settings_link']);
  }

  public function settings_link($links)
  {
    // add Custom settings link
    $settings_link = '<a href="admin.php?page=lschulze_plugin">Settings</a>';
    array_push($links, $settings_link);
    return $links;
  }
}
