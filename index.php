<?php
/*
 * @Author: gogoend
 * @Date: 2020-06-23 21:22:38
 * @LastEditors: gogoend
 * @LastEditTime: 2020-06-23 22:56:30
 * @FilePath: \gogoend\index.php
 * @Description: 加入主循环 打印日志标题
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
  <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>

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
  <?php get_header(); ?>
  <main>
    <?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>
      <?php the_title(); ?>
    <?php endwhile; ?>
    <?php endif; ?>
  </main>
  <aside></aside>
  <footer></footer>
</body>

</html>