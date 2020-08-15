<?php
/*
 * @Author: gogoend
 * @Date: 2020-06-23 21:22:38
 * @LastEditors: gogoend
 * @LastEditTime: 2020-08-05 21:55:28
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
<html lang="zh" class="gogoend">

<head>
	<?php 
		include 'public_head_el.php';
	?>
</head>

<body>
  <div class="global-whole-wrap">
    <?php get_header(); ?>
    <div class="page-main-wrap">
      <main class="page-main global-container-max-w">
        <div class="post-list-wrap">
          <ul class="post-list">
            <?php if (have_posts()) : ?>
              <?php while (have_posts()) : the_post(); ?>
                <li data-id="post-<?php the_ID(); ?>" class="post-item">
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
                  <aside class="post-aside-info">
                    <section>
                    <span>
                        <?php echo get_the_time('Y年m月d日 H:i') ?>
                      </span>
                      | 
                      <span class="category">
                        分类：<?php the_category('&nbsp;') ?>
                      </span>
                    </section>

                    <!-- <div>
                  <?php _e('by'); ?>
                </div>
                <div>
                  <?php the_author(); ?>
                </div> -->
                    <section class="operation">
                      <span>
                        <?php comments_popup_link('评论(0)', '评论(1)', '评论(%)'); ?>
                      </span>
                      <span>
                        <?php edit_post_link('编辑', ' | ', ''); ?>
                      </span>
                    </section>
                  </aside>
                </li>
              <?php endwhile; ?>
              <nav>
              </nav>
            <?php else : ?>
              <li class="post">
                <h2><?php _e('Not Found'); ?></h2>
              </li>
            <?php endif; ?>
          </ul>
          <?php if (function_exists('wp_pagenavi')) wp_pagenavi(); ?>
        </div>
        <?php get_sidebar(); ?>
      </main>
    </div>
    <?php get_footer(); ?>
  </div>
</body>

</html>