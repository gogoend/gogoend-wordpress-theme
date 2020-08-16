<?php
/*
 * @Author: gogoend
 * @Date: 2020-06-24 00:23:37
 * @LastEditors: gogoend
 * @LastEditTime: 2020-08-05 21:57:05
 * @FilePath: \gogoend-wordpress-theme\single.php
 * @Description: 
 */
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
                <div class="post-article-wrap">
                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                            <section data-id="post-<?php the_ID(); ?>" class="post-article-area">
                                <h1><?php the_title(); ?></h1>
                                <aside class="post-info">
                                    <span>
                                        发布于<?php echo get_the_time('Y年m月d日 H:i') ?>，点击数：<?php post_views('', ''); ?>
                                    </span>
                                    <span class="category">
                                        分类：<?php the_category(' ') ?>
                                    </span>
                                    <!-- <div class="tag">
                                        标签：<?php the_tags(' ') ?>
                                    </div> -->
                                    <!-- <div>
                                            <?php _e('by'); ?>
                                            <?php the_author(); ?>
                                            <?php edit_post_link('Edit', ' | ', ''); ?>
                                        </div> -->
                                </aside>
                                <hr />
                                <article class="post-article clear-fix markdown-body"><?php the_content(); ?></article>
                                <?php wp_link_pages('<strong>Pages:</strong>', '', 'number'); ?>
                                <!-- 评论框 -->
                                <hr class="end-line" />
                                <div class="comments-template">
                                    <?php comments_template(); ?>
                                </div>
                            </section>
                        <?php endwhile; ?>
                        
                        <nav class="change-article-nav">
                            <!-- 上一篇 下一篇 -->
                            <section class="prev">
                                <?php previous_post_link('&laquo;%link') ?>
                            </section>
                            <section class="next">
                                <?php next_post_link('%link&raquo;') ?>
                            </section>
                        </nav>
                    <?php else : ?>
                        <div class="post">
                            <h2><?php _e('Not Found'); ?></h2>
                        </div>
                    <?php endif; ?>
                </div>
                <?php get_sidebar(); ?>
            </main>
        </div>
        <?php get_footer(); ?>
    </div>
</body>

</html>