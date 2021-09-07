<?php

/**
 * Store all the classes inside an array
 * @package LschulzePlugin
 */

namespace Inc;

class Init
{
  public static function get_services()
  {
    // returns each service entire class
    return [
      Pages\Admin::class,
      Base\Enqueue::class,
      Base\Links::class
    ];
  }
  /**
   * Loop through classes, initialize and call the register method if exists
   */
  public static function register_services()
  {
    foreach (self::get_services() as $class) {
      $service = self::instantiate($class);
      if (method_exists($service, 'register')) {
        $service->register();
      }
    }
  }
  /**
   * @param class $class class from the services array
   * @return class instance new instance of the class
   */
  private static function instantiate($class)
  {
    return new $class();
  }
}
