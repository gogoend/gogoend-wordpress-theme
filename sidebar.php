<?php
/*
 * @Author: gogoend
 * @Date: 2020-06-24 00:17:13
 * @LastEditors: gogoend
 * @LastEditTime: 2020-06-27 03:30:11
 * @FilePath: \gogoend-wordpress-theme\sidebar.php
 * @Description: 
 */
?>
<aside class="go-main-sidebar">
    <ul>
        <li class="search">
            <?php include(TEMPLATEPATH . './searchform.php') ?>
        </li>
        <li class="sidebar-block">
            <h2><?php _e('Categories'); ?></h2>
            <ul>
                <?php wp_list_categories('sort_column=name&optioncount=1&hierarchical=0'); ?>
            </ul>
        </li>
        <li class="sidebar-block">
            <h2><?php _e('Archives'); ?></h2>
            <ul>
                <?php wp_get_archives('type=monthly'); ?>
            </ul>
        </li>
        <?php wp_list_bookmarks(); ?>
    </ul>
</aside>