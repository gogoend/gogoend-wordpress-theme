<?php
/*
* @Author: gogoend
* @Date: 2020-06-23 21:32:23
 * @LastEditors: gogoend
 * @LastEditTime: 2020-06-27 15:50:50
 * @FilePath: \gogoend-wordpress-theme\header.php
* @Description:
*/
?>
<header class="go-global-header">
    <div class="go-global-header-wrap global-container-max-w">
        <div class="logo">
            <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
        </div>
        <!-- <?php bloginfo('description'); ?> -->
        <ul class="pages-link">
            <?php wp_list_pages('title_li='); ?>
        </ul>
        <div class="go-search-form-wrap">
            <?php include(TEMPLATEPATH . '/searchform.php') ?>
        </div>
    </div>
</header>