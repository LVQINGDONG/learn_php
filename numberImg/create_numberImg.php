<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/6/1
 * Time: 18:08
 */

//用于生成验证码
//引入之前生成验证码字符串的函数
include_once "functions.php";
//开启session，保存图像的验证码，对用户输入验证码时的进行验证。
if (!isset($_SESSION)){
    session_start();
}
//创建65px*20px大小的图像
$width=65;
$height=20;
$image=imagecreate($width,$height);
//给创建的图像添加颜色
$bg_color=imagecolorallocate($image,0x33,0x66,0xff);
//取得随机数字字母字符串
$text=random_text(5);
//定义字体，和字体的位置
$font=5;
$x=imagesx($image)/2-strlen($text)*imagefontwidth($font)/2;
$y=imagesy($image)/2-imagefontheight($font)/2;
//输出字符到之前创建的图像上面
$fg_color=imagecolorallocate($image,0xff,0xff,0xff);
imagestring($image,$font,$x,$y,$text,$fg_color);
//保存验证码到会话结束，用于验证用户验证码输入是否正确
$_SESSION['captcha']=$text;
//输出图像，定义header，声明图片类文件
header('Content-type:image/png');
imagepng($image);
imagedestroy($image);



