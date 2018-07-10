<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/web/Public/css/login.css">
    <link rel="stylesheet" href="/web/Public/js/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/web/Public/js/bootstrap_select/dist/css/bootstrap-select.min.css">
    <script type="text/javascript" src="/web/Public/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="/web/Public/js/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/web/Public/js/bootstrap_select/dist/js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="/web/Public/js/bootstrap_select/dist/js/i18n/defaults-zh_CN.min.js"></script>
</head>
<body>
<div class="main_right">
    <div class="title">
        <div class="title_left">
            <a href="#" class="navbar-brand">添加班级</a>
        </div>
    </div>
    <div class="content">
        <form method="post">
            <div class="form_input">
                <span class="title_text">添加班级</span>
            </div>
            <div class="form_input">
                <div class="input-group">
                    <span class="input-group-addon" >专业</span>
                    <select name="major_id" class="selectpicker">
                        <?php if(is_array($major_info)): foreach($major_info as $key=>$v): ?><option value="<?php echo ($v["major_id"]); ?>"><?php echo ($v["major_name"]); ?></option><?php endforeach; endif; ?>
                    </select>
                </div>
            </div>
            <div class="form_input">
                <div class="input-group">
                    <span class="input-group-addon" >班级</span>
                    <input type="text" class="form-control" placeholder="班级" aria-describedby="basic-addon1" name="class_name">
                </div>
            </div>
            <div class="form_input">
                <button type="submit" class="btn btn-primary">确认添加</button>
            </div>
            <div class="form_input_a">
                <div><a href="<?php echo U('Major/showList');?>">返回专业信息页面</a></div>
            </div>
        </form>
    </div>
</div>




</body>
</html>