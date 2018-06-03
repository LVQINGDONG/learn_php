<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        ul{
            border: 1px solid red;
            width: 300px;
        }
        ul li{
            width: 250px;
            height: 30px;
            margin-top: 10px;
            list-style: none;
        }
        .li_font{
            float: left;
        }
        .li_input{
            float: right;
        }
        .numberImg{
            margin-left: 100px;
        }
    </style>
</head>
<body>
<!--$_SERVER["PHP_SELF"]是超级全局变量，返回当前正在执行脚本的文件名，与 document root相关-->
<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    <ul>
        <li>
            <div class="li_font">用户名：</div>
            <div class="li_input"><input type="text" name="username" class="username"></div>
        </li>
        <li>
            <div class="li_font">密码：</div>
            <div class="li_input"><input type="password" name="password" class="password"></div>
        </li>
        <li>
            <div class="li_font">确认密码：</div>
            <div class="li_input"><input type="password" name="password2" class="password2"></div>
        </li>
        <li>
            <div class="li_font">邮箱：</div>
            <div class="li_input"><input type="text" name="email" class="email"></div>
        </li>
        <li>
            <div class="numberImg"><img src="create_numberImg.php"></div>
        </li>
        <li>
            <div class="li_font">验证码：</div>
            <div class="li_input"><input type="text" name="number" class="number"></div>
        </li>
        <li>
            <div><input type="submit" name="submit" class="submit" value="注册"></div>
        </li>
    </ul>
</form>
</body>
</html>