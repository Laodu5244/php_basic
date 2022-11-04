<!DOCTYPE html>
<html lang="zh-CN">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>首页 - 欧阳克个人博客</title>
  <meta name="keywords" content="博客,个人博客,欧阳克个人博客,PHP" />
  <meta name="description" content="欧阳克是PHP中文网的讲师，愿意把知识分享给大家。" />
  <link rel="stylesheet" id="twentytwelve-style-css" href="static/css/index.css" type="text/css" media="all" />
  <script type="text/javascript" src="static/js/jquery.js"></script>
  <script type="text/javascript" src="static/js/nav.js"></script>
</head>

<body class="home blog custom-background custom-font-enabled single-author">
  <div id="page" class="hfeed site">

    <!-- 头部 -->
    <header id="masthead" class="site-header" role="banner">
      <hgroup>
        <h1 class="site-title">
          <a href="/" rel="home">欧阳克个人博客</a>
        </h1>
        <h2 class="site-description">欧阳克是PHP中文网的讲师，愿意把知识分享给大家</h2>
      </hgroup>
      <nav id="site-navigation" class="main-navigation" role="navigation">
        <ul class="nav-menu">
          <?php
          // 连接数据库 
          $pdo = new PDO('mysql:host=localhost;dbname=tp', 'root', 'sisisi', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8';"));
          $stmt = $pdo->prepare('select * from class order by sort desc');
          $stmt->execute();
          $menu = $stmt->fetchAll();
          ?>
          <li>
            <a href="http://localhost/blog/index.php">
              首页
            </a>
          </li>
          <?php foreach ($menu as $item) { ?>
            <li>
              <a href="http://localhost/blog/index.php?id=<?php echo $item['id'] ?>">
                <?php echo $item['name'] ?>
              </a>
            </li>
          <?php } ?>
        </ul>
      </nav>
    </header>

    <div id="main" class="wrapper">
      <div id="primary" class="site-content">
        <div id="content" role="main">
          <!-- 文章 -->
          <?php
            if (!empty($_GET['id'])) {
              $stmt = $pdo->prepare('select * from article WHERE class_id=' . $_GET['id']);
            } elseif (!empty($_GET['s'])) {
              $stmt = $pdo->prepare('select * from article WHERE title LIKE "%' . $_GET['s'] . '%"');
            } else {
              $stmt = $pdo->prepare('select * from article');
            }
            $stmt->execute();
            // 使用数据库的数据渲染到页面
            $lists = $stmt->fetchAll();

            $stt = $pdo->prepare('SELECT * FROM class');
            $stt->execute();
            $menu = $stt->fetchAll();

            $tmp = [];
            foreach ($menu as $item) {
              $tmp[$item['id']] = $item;
            }
          ?>
          <?php foreach ($lists as $list) { ?>
            <article>
              <header class="entry-header">
                <h1 class="entry-title">
                  <a href="./details.php?id=<?php echo $list['id']; ?>" rel="bookmark">
                    <?php
                    if (isset($list['title'])) {
                      echo $list['title'];
                    }
                    ?>
                  </a>
                </h1>
              </header>
              <?php if (!empty($list['img'])) : ?>
                <img style="width:200px;height:100px;" src="<?php echo $list['img'] ?>" />
              <?php endif; ?>
              <div class="entry-content"><?php echo $list['content'] ?></div>
              <footer class="entry-meta">
                发布于
                <a href="http://localhost/blog/index.php?time=2021-02-18" title="2021-02-18" rel="bookmark">
                  <time class="entry-date" datetime="2021-02-18"><?php echo $list['date'] ?></time>
                </a>。 属于
                <a href="http://localhost/blog/index.php?id=<?php echo $list['class_id']; ?>" title="查看 PHP中的全部文章" rel="category">
                  <?php echo $tmp[$list['class_id']]['name'] ?>
                </a> 分类
              </footer>
            </article>
          <?php } ?>
        </div>
        <!-- 分页器 -->
        <div class="page">
          <nav>
            <ul class="pagination">
              <li class="page-item disabled" aria-disabled="true" aria-label="&laquo; 上一页">
                <span class="page-link" aria-hidden="true">&lsaquo;</span>
              </li>
              <li class="page-item active" aria-current="page">
                <span class="page-link">1</span>
              </li>
              <li class="page-item">
                <a class="page-link" href="/index.php?page=2">2</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="/index.php?page=2" rel="next" aria-label="下一页 &raquo;">&rsaquo;</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>

      <div id="secondary" class="widget-area" role="complementary">
        <aside id="search-2" class="widget widget_search">
          <form role="search" id="searchform" action="" method="POST">
            <div>
              <label class="screen-reader-text" for="s">搜索：</label>
              <input placeholder="搜索" type="text" class="no-border" name="keywords" id="s" />
              <input type="submit" class="btn btn-default" id="searchsubmit" value="搜索" />
            </div>
          </form>
        </aside>

        <aside id="recent-posts-2" class="widget widget_recent_entries">
          <h3 class="widget-title">热门文章</h3>
          <ul>
            <li>
              <font style="color:#7a7a7a;">[0]</font>&nbsp;
              <a href="/details.php?id=20" title="构建Nginx和PHP镜像">构建Nginx和PHP镜像</a>
            </li>
            <li>
              <font style="color:#7a7a7a;">[1]</font>&nbsp;
              <a href="/details.php?id=10" title="Mysql 触发器基础">Mysql 触发器基础</a>
            </li>
          </ul>
        </aside>

        <aside class="widget widget_recent_entries">
          <h3 class="widget-title">最近更新</h3>
          <ul>
            <li>
              <font style="color:#7a7a7a;">[0]</font>&nbsp;
              <a href="/details.php?id=20" title="构建Nginx和PHP镜像">构建Nginx和PHP镜像</a>
            </li>
            <li>
              <font style="color:#7a7a7a;">[1]</font>&nbsp;
              <a href="/details.php?id=10" title="PHP常见的魔术常量">PHP常见的魔术常量</a>
            </li>
          </ul>
        </aside>

        <aside id="archives-2" class="widget widget_archive">
          <h3 class="widget-title">文章归档</h3>
          <ul>
            <?php
            $widget = [
              ['time' => '2020年10月', 'like' => '(1)'],
              ['time' => '2020年9月', 'like' => '(3)'],
              ['time' => '2020年8月', 'like' => '(4)'],
              ['time' => '2020年7月', 'like' => '(2)'],
              ['time' => '2020年6月', 'like' => '(1)'],
              ['time' => '2020年5月', 'like' => '(13)'],
              ['time' => '2020年4月', 'like' => '(3)'],
              ['time' => '2020年3月', 'like' => '(8)'],
              ['time' => '2020年2月', 'like' => '(3)'],
              ['time' => '2020年1月', 'like' => '(2)'],
            ];
            ?>
            <?php foreach ($widget as $w) { ?>
              <li>
                <a href="/index.php?time=2020-10" title="2020-10">
                  <?php echo $w['time']; ?>
                </a>&nbsp;
                <font style="color:#7a7a7a;">
                  <?php echo $w['like']; ?>
                </font>
              </li>
            <?php } ?>
          </ul>
        </aside>
      </div>
    </div>

    <footer id="colophon" role="contentinfo">
      <div class="site-info">
        <span>友情链接：</span>
        <a href="https://www.php.cn" target="_blank">PHP中文网</a>
      </div>
    </footer>
    <footer role="contentinfo" style="margin-top:0;">
      <div class="site-info" style="text-align:center;">
        <span>
          <a href="https://beian.miit.gov.cn" target="_blank">苏ICP备2020058653号-1</a>
        </span>
      </div>
    </footer>
  </div>

<script>
  $(function() {
    $("#searchsubmit").click(function() {
      if ($("#s").val() != '') {
        location.href = "http://localhost/blog/index.php?s=" + $("#s").val();
      }
      return false;
    });
  });
</script>

<style id="custom-background-css">
body.custom-background {
  background-color: #e6e6e6;
}

input.btn-default:focus,
input.no-border:focus {
  outline: none;
}

input.no-border {
  font-size: 15px;
}
</style>

</body>

</html>