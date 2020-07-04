<?php
/*
* @Author: gogoend
* @Date: 2020-06-23 21:32:23
 * @LastEditors: gogoend
 * @LastEditTime: 2020-07-04 15:01:33
 * @FilePath: \gogoend-wordpress-theme\header.php
* @Description:
*/
?>
<header class="go-global-header">
    <div class="go-global-header-wrap global-container-max-w">
        <div class="logo">
            <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
        </div>
        <!-- <?php
                // bloginfo('description');
            ?> -->
        <!-- <ul class="pages-link">
            <?php
            // wp_list_pages('title_li=');
            ?>
        </ul> -->
            <?php wp_nav_menu(
                array(
                    'theme_location'  => '', //导航别名
                    'menu'   => 'top-menu', //期望显示的菜单
                    'container'  => 'div',  //容器标签
                    'container_class' => 'go-top-link-list-wrap', //ul父节点class值
                    'container_id'  => '',  //ul父节点id值
                    'menu_class'   => 'go-top-link-list',   //ul节点class值
                    'menu_id'   => '',  //ul节点id值
                    'echo'  => true, //是否输出菜单，默认为真
                    'fallback_cb' => 'wp_page_menu',  //菜单不存在时，返回默认菜单，设为false则不返回
                    'before' => '', //链接前文本
                    'after'  => '', //链接后文本
                    'link_before'  => '',   //链接文本前
                    'link_after'  => '', //链接文本后
                    'items_wrap'  => '<ul id="%1$s" class="%2$s">%3$s</ul>',   //如何包装列表
                    'depth' => 0,   //菜单深度，默认0
                    'walker' => ''  //自定义walker
                )
            ); ?>
        <div class="go-search-form-wrap">
            <?php include(TEMPLATEPATH . '/searchform.php') ?>
        </div>
    </div>
</header>