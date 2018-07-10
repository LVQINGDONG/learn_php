<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/2
 * Time: 15:21
 */
namespace Admin\Model;
use Think\Model\RelationModel;

//关联模型操作
class MajorModel extends RelationModel {
    //一个专业对应多个班级，专业和班级关系是一对多
    //表示与class表进行关联，与class表的关系是一对多
    protected $_link=array('Class'=>self::HAS_MANY);
}