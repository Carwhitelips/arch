<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till </header>
 *
 * @package _arch
 * @author: darwin <darwin301194@gmail.com>
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('|','true','right'); ?><?php bloginfo('name'); ?></title>
    <link href="<?php bloginfo('template_directory');?>/arch.css" rel="stylesheet">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <!-- <header class="header">
      <a href="#" class="site-nav__home-link">Arch.</a>
      <nav class="site-nav">
        <ul class="site-nav__list">
          <li class="site-nav__item"><a href="#" class="site-nav__link">photographs</a></li>
          <li class="site-nav__item"><a href="#" class="site-nav__link">about us</a></li>
        </ul>
      </nav>
    </header> -->
