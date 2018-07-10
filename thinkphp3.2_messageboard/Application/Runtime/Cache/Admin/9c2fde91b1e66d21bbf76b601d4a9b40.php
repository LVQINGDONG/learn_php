<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/web/Public/js/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <script type="text/javascript" src="/web/Public/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="/web/Public/js/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <style>
        *{
            margin-right: auto;
            margin-left: auto;
        }
        .main_right{
            width: 800px;
            height: 500px;
        }
        .table th{
            width: 200px;
        }
        .caozuo{
            border-left: 1px solid black;
            text-align: center;
        }
        .panel-title{
            color: black;
        }
        .info_title{
            color:white;
        }
        .main_right_tita{
            float: left;
            margin-left: 180px;
        }
        .info_panel{
            padding-bottom: 10px;
        }
    </style>
</head>
<body>


<div class="main_right">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h4 class="info_title">学生信息列表</h4>
            <h3 class="panel-title">
                <form method="post" class="form_select">
                    请选择班级：
                    <select name="class_id">
                        <?php if(is_array($major_info)): foreach($major_info as $key=>$v): if(is_array($v["Class"])): foreach($v["Class"] as $key=>$vv): ?><option value="<?php echo ($vv["class_id"]); ?>" <?php if(($class_id) == $vv["class_id"]): ?>selected<?php endif; ?>>
                                <?php echo ($v["major_name"]); ?>--<?php echo ($vv["class_name"]); ?>
                                </option><?php endforeach; endif; endforeach; endif; ?>
                    </select>
                    <input type="submit" value="确认" class="form_btn">
                </form>
            </h3>
        </div>
        <div class="panel-body">
            <div class="form-group form-group-md" >
                <div class="col-md-2">学号</div>
                <div class="col-md-2">姓名</div>
                <div class="col-md-2">出生日期</div>
                <div class="col-md-2">性别</div>
                <div class="caozuo col-md-2">
                    操作
                </div>
            </div>
            <br>
            <div class="form-group form-group-md info_panel" >
                <?php if(!empty($student_info)): if(is_array($student_info)): foreach($student_info as $key=>$v): ?><div class="col-md-2"><?php echo ($v["student_number"]); ?></div>
                        <div class="col-md-2"><?php echo ($v["student_name"]); ?></div>
                        <div class="col-md-2"><?php echo ($v["student_birthday"]); ?></div>
                        <div class="col-md-2"><?php echo ($v["student_gender"]); ?></div>
                        <div class="col-md-2 caozuo">
                            <a href="/web/index.php/Admin/Student/update/student_id/<?php echo ($v["student_id"]); ?>">编辑</a>
                            &nbsp;&nbsp;
                            <a href="/web/index.php/Admin/Student/delete/student_id/<?php echo ($v["student_id"]); ?>/class_id/<?php echo ($v["class_id"]); ?>"
                               onclick="javascript:if (confirm('确认删除此信息吗？')){
                                      return true;
                                }
                                return false;">删除</a>
                        </div>
                        <br><?php endforeach; endif; ?>
                    <?php else: ?>
                    <div class="col-md-12">查询结果不存在!</div><?php endif; ?>
            </div>
            <div class="main_right_tita"><a href="/web/index.php/Admin/Student/add/class_id/<?php echo ($class_id); ?>">添加学生</a></div>
            <div class="main_right_tita"><a href="<?php echo U('Index/index');?>" class="main_right_tita">返回首页</a></div>
        </div>
    </div>
</div>
</body>
</html>