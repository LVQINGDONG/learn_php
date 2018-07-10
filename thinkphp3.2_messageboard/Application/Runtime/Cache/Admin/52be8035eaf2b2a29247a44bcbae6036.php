<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/web/Public/css/login.css">
    <link rel="stylesheet" href="/web/Public/js/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <script type="text/javascript" src="/web/Public/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="/web/Public/js/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
</head>
<body>
<div class="main_right">
    <div class="title">
        <div class="title_left">
            <a href="#" class="navbar-brand">学生信息管理系统</a>
        </div>
    </div>
    <div class="content">
        <form method="post">
            <div class="form_input">
                <span class="title_text">用户注册</span>
            </div>
            <div class="form_input">
                <div class="input-group">
                    <span class="input-group-addon" >用名</span>
                    <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1" name="aname">
                </div>
            </div>
            <div class="form_input">
                <div class="input-group">
                    <span class="input-group-addon" >密码</span>
                    <input type="text" class="form-control" placeholder="Password" aria-describedby="basic-addon1"  name="apwd">
                </div>
            </div>
            <div class="form_input">
                <div class="input-group">
                    <span class="input-group-addon" >电话</span>
                    <input type="text" class="form-control" placeholder="Phone" aria-describedby="basic-addon1" name="aphone">
                </div>
            </div>
            <div class="form_input">
                <button type="submit" class="btn btn-primary">提交注册</button>
            </div>
            <div class="form_input_a">
                <div><a href="<?php echo U('Index/login');?>">返回登录页</a></div>
            </div>
        </form>
    </div>
</div>
</body>
</html>