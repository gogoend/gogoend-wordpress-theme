<?php
/*
 * @Author: gogoend
 * @Date: 2020-06-23 21:22:38
 * @LastEditors: gogoend
 * @LastEditTime: 2020-06-27 03:21:03
 * @FilePath: \gogoend-wordpress-theme\index.php
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
  <link rel="stylesheet" href="./wp-content/themes/gogoend-wordpress-theme/_draft_/style/common-style.css" />
</head>

<body>
  <?php get_header(); ?>
  <main class="go-page-main-wrap">
    <ul class="go-post-list">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <li data-id="post-<?php the_ID(); ?>" class="go-post-item">
            <h2 class="post-title">
              <a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
              </a>
            </h2>
            <section class="post-excerpt">
              <?php
                the_excerpt();
              ?>
            </section>
            <aside class="go-post-aside-info">
              <div class="go-post-category">
                分类：<?php the_category('&nbsp;') ?>
              </div>
              <!-- <div>
                <?php _e('by'); ?>
              </div>
              <div>
                <?php the_author(); ?>
              </div> -->
              <section>
                <div class="go-post-comments">
                  <?php comments_popup_link('评论(0)', '评论(1)', '评论(%)'); ?>
                </div>
                <div class="go-post-edit">
                  <?php edit_post_link('Edit', ' | ', ''); ?>
                </div>
              </section>
            </aside>
          </li>
        <?php endwhile; ?>
        <nav>
        </nav>
      <?php else : ?>
        <li class="go-post">
          <h2><?php _e('Not Found'); ?></h2>
        </li>
      <?php endif; ?>
    </ul>
    <?php posts_nav_link('in between', 'befor', 'after'); ?>

    <?php get_sidebar(); ?>
  </main>
  <?php get_footer(); ?>
</body>

</html>