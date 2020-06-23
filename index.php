<?php
/*
 * @Author: gogoend
 * @Date: 2020-06-23 21:22:38
 * @LastEditors: gogoend
 * @LastEditTime: 2020-06-23 23:11:14
 * @FilePath: \gogoend\index.php
 * @Description: 一点点代码风格整理
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
    <ul>
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <li>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <section><?php the_content(); ?></section>
            <aside>
              <div>
                <?php _e('Filed under:'); ?>
              </div>
              <div>
                <?php the_category(',') ?>
              </div>
              <div>
                <?php _e('by'); ?>
              </div>
              <div>
                <?php the_author(); ?>
              </div>
              <div>
                <?php comments_popup_link('No Comments »', '1 Comment »', '% Comments »'); ?>
              </div>
              <div>
                <?php edit_post_link('Edit', ' | ', ''); ?>
              </div>
            </aside>
          </li>
        <?php endwhile; ?>
      <?php endif; ?>
    </ul>
  </main>
  <aside></aside>
  <footer></footer>
</body>

</html>