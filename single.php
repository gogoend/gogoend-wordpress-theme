<?php
/*
 * @Author: gogoend
 * @Date: 2020-06-24 00:23:37
 * @LastEditors: gogoend
 * @LastEditTime: 2020-06-24 00:40:01
 * @FilePath: \gogoend\single.php
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
    <?php get_header(); ?>
    <main>
        <ul>
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <li data-id="post-<?php the_ID(); ?>" class="post">
                        <h2><a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <section><?php the_content(); ?></section>
                        <?php link_pages('<strong>Pages:</strong>', '', 'number'); ?>
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
                                <?php edit_post_link('Edit', ' | ', ''); ?>
                            </div>
                        </aside>
                        <!-- 评论框 -->
                        <div class="comments-template">
                            <?php comments_template(); ?>
                        </div>
                    </li>
                <?php endwhile; ?>
                <nav>
                    <!-- 上一篇 下一篇 -->
                    <?php previous_post_link('%link') ?> <?php next_post_link('%link') ?>
                </nav>
            <?php else : ?>
                <div class="post">
                    <h2><?php _e('Not Found'); ?></h2>
                </div>
            <?php endif; ?>
        </ul>
    </main>
    <?php get_sidebar(); ?>
    <?php get_footer(); ?>
</body>

</html>