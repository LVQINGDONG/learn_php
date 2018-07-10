<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/web/Public/css/login.css">
    <link rel="stylesheet" href="/web/Public/css/myPage.css">
    <link rel="stylesheet" href="/web/Public/js/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <script type="text/javascript" src="/web/Public/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="/web/Public/js/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <style>
        th,td{
            width: 200px;
            height: 50px;
        }
        img{
            width: 40px;
            height: 40px;
        }
        .m_board{
            color: #2aabd2;
            font-size: 20px;
            margin: 10px;
            border-bottom: 1px solid #2aabd2;
        }
        .m_content{
            width: 780px;
            height: 188px;
            border-bottom: 1px solid #2aabd2;
            margin-bottom: 10px;
        }
        .m_content_1{
            width: 100%;
            border-bottom: 1px solid #2aabd2;
            float: left;
            height: 44px;
            overflow: hidden;
        }
        .m_student_img{
            float: left;
        }
        .m_student_name{
            float: left;
            color: #2aabd2;
            font-size: 20px;
            margin: 10px;
        }
        .m_content_1_text{
            float: left;
            margin-left: 10px;
        }
        .m_content_2{
            width: 100%;
            float: left;
            height: 60px;
            overflow: hidden;
        }
        .m_title{
            float: right;
            color: #2aabd2;
            font-size: 20px;
            margin-right: 350px;
            margin-top: 10px;
        }
        .admin_name{
            width: 100%;
            text-align: left;
            float: left;
            color: #2aabd2;
            font-size: 15px;
            margin-left: 10px;
        }
        .admin_text{
            text-align: left;
            margin-left: 10px;
        }
        .delete a{
            margin-right: 40px;
        }
        .m_content_1_text_text{
            color: #2aabd2;
        }
        .time{
            float: right;
            color: #2aabd2;
            margin-top: 20px;
            margin-right: -400px;
        }
        .pages{
            text-align: center;
        }
        .m_title_text{
            color: black;
            font-size: 15px;
            margin-left: 10px;
        }
        .pages_text{
            margin-top: 20px;
        }
    </style>
</head>
<body>
<div class="main_right">
    <div class="title">
        <div class="title_left">
            <a href="#" class="navbar-brand">学生信息管理系统</a>
        </div>
    </div>
    <div class="m_board">管理员后台回复学生留言</div>

    <?php if(is_array($select)): foreach($select as $key=>$v): ?><div class="m_content">
            <div class="m_content_1">
                <div class="m_student_img"><img src="<?php echo ($v["student_img"]); ?>"></div>
                <div class="m_student_name">学生姓名:<?php echo ($v["student_name"]); ?></div>
                <div class="m_title">标题:<span class="m_title_text"><?php echo ($v["m_title"]); ?></span></div>
                <div class="time">发表时间:<?php echo ($v["m_date"]); ?></div>
            </div>
            <div class="m_content_1">
                <div class="m_content_1_text"><span class="m_content_1_text_text">留言内容</span>：<?php echo ($v["m_content"]); ?></div>
            </div>
            <div class="m_content_2">
                <div class="admin_name">学生系统管理员回复内容：</div>
                <?php if(empty($v['m_replay'])): ?><div class="admin_text">未回复</div><?php endif; ?>
                <?php if(!empty($v['m_replay'])): ?><div class="admin_text"><?php echo ($v["m_replay"]); ?></div><?php endif; ?>
            </div>
            <div class="delete">
                <?php if(empty($v['m_replay'])): ?><a href="/web/index.php/Admin/Messageboard/replay/m_id/<?php echo ($v["m_id"]); ?>">回复</a><?php endif; ?>
                <?php if(!empty($v['m_replay'])): ?><a href="#"></a><?php endif; ?>
                <a href="/web/index.php/Admin/Messageboard/update/m_id/<?php echo ($v["m_id"]); ?>">编辑</a>
                <a href="/web/index.php/Admin/Messageboard/delete/m_id/<?php echo ($v["m_id"]); ?>"
                   onclick="javascript:if (confirm('确认删除此信息吗？')){
                                      return true;
                                }
                                return false;"
                >删除</a>
            </div>
        </div><?php endforeach; endif; ?>
</div>
<div class="pages">
    <?php echo ($page); ?>
    <div class="pages_text">
        <a href="<?php echo U('Index/index');?>">返回学生管理系统首页</a>
    </div>
</div>
</body>
</html>