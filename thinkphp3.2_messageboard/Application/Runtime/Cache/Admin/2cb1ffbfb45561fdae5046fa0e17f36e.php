<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        *{
            margin-left: auto;
            margin-right: auto;
        }
        .title{
            width: 100%;
            height: 60px;
            background-color: #2aabd2;
        }
        .title_left{
            float: left;
            margin-top: 5px;
            margin-left: 10px;
        }
        .title_left a{
            text-decoration: none;
            color: white;
            font-size: 20px;
        }
        .title_right{
            float: left;
            margin-top: 15px;
            margin-left: 200px;
            font-size: 20px;
            color: white;
        }
        .title_btn{
            font-size: 20px;
            float: right;
            margin-top: 15px;
            margin-right: 20px;
        }
        .title_btn a{
            color: white;
            font-size: 20px;
        }
    </style>
</head>
<body>
<div class="title">
    <div class="title_left">
        <a href="#" class="navbar-brand">学生信息管理+学生留言板后台管理系统</a>
    </div>
    <div class="title_right">
        欢迎--<?php echo ($admin_name); ?>--登录成功！
    </div>
    <div class="title_btn">
        <a href="<?php echo U('Index/login');?>">退出登录</a>
    </div>
</div>
</body>
</html>