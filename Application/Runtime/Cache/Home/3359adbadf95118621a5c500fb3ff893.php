<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>注册Duss帐号 | 成为更好的你</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="format-detection" content="telephone=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />

  <link rel="stylesheet" href="/Duss/Public/css/amazeui.min.css"/>
  <style>
    .header {
      text-align: center;
    }
    .header h1 {
      font-size: 200%;
      color: #333;
      margin-top: 30px;
    }
    .header p {
      font-size: 14px;
    }
  </style>
</head>
<body>

<div class="header">
  <div class="am-g">
    <h1>注册Duss帐号</h1>
    <p>成为更好的你</p>
  </div>
  <hr />
</div>

<div class="am-g">
  <div class="am-u-lg-6 am-u-md-8 am-u-sm-centered">
    <form method="post" class="am-form" action="/Duss/index.php/Home/User/doreg">
      <label for="email">用户名:</label>
      <input type="text" name="username" id="email" value="" placeholder="用户名·手机·邮箱">
      <br>
      <label for="password">密码:</label>
      <input type="password" name="password" id="password" value="">
      <br>
      <div class="am-cf">
        <input type="submit" name="" value="注 册" class="am-btn am-btn-primary am-btn-sm am-fl">
        <a href="/Duss/index.php/Home/User/login"><button class="am-btn am-btn-default am-btn-sm am-fr">已有帐号，登录 </botton></a>
      </div>
    </form>
    <hr>
    <p>© 2014 Xteam</p>
  </div>
</div>
</body>
</html>