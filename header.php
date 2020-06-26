<?php
/*
* @Author: gogoend
* @Date: 2020-06-23 21:32:23
 * @LastEditors: gogoend
 * @LastEditTime: 2020-06-27 03:28:02
 * @FilePath: \gogoend-wordpress-theme\header.php
* @Description:
*/
?>
<header class="global-header">
    <h1>
        <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
    </h1>
    <!-- <?php bloginfo('description'); ?> -->
    <?php wp_list_pages('0'); ?>

</header>
