<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/web/Public/js/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <script type="text/javascript" src="/web/Public/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="/web/Public/js/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <style>
        .wrap{
            width: 900px;
            height: 500px;
            border: 1px solid #2aabd2;
            position: relative;
        }
        *{
            margin-left: auto;
            margin-right: auto;
        }
        .row{
            float: left;
            margin-top: 40px;
            margin-left: 100px;
        }
        .row_img{
            margin-right: 40px;

        }

    </style>
</head>
<body>
<div class="wrap">
    <!DOCTYPE html>
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
        <a href="#" class="navbar-brand">学生信息管理+学生留言管理系统</a>
    </div>
    <div class="title_right">
        管理员-<?php echo ($admin_name); ?>，登录成功！
    </div>
    <div class="title_btn">
        <a href="<?php echo U('Index/login');?>">退出登录</a>
    </div>
</div>
</body>
</html>

    <div class="row">
        <div class=" col-md-3 row_img">
            <div class="thumbnail">
                <img src="/web/Public/images/3.jpg"
                     alt="通用的占位符缩略图">
                <div class="caption">
                    <h3>学生留言管理</h3>
                    <p>谈天说地</p>
                    <p>
                        <a href="<?php echo U('Messageboard/showMessage');?>?admin_name=<?php echo ($admin_name); ?>" class="btn btn-primary" role="button">
                            管理学生留言
                        </a>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-3 row_img">
            <div class="thumbnail">
                <img src="/web/Public/images/1.jpg"
                     alt="通用的占位符缩略图">
                <div class="caption">
                    <h3>学生信息列表</h3>
                    <p>查看学生的信息</p>
                    <p>
                        <a href="<?php echo U('Student/showList');?>" class="btn btn-primary" role="button">
                            管理学生信息
                        </a>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-3 row_img">
            <div class="thumbnail">
                <img src="/web/Public/images/2.jpg"
                     alt="通用的占位符缩略图">
                <div class="caption">
                    <h3>专业信息列表</h3>
                    <p>查看专业和班级的信息</p>
                    <p>
                        <a href="<?php echo U('Major/showList');?>" class="btn btn-primary" role="button">
                            管理专业信息
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>


</div>
</body>
</html>