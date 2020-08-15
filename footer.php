<?php
/*
 * @Author: gogoend
 * @Date: 2020-06-24 00:19:28
 * @LastEditors: gogoend
 * @LastEditTime: 2020-07-04 15:06:14
 * @FilePath: \gogoend-wordpress-theme\footer.php
 * @Description: 
 */
?>
<footer class="global-footer">
    <div class="global-footer-content global-container-max-w">
        <section class="copyright">
            Copyright © 2018-2020 <?php bloginfo('name'); ?><br />
            <a href="http://beian.miit.gov.cn/">滇ICP备18002771号-1</a>
        </section>
        <?php wp_nav_menu(
                array(
                    'theme_location'  => '', //导航别名
                    'menu'   => 'social-media', //期望显示的菜单
                    'container'  => '',  //容器标签
                    'container_class' => '', //ul父节点class值
                    'container_id'  => '',  //ul父节点id值
                    'menu_class'   => 'social-media-menu',   //ul节点class值
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

    </div>
</footer>
<?php include(TEMPLATEPATH . '/additional-js-script.php') ?>