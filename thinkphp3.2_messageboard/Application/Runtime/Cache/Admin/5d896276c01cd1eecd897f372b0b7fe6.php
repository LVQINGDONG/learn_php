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
            text-align: center;
        }
        .info_panel{
            padding-bottom: -10px;
        }
        .add_major{
            float: left;
            margin-left: 250px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
<div class="main_right">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h4 class="info_title">专业信息列表</h4>
        </div>
        <div class="panel-body">
            <div class="form-group form-group-md" >
                <div class="col-md-4">专业</div>
                <div class="col-md-4">班级</div>
                <div class="caozuo col-md-4">
                    操作
                </div>
            </div>
            <br>
            <div class="form-group form-group-md info_panel" >
                <?php if(!empty($major_info)): if(is_array($major_info)): foreach($major_info as $key=>$v): if(is_array($v["Class"])): foreach($v["Class"] as $k=>$vv): ?><div class="col-md-4"><?php echo ($v["major_name"]); ?></div>
                            <div class="col-md-4">
                                <a href="/web/index.php/Admin/Student/showList/class_id/<?php echo ($vv["class_id"]); ?>"><?php echo ($vv["class_name"]); ?></a>
                            </div>
                            <div class="col-md-4 caozuo">
                                <a href="/web/index.php/Admin/Major/update/major_id/<?php echo ($v["major_id"]); ?>">编辑</a>
                                &nbsp;&nbsp;
                                <a href="/web/index.php/Admin/Major/delete/major_id/<?php echo ($v["major_id"]); ?>/class_id/<?php echo ($vv["class_id"]); ?>"
                                   onclick="javascript:if (confirm('确认删除此信息吗？')){
                                      return true;
                                }
                                return false;">删除</a>
                            </div><?php endforeach; endif; endforeach; endif; endif; ?>
            </div>
        <div class="add_major">
            <a href="/web/index.php/Admin/Major/add" class="main_right_tita">添加专业和班级</a>
        </div>
        <div class="add_major">
            <a href="<?php echo U('Index/index');?>" class="main_right_tita">返回首页</a>
        </div>
        </div>
    </div>

</div>

</body>
</html>