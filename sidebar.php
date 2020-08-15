<?php
/*
 * @Author: gogoend
 * @Date: 2020-06-24 00:17:13
 * @LastEditors: gogoend
 * @LastEditTime: 2020-06-27 10:41:18
 * @FilePath: \gogoend-wordpress-theme\sidebar.php
 * @Description: 
 */
?>
<aside class="main-sidebar">
    <ul>
        <li class="sidebar-block">
            <h2><?php _e('Categories'); ?></h2>
            <ul>
                <?php wp_list_categories('sort_column=name&optioncount=1&hierarchical=0&title_li='); ?>
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