<?php
/*
 * @Author: gogoend
 * @Date: 2020-06-24 00:07:50
 * @LastEditors: gogoend
 * @LastEditTime: 2020-06-27 23:36:57
 * @FilePath: \gogoend-wordpress-theme\functions.php
 * @Description: 窗体化侧边栏章节（跳过，无奈没有相关文件）
 */
// 获得摘要 - 文章第一段落
add_filter('wp_trim_excerpt', 'custom_excerpt', 10, 2);
function custom_excerpt($text, $raw_excerpt)
{
    $content = apply_filters('the_content', get_the_content()); //原始文章的正文内容
    return mb_substr($content, 0, mb_strpos($content, '</p>') + 4, 'utf-8');
}

// 获得摘要 - 文章前500字
// add_filter('excerpt_length', 'gogoend_custom_excerpt_length', 999);
// function gogoend_custom_excerpt_length($length)
// {
//     return 500;
// }

// 点击量统计
/*文章浏览量*/
function record_visitors()
{
    if (is_singular()) {
        global $post;
        $post_ID = $post->ID;
        if ($post_ID) {
            $post_views = (int) get_post_meta($post_ID, 'views', true);
            if (!update_post_meta($post_ID, 'views', ($post_views + 1))) {
                add_post_meta($post_ID, 'views', 1, true);
            }
        }
    }
}
add_action('wp_head', 'record_visitors');
/// 函数名称：post_views  
/// 函数作用：取得文章的阅读次数  
function post_views($before = '(点击 ', $after = ' 次)', $echo = 1)
{
    global $post;
    $post_ID = $post->ID;
    $views = (int) get_post_meta($post_ID, 'views', true);
    if ($echo) echo $before, number_format($views), $after;
    else return $views;
}
