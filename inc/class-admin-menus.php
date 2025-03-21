<?php

defined("ABSPATH") || exit;

class Wp_Counsellor_admin_menus
{
  public function __construct()
  {
    add_action("admin_menu", [$this, "add_menus"]);
  }

  public function add_menus()
  {
    add_menu_page(
      "WP Counsellor",
      "Home",
      "manage_options",
      "wp-counsellor",
      [$this, "render_wp_counsellor"],
      "",
      1
    );
  }

  public function render_wp_counsellor() {}
}

new Wp_Counsellor_admin_menus();