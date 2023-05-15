<?php

/**
 * Funderpro functions and definitions
 *
 * @package Funderpro
 */

define("TEXT_DOMAIN", "Funderpro");

$library_includes = [

  // Includes
  'inc/theme.php',                    // Theme functions
  'inc/extras.php',                   // Extra functions
  'inc/classes/custom_menu_walker.php', // Custom menu walker

];

foreach ($library_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(
      sprintf('Error locating %s for inclusion', $file),
      E_USER_ERROR
    );
  }

  require_once $filepath;
}
unset($file, $filepath);

function register_secondary_menu() {
  register_nav_menu( 'secondary-menu', __( 'Secondary Menu' ) );
}
add_action( 'after_setup_theme', 'register_secondary_menu' );