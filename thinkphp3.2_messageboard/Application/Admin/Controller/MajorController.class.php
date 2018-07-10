<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/2
 * Time: 15:32
 */
namespace Admin\Controller;
use Think\Controller;

//专业信息显示控制器
class MajorController extends Controller{
    //显示专业和班级数据
    public function showList(){
        //实例化Major模型对象，使用relation进行关联操作，通过关联模型获取两个表的专业和班级数据
        $major_info=D('major')->relation(true)->select();
        $this->assign('major_info',$major_info);
        $this->display();
    }

    //修改专业班级信息
    public function update(){
        $model=D('Class');
        $where=array('major_id'=>I('get.major_id'));



        if (IS_POST){
            $model->create();
            if ($model->save()!==false){

                //更新成功
                $this->success('专业和班级更新成功!',U("showList"));
                return;
            }
            $this->error('信息更新失败，请重新填写...');
            return;
        }

        $class_info=$model->where($where)->find();
        if (!isset($class_info)){
            $this->error('查询的专业班级信息不存在!');
            return;
        }

        $major_info=D('major')->relation(true)->where($where)->find();
        $this->assign('class_info',$class_info);
        $this->assign('major_info',$major_info);
        $this->display();
        
    }

    //删除班级信息
    public function delete(){
        $classModel=M('class');
        $classWhere=array('class_id'=>I('get.class_id'));
        $classRes=$classModel->where($classWhere)->delete();
        $majorModel=M('major');
        $majorWhere=array('major_id'=>I('get.major_id'));
        $majorRes=$majorModel->where($majorWhere)->delete();


        if ($classRes===false){
            $this->error('删除班级失败！');
            return;
        }elseif ($classRes===0){
            $this->error("删除的班级不存在！");
            return;
        }elseif ($majorRes===false){
            $this->error('删除专业失败！');
            return;
        }elseif ($majorRes===0){
            $this->error('删除的专业不存在!');
            return;
        }
        else{
            $this->success("删除成功！",U('showList'));
            return;
        }
    }
    
    //添加专业信息
    public function add(){
        if (IS_POST){
            $majorModel=M('Major');
            $majorModel->create();
            if ($majorModel->add()){
                $this->success('添加专业成功！跳转继续添加班级信息',U('addClass'));
                return;
            }else{
                $this->error('专业添加失败请重新添加！');
                return;
            }
        }
        $this->display();
    }

    //添加班级信息
    public function addClass(){
        if (IS_POST){
            $model=M('Class');
            $model->create();
            if ($model->add()){
                $this->success('添加专业和班级成功！',U('showList'));
                return;
            }else{
                $this->error('添加班级失败！');
                return;
            }
        }

        $major_info=D('major')->relation(true)->select();
        $this->assign('major_info',$major_info);
        $this->display();
    }


}