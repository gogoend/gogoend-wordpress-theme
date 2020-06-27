<?php
/*
 * @Author: gogoend
 * @Date: 2020-06-26 15:54:37
 * @LastEditors: gogoend
 * @LastEditTime: 2020-06-28 02:11:11
 * @FilePath: \gogoend-wordpress-theme\404.php
 * @Description: 
 */
?>
<!DOCTYPE html>
<html lang="zh">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('&raquo;',true,'right'); ?><?php bloginfo('name'); ?> </title>

	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title=" Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php wp_get_archives('type=monthly&format=link'); ?>
	<?php wp_head(); ?>
</head>

<body>
	<div class="go-global-whole-wrap go-page-404">
		<?php get_header(); ?>
		<div class="go-page-main-wrap">
			<main class="go-page-main global-container-max-w">
				<div class="go-post-article-wrap">
					<h1>404 Not Found</h1>
					<h2>
						您所访问的页面不存在
					</h2>
					<h3>就像站长没有女朋友
						<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=915584781&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:915584781:47" alt="点击这里给我发消息" title="点击这里给我发消息" /></a>
					</h3>
				</div>
			</main>
		</div>
		<?php get_footer(); ?>
	</div>
</body>
<html>