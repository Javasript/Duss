<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <title>登录到Duss</title>
    <link href="/Duss/Public/bootstrap.min.css" rel="stylesheet">
    <link href="/Duss/Public/signin.css" rel="stylesheet">

  </head>

  <body>

    <div class="container">

      <form class="form-signin" role="form" method="POST" action="/Duss/index.php/Home/Index/reg">
        <h2 class="form-signin-heading">注册</h2>
        <input type="text" class="form-control" placeholder="用户名" name="username" required autofocus>
        <input type="password" class="form-control" placeholder="密码" name="password" required>

        <button class="btn btn-lg btn-primary btn-block" type="submit">注册</button>
      </form>

    </div> <!-- /container -->


  </body>
</html>