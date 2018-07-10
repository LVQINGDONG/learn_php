<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/web/Public/css/login.css">
    <link rel="stylesheet" href="/web/Public/css/showList.css">
    <link rel="stylesheet" href="/web/Public/js/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/web/Public/js/bootstrap_select/dist/css/bootstrap-select.min.css">
    <script type="text/javascript" src="/web/Public/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="/web/Public/js/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/web/Public/js/bootstrap_select/dist/js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="/web/Public/js/bootstrap_select/dist/js/i18n/defaults-zh_CN.min.js"></script>

</head>
<body>
<div class="main">
    <div class="title">
        <div class="title_left">
            <a href="#" class="navbar-brand">学生信息管理系统</a>
        </div>
    </div>
    <div class="con">
        <form method="post">
            <div class="form_input">
                <span class="info_text">添加学生信息</span>
            </div>
            <div class="form_input">
                <div class="input-group">
                    <span class="input-group-addon" >学号</span>
                    <input type="text" class="form-control" placeholder="学号" aria-describedby="basic-addon1" name="student_number">
                </div>
            </div>
            <div class="form_input">
                <div class="input-group">
                    <span class="input-group-addon" >姓名</span>
                    <input type="text" class="form-control" placeholder="学生姓名" aria-describedby="basic-addon1" name="student_name">
                </div>
            </div>
            <div class="form_input">
                <div class="input-group">
                    <span class="input-group-addon" >出生</span>
                    <input type="text" class="form-control" placeholder="年月日" aria-describedby="basic-addon1" name="student_birthday">
                </div>
            </div>
            <div class="form_input">
                <div class="input-group">
                    <span class="input-group-addon" >性别</span>
                    <select name="student_gender" class="selectpicker">
                        <option value="男">男</option>
                        <option value="女">女</option>
                    </select>
                </div>
            </div>
            <div class="form_input">
                <div class="input-group">
                    <span class="input-group-addon" >班级</span>
                    <select name="class_id" class="selectpicker" >
                        <?php if(is_array($major_info)): foreach($major_info as $key=>$v): if(is_array($v["Class"])): foreach($v["Class"] as $key=>$vv): ?><option value="<?php echo ($vv["class_id"]); ?>" <?php if(($class_id) == $vv["class_id"]): ?>selected<?php endif; ?>   >
                                <?php echo ($v["major_name"]); ?>--<?php echo ($vv["class_name"]); ?>
                                </option><?php endforeach; endif; endforeach; endif; ?>
                    </select>
                </div>
            </div>
            <div class="form_input">
                <button type="submit" class="btn btn-primary">确认添加</button>
            </div>
            <div class="form_input_a">
                <div><a href="<?php echo U('Student/showList');?>">返回学生信息列表</a></div>
            </div>
        </form>
    </div>
</div>
</body>
</html>