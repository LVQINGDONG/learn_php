<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/6/3
 * Time: 20:44
 */
////测试是否可以使用GD库
//if(extension_loaded('gd')){
//    echo "可以使用";
//    foreach(gd_info() as $cate=>$value)
//        echo "$cate:$value<br>";
//}
//else{
//    echo "无法使用gd";
//}

header("Content-type:image/png"); //设置生成图片的格式
$im=imagecreate(120,30);   //新建画布
$bg=imagecolorallocate($im,0,0,255);  //设置背景
$sg=imagecolorallocate($im,255,255,255);  //设置前景
imagefill($im,120,30,$bg);  //填充背景
imagestring($im,7,8,5,"image create",$sg);  //填充字符串
imagepng($im);  //输出图像
imagedestroy($im); //销毁图像资源


