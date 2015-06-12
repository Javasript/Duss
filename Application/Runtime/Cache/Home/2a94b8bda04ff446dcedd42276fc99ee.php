<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Duss</title>
    <link href="/Duss/Public/bootstrap.min.css" rel="stylesheet">
    <link href="/Duss/Public/blog.css" rel="stylesheet">
  </head>

  <body>

    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <a class="blog-nav-item active" href="#">首页</a>
          <a class="blog-nav-item" href="#">小组</a>
          <a class="blog-nav-item" href="#">图书</a>
            <?php if(empty($_SESSION['islog'])): ?><a href="<?php echo U('user/login');?>" class="blog-nav-item right">登录</a>
                <a href="<?php echo U('user/register');?>" class="blog-nav-item right">注册</a>
                <?php else: ?>
                <a href='<?php echo U('user/logout');?>' class="blog-nav-item right" >退出</a>
                <a href='<?php echo U('user/profile');?>?name=<?php echo (session('name')); ?>' class="blog-nav-item right" ><?php echo (session('name')); ?></a><?php endif; ?>
          </div>
        </nav>
      </div>
    </div>

    <div class="container px18">
      <div class="row">
        <div class="col-sm-8 blog-main">
          <ul class="pager">
            <li><a href="#">Previous</a></li>
            <li><a href="#">Next</a></li>
          </ul>

        </div><!-- /.blog-main -->

        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          <div class="sidebar-module sidebar-module-inset">
            <h4>关于</h4>
            <p>只为更好的你</p>
          </div>
          <div class="sidebar-module">
            <h4>其它</h4>
            <ol class="list-unstyled">
              <li><a href="#">GitHub</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Facebook</a></li>
            </ol>
          </div>
        </div><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </div><!-- /.container -->

    <div class="blog-footer">
      <p>Power by Thinkphp    Style based Bootstrap</p>
    </div>

  </body>
</html>