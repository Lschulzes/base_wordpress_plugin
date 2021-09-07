<?php

namespace Inc\Pages;

use \Inc\Base\BaseController;

/**
 * 
 */
class Admin extends BaseController
{
  public function register()
  {
    add_action('admin_menu', [$this, 'addAdminPages']);
  }

  public function addAdminPages()
  {
    add_menu_page('Lschulze Plugin', 'lschulze', 'manage_options', 'lschulze_plugin', [$this, 'adminIndex'], 'dashicons-superhero', 110);
  }

  public function adminIndex()
  {
    // require template
    require_once $this->plugin_path . "templates/admin.php";
  }
}
