<?php
/*
 * @Author: gogoend
 * @Date: 2020-06-24 00:17:13
 * @LastEditors: gogoend
 * @LastEditTime: 2020-06-24 00:19:07
 * @FilePath: \gogoend\sidebar.php
 * @Description: 
 */
?>
<aside>
    <ul>
        <li class="search">
            <?php include(TEMPLATEPATH . './searchform.php') ?>
        </li>
        <li class="calendar">
            <h2><?php _e('Calendar'); ?></h2>
            <?php get_calendar(); ?>
        </li>
        <?php wp_list_pages(); ?>
        <li>
            <h2><?php _e('Categories'); ?></h2>
            <ul>
                <?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>
            </ul>
        </li>
        <li>
            <h2><?php _e('Archives'); ?></h2>
            <ul>
                <?php wp_get_archives('type=monthly'); ?>
            </ul>
        </li>
        <?php get_links_list(); ?>
        <li>
            <h2><?php _e('Meta'); ?></h2>
            <ul>
                <?php wp_register(); ?>

                <li><?php wp_loginout(); ?></li>
                <?php wp_meta(); ?>
            </ul>
        </li>
    </ul>
</aside>