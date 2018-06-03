<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/6/1
 * Time: 17:42
 */
//返回给定长度的字符串
function random_text($count,$rm_similar=false){
    //创建字符串数组
    $chars=array_flip(array_merge(range(0,9),range('A','Z')));
    //删除容易引起混淆的数字字母
    if ($rm_similar){
        unset($chars[0],$chars[1],$chars[2],$chars["I"],$chars["O"],$chars["Z"]);
    }
    //生成随机字符文本
    for ($i=0,$text="";$i<$count;$i++){
        $text.=array_rand($chars);
    }
    return $text;
}