<?php
/*
 * @Author: gogoend
 * @Date: 2020-06-23 21:22:38
 * @LastEditors: gogoend
 * @LastEditTime: 2020-07-05 13:07:56
 * @FilePath: \gogoend-wordpress-theme\front-page.php
 * @Description: 增加页脚
 */

/**
 * Gogoend index file
 *
 * @category WordPress
 * @package  Gogoend
 * @author   gogoend <gogoend@qq.com>
 * @license  MIT
 * */
?>

<!DOCTYPE html>
<html lang="zh">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title('&raquo;', true, 'right'); ?><?php bloginfo('name'); ?> </title>

  <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
  <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />

  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

  <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
  <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
  <link rel="alternate" type="application/atom+xml" title=" Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />

  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

  <?php wp_get_archives('type=monthly&format=link'); ?>
  <?php wp_head(); ?>
</head>

<body>
  <div class="go-global-whole-wrap front-page-wrap">
    <?php get_header(); ?>
    <div class="go-page-main-wrap">
      <main class="go-page-main global-container-max-w-0">
        <div class="go-slide-wrap">
          <section class="slide-item">
            <div class="content">
              <section></section>
              <section></section>
              <section></section>
            </div>
          </section>
          <section class="slide-item">
            <div class="footer-above-wrap"></div>
            <?php get_footer(); ?>
          </section>
        </div>
      </main>
      
    </div>

  </div>
</body>

</html>