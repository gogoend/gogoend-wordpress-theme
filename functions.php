<?php
/*
 * @Author: gogoend
 * @Date: 2020-06-24 00:07:50
 * @LastEditors: gogoend
 * @LastEditTime: 2020-06-27 03:49:56
 * @FilePath: \gogoend-wordpress-theme\functions.php
 * @Description: 窗体化侧边栏章节（跳过，无奈没有相关文件）
 */

add_filter('wp_trim_excerpt', 'custom_excerpt', 10, 2);
function custom_excerpt($text, $raw_excerpt)
{
    $content = apply_filters('the_content', get_the_content()); //原始文章的正文内容
    return mb_substr($content, 0, mb_strpos($content, '</p>') + 4, 'utf-8');
}

// add_filter('excerpt_length', 'gogoend_custom_excerpt_length', 999);
// function gogoend_custom_excerpt_length($length)
// {
//     return 500;
// }
