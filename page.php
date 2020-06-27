<?php
/*
 * @Author: gogoend
 * @Date: 2020-06-24 00:23:37
 * @LastEditors: gogoend
 * @LastEditTime: 2020-06-28 01:16:39
 * @FilePath: \gogoend-wordpress-theme\page.php
 * @Description: 
 */
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
    <div class="go-global-whole-wrap">

        <?php get_header(); ?>
        <div class="go-page-main-wrap">

            <main class="go-page-main global-container-max-w">
                <div class="go-post-article-wrap">
                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                            <section data-id="post-<?php the_ID(); ?>" class="go-post-article-area">
                                <h1><a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                                <aside class="go-post-info">
                                    <span>
                                        发布于<?php echo get_the_time('Y年m月d日 H:i') ?>，点击数：<?php post_views('', ''); ?>
                                    </span>
                                </aside>
                                <hr />
                                <article class="go-post-article clear-fix markdown-body"><?php the_content(); ?></article>
                                <?php wp_link_pages('<strong>Pages:</strong>', '', 'number'); ?>
                                <!-- 评论框 -->
                                <hr class="go-end-line" />
                                <div class="comments-template">
                                    <?php comments_template(); ?>
                                </div>
                            </section>
                        <?php endwhile; ?>
                        
                        <nav class="go-change-article-nav">
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