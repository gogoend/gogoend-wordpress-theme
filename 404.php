<?php
/*
 * @Author: gogoend
 * @Date: 2020-06-26 17:06:16
 * @LastEditors: gogoend
 * @LastEditTime: 2020-08-05 21:54:52
 * @FilePath: \gogoend-wordpress-theme\404.php
 * @Description: 
 */
?>
<!DOCTYPE html>
<html lang="zh" class="gogoend">

<head>
	<?php 
		include 'public_head_el.php';
	?>
</head>

<body>
	<div class="global-whole-wrap page-404">
		<?php get_header(); ?>
		<div class="page-main-wrap">
			<main class="page-main global-container-max-w">
				<div class="post-article-wrap">
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