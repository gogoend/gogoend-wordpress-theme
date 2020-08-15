<?php
/*
 * @Author: gogoend
 * @Date: 2020-06-23 23:58:46
 * @LastEditors: gogoend
 * @LastEditTime: 2020-06-27 03:36:50
 * @FilePath: \gogoend-wordpress-theme\searchform.php
 * @Description: 我是搜索框
 */
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>" itemprop="potentialAction" itemscope itemtype="http://schema.org/SearchAction">
    <meta itemprop="target" content="<?php echo esc_url(home_url('/?s={search} ')); ?>" />
    <i class=""></i>
    <input type="search" class="search-field" placeholder="<?php echo esc_attr_x('查找相关内容',  'placeholder', 'gogoend'); ?>" value="<?php echo get_search_query(); ?>" name="s" title="<?php echo esc_attr('Search', 'gogoend'); ?>" required itemprop="query-input">
    <button type="submit" class="search-submit">搜索</button>
</form>