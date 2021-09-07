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
    add_action('admin_menu', [$this, 'add_admin_pages']);
  }

  public function add_admin_pages()
  {
    add_menu_page('Lschulze Plugin', 'lschulze', 'manage_options', 'lschulze_plugin', [$this, 'admin_index'], 'dashicons-superhero', 110);
  }

  public function admin_index()
  {
    // require template
    require_once $this->plugin_path . "templates/admin.php";
  }
}
