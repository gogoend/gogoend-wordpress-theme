<?php // Do not delete these lines
/*
 * @Author: gogoend
 * @Date: 2020-06-24 00:36:16
 * @LastEditors: gogoend
 * @LastEditTime: 2020-06-28 09:46:29
 * @FilePath: \gogoend-wordpress-theme\comments.php
 * @Description: 评论框
 */
if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) die('Please do not load this page directly. Thanks!');
if (!empty($post->post_password)) { // if there's a password
	if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
?>

		<h2><?php _e('Password Protected'); ?></h2>
		<p><?php _e('Enter the password to view comments.'); ?></p>

<?php return;
	}
}

/* This variable is for alternating comment background */

$oddcomment = 'alt';

?>

<!-- You can start editing here. -->

<?php if ($comments) : ?>
	<h3 id="comments">
		&#8220;<?php the_title(); ?>&#8221; 共有 <?php comments_number('0 条', '1 条', '% 条'); ?>回应。
	</h3>

	<ol class="commentlist">
		<?php foreach ($comments as $comment) : ?>

			<li class="<?php echo $oddcomment; ?>" id="comment-<?php comment_ID() ?>">

				<div class="commentmetadata">
					<strong>
						<?php comment_author_link() ?>
					</strong> <?php /*_e('on');*/ ?>
					在
					<a href="#comment-<?php comment_ID() ?>" title="">
						<?php comment_date('Y年Md日') ?><?php comment_time('h:m') ?>
					</a>
					<?php /*_e('Said&#58;');*/ ?>评论：
					<?php edit_comment_link('编辑评论', '', ''); ?>
					<?php if ($comment->comment_approved == '0') : ?>
						<em>您的评论正在被审核。</em>
					<?php endif; ?>
				</div>

				<?php comment_text() ?>
			</li>

			<?php /* Changes every other comment to a different class */
			if ('alt' == $oddcomment) $oddcomment = '';
			else $oddcomment = 'alt';
			?>

		<?php endforeach; /* end for each comment */ ?>
	</ol>

<?php else : // this is displayed if there are no comments so far 
?>

	<?php if ('open' == $post->comment_status) : ?>
		<!-- If comments are open, but there are no comments. -->
	<?php else : // comments are closed 
	?>

		<!-- If comments are closed. -->
		<p class="nocomments">本文评论未开启。</p>

	<?php endif; ?>
<?php endif; ?>


<?php if ('open' == $post->comment_status) : ?>

	<h3 id="respond">评论</h3>

	<?php if (get_option('comment_registration') && !$user_ID) : ?>
		<p>请在<a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">登录</a>后再发表评论。</p>

	<?php else : ?>

		<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
			<?php if ($user_ID) : ?>

				<p>已作为<a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>登录。<a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="注销登录">注销 &raquo;</a></p>

			<?php else : ?>

				<p><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="40" tabindex="1" />
					<label for="author"><small>您的姓名 <?php if ($req) echo "(必填)"; ?></small></label></p>

				<p><input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="40" tabindex="2" />
					<label for="email"><small>您的邮箱（不会被公开） <?php if ($req) echo "(必填)"; ?></small></label></p>

				<!-- <p><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="40" tabindex="3" />
					<label for="url"><small>您的站点URL</small></label></p> -->

			<?php endif; ?>

			<!--<p><small><strong>XHTML:</strong> <?php _e('You can use these tags&#58;'); ?> <?php echo allowed_tags(); ?></small></p>-->

			<p><textarea name="comment" id="comment" cols="40" rows="10" tabindex="4"></textarea></p>

			<p><input name="submit" type="submit" id="submit" tabindex="5" value="发表评论" />
				<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
			</p>

			<?php do_action('comment_form', $post->ID); ?>

		</form>

	<?php endif; // If registration required and not logged in 
	?>

<?php endif; // if you delete this the sky will fall on your head 
?>