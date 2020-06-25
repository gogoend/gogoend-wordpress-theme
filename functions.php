<?php
/*
 * @Author: gogoend
 * @Date: 2020-06-24 00:07:50
 * @LastEditors: gogoend
 * @LastEditTime: 2020-06-24 00:09:20
 * @FilePath: \gogoend\function.php
 * @Description: 窗体化侧边栏章节（跳过，无奈没有相关文件）
 */

add_filter('excerpt_length', 'gogoend_custom_excerpt_length', 999);
function gogoend_custom_excerpt_length( $length ) 
{
    return 500;
}