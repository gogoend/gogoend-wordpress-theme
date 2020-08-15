<?php
/*
 * @Author: gogoend
 * @Date: 2020-06-23 21:22:38
 * @LastEditors: gogoend
 * @LastEditTime: 2020-08-05 21:55:16
 * @FilePath: \gogoend-wordpress-theme\front-page.php
 * @Description: 增加页脚
 */

/**
 * Gogoend index file
 *
 * @category WordPress
 * @package  Gogoend
 * @author   gogoend <gogoend@qq.com>
 * @license  MIT
 * */
?>

<!DOCTYPE html>
<html lang="zh" class="gogoend">

<head>
	<?php 
		include 'public_head_el.php';
	?>
</head>

<body>
  <div class="global-whole-wrap front-page-wrap">
    <?php get_header(); ?>
    <div class="page-main-wrap">
      <main class="page-main">
        <div class="slide-wrap">
          <section class="slide-item">
            <div class="content global-container-max-w">
              <section class="content-item" tabindex="0">
                <div>
                  <h1>博客</h1>
                  <p>写点东西，记录收获</p>
                </div>
                <div>
                  <ul class="link-list post-list-mini">
                    <?php
                    // 查询
                    query_posts('posts_per_page=6');

                    // // 循环
                    // while (have_posts()) : the_post();
                    //   echo '<li>';
                    //   the_title();
                    //   echo '</li>';
                    // endwhile;

                    ?>

                    <?php if (have_posts()) : ?>
                      <?php while (have_posts()) : the_post(); ?>
                        <?php
                        $pId = get_the_ID();
                        $pTitle = get_the_title();
                        $pLink = get_the_permalink();
                        echo <<<EOF
<li data-id="post-$pId" class="post-item">
<header class="post-title">
  <a title="$pTitle" href="$pLink">
    $pTitle
  </a>
</header>
</li>
EOF;
                        ?>
                      <?php endwhile; ?>
                    <?php else : ?>
                    <?php endif; ?>
                    <?php
                    // 重置查询
                    wp_reset_query();
                    ?>
                  </ul>
                  <a class="view-all-btn" href="./articles/">查看更多...</a>
                </div>
              </section>
              <section class="content-item" tabindex="0">
                <div>
                  <h1>文档与项目</h1>
                  <ul class="link-list project-abstract-list">
                    <li class="link-item">
                      <section>
                        <header>
                          <h2>Three.js</h2>
                          <span>
                            <a href="https://threejs.org/docs/index.html#manual/zh/introduction/Creating-a-scene">看文档</a>
                            <iframe src="https://ghbtns.com/github-btn.html?user=gogoend&repo=three.js&type=star&count=false" frameborder="0" scrolling="0" width="55px" height="20px"></iframe>
                          </span>
                        </header>
                        <article>基于WebGL的3D渲染库，中文文档的某些部分由本人翻译。</article>
                      </section>
                    </li>
                    <li class="link-item">
                      <section>
                        <header>
                          <h2>Anikyu</h2>
                          <iframe src="https://ghbtns.com/github-btn.html?user=gogoend&repo=anikyu&type=star&count=false" frameborder="0" scrolling="0" width="55px" height="20px"></iframe>
                        </header>
                        <article>一个简易的关键帧补间库，源于本人的某个Demo。</article>
                      </section>
                    </li>
                    <li class="link-item">
                      <section>
                        <header>
                          <h2>FE Lab</h2>
                          <iframe src="https://ghbtns.com/github-btn.html?user=gogoend&repo=gogoend.github.io&type=star&count=false" frameborder="0" scrolling="0" width="55px" height="20px"></iframe>
                        </header>
                        <article>Demo专用仓库，实践各种有趣的想法与代码，Issue中包含博客草稿。</article>
                      </section>
                    </li>
                  </ul>
                </div>
                <div>
                  <a class="view-all-btn" href="https://github.com/gogoend?tab=repositories">查看更多...</a>
                </div>
              </section>
              <section class="content-item" tabindex="0">
                <div>
                  <h1>关于我</h1>
                </div>
                <div style="
                  flex: 1;
                  align-items: center;
                  display: flex;"
                >
                  <p>
                    性別男，未婚。<br />
                    没对象。<br />
                    帮我介绍一个？<br /><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&amp;uin=915584781&amp;site=qq&amp;menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:915584781:47" alt="点击这里给我发消息" title="点击这里给我发消息"></a></p>
                </div>
              </section>
            </div>
          </section>
          <section class="slide-item">
            <div class="footer-above-wrap"></div>
            <?php get_footer(); ?>
          </section>
        </div>
      </main>

    </div>

  </div>
</body>

</html>