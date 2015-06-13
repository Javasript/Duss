<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Duss</title>
    <link href="/Duss/Public/css/amazeui.min.css" rel="stylesheet">
    <style media="screen">
      .m-pro{
        display:block;
        list-style:none;
      }
    </style>

  </head>
  <body>

    <header class="am-topbar am-topbar-inverse am-topbar-fixed-top">
  <div class="am-container">
    <h1 class="am-topbar-brand">
      <a href="#" class="am-text">Duss</a>
    </h1>

    <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only"
            data-am-collapse="{target: '#doc-topbar-collapse-4'}"><span class="am-sr-only">导航切换</span> <span
        class="am-icon-bars"></span></button>
      <div class="am-collapse am-topbar-collapse" id="doc-topbar-collapse-4">
        <ul class="am-nav am-nav-pills am-topbar-nav">
          <li class="am-active"><a href="#">首页</a></li>
          <li><a href="#">图书</a></li>
          <li class="am-dropdown" data-am-dropdown>
            <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
              小组 <span class="am-icon-caret-down"></span>
            </a>
            <ul class="am-dropdown-content">
              <li><a href="#">带我去月球</a></li>
              <li><a href="#">还是回地球</a></li>
              <li class="am-disabled"><a href="#">臣妾做不到</a></li>
            </ul>
          </li>
        </ul>

          <?php if(empty($_SESSION['islog'])): ?><div class="am-topbar-right">
                <a href="<?php echo U('user/login');?>"><button class="am-btn am-btn-secondary am-btn-sm am-topbar-btn">登录</button></a>
              </div>
              <div class="am-topbar-right">
                <a href="<?php echo U('user/register');?>"><button class="am-btn am-btn-secondary am-btn-sm am-topbar-btn" >注册</button></a>
              </div>
              <?php else: ?>
              <div class="am-topbar-right">
                <li class="am-dropdown m-pro" data-am-dropdown>

                  <a class="am-dropdown-toggle" data-am-dropdown-toggle href='<?php echo U('user/profile',array('name'=>$username));?>'>
                  <button class="am-btn am-btn-secondary am-btn-sm am-topbar-btn" ><span class="am-icon-user"><?php echo (session('name')); ?></span><span class="am-icon-caret-down"></span></button>
                  </a>
                  <ul class="am-dropdown-content">
                    <li><a href='<?php echo U('user/logout');?>'><span class="am-icon-sign-in">退出</span></a></li>
                  </ul>
                </li>
              </div><?php endif; ?>

        </div>
      </div>
      </div>
  </div>
  
</header>


    <div class="blog-footer">
      <p>Power by Thinkphp    Style based Bootstrap</p>
    </div>






    <script src="/Duss/Public/js/jquery.min.js"></script>
    <script src="/Duss/Public/js/amazeui.min.js"></script>
    <script charset="utf-8">

    </script>
</body>
</html>