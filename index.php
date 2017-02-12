<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package _arch
 * @author darwin <darwin301194@gmail.com>
 */
get_header(); ?>
  <!-- Static first -->
  <article class="project__item">
    <a href="#" class="project__link" style="background-image: url('//im.vsco.co/1/54ed042e3da5c2400309/5883f9db3ab05340196fde1c/vsco_012217.jpg?w=1280')">
      <div class="project-content">
        <div>December 22 — 2016</div>
        <div class="project-content__name">SPACE 10 x Norgram</div>
      </div>
    </a>
  </article>
  <article class="project__item">
    <a href="#" class="project__link" style="background-image: url('//im.vsco.co/1/547c813590bf11406060/5883fad344705f27d500000d/73d0c491-c023-47cc-921e-b82810a6514c-1244775146.jpg?w=1280')">
      <div class="project-content">
        <div>January 3 — 2017</div>
        <div class="project-content__name">The Dots Digital Platform</div>
      </div>
    </a>
  </article>
  <article class="project__item">
    <a href="#" class="project__link" style="background-image: url('///im.vsco.co/1/5552ebdb3efeb4002213/5883f8881ed6314001ed5a50/vsco_012217.jpg?w=1280')">
      <div class="project-content">
        <div>December 22 — 2016</div>
        <div class="project-content__name">Phosphene - New digital precense</div>
      </div>
    </a>
  </article>
<?php get_footer(); ?>
