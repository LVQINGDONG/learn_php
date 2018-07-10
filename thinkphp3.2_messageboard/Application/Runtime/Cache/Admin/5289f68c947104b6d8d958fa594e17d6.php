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
                <span class="title_text">修改专业信息</span>
            </div>
            <div class="form_input">
                <div class="input-group">
                    <span class="input-group-addon" >专业名称</span>
                    <label class="form-control"><?php echo ($major_info["major_name"]); ?></label>
                </div>
            </div>
            <div class="form_input">
                <div class="input-group">
                    <span class="input-group-addon" >班级名称</span>
                    <input type="hidden" name="class_id" value="<?php echo ($class_info["class_id"]); ?>">
                    <input type="text" class="form-control" placeholder="班级名称" aria-describedby="basic-addon1" value="<?php echo ($class_info["class_name"]); ?>"
                           name="class_name">
                </div>
            </div>
            <div class="form_input">
                <button type="submit" class="btn btn-primary">确认修改</button>
            </div>
            <div class="form_input_a">
                <div><a href="<?php echo U('Major/showList');?>">返回专业信息页面</a></div>
            </div>
        </form>
    </div>
</div>
</body>
</html>