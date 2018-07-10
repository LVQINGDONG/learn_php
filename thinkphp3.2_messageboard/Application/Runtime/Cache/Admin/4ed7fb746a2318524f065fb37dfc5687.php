<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/web/Public/css/login.css">
    <link rel="stylesheet" href="/web/Public/css/message_update.css">
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
    <form method="post">
        <input type="hidden" name="m_id" value="<?php echo ($message_info["m_id"]); ?>">
        <div class="form_input">
            <span class="title_text">修改留言信息</span>
        </div>
        <div class="student_info">
            <div class="info_text">留言发表人:</div>
            <div class="student_img"><img src="<?php echo ($message_info["student_img"]); ?>"></div>
            <div class="student_name"><?php echo ($message_info["student_name"]); ?></div>
            <div style="clear: both"></div>
            <div class="m_date">留言发表时间：
                <span class="time"><?php echo ($message_info["m_date"]); ?></span>
            </div>
        </div>
        <div class="form_input1">
            <div class="input-group">
                <span class="input-group-addon" >留言标题</span>
                <label class="form-control"><?php echo ($message_info["m_title"]); ?></label>
            </div>
        </div>
        <div class="form_input2">
            <span class="input-group-addon" >留言内容</span>
            <label class="form-control"><?php echo ($message_info["m_content"]); ?></label>
        </div>
        <div class="form_input2">
            <span class="input-group-addon" >管理员回复</span>
            <textarea class="form-control" rows="3" name="m_replay"></textarea>
        </div>
        <div class="form_input">
            <button type="submit" class="btn btn-primary">提交回复</button>
        </div>
        <a class="btn_aa" href="<?php echo U('showMessage');?>">返回查看留言信息</a>
    </form>
</div>
</body>
</html>