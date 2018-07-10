<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/3
 * Time: 8:36
 */

namespace Admin\Controller;
use Think\Controller;

class StudentController extends Controller{
    //显示学生信息列表
    public function  showList(){
        $model=M('student');
        $class_id=I('param.class_id',1);//I()方法接受参数class_id,没有参数时为1

        $where=array('class_id'=>$class_id);
        $student_info=$model->where($where)->select();//通过模型类获取指定班级ID的学生信息

        $this->assign('class_id',$class_id);
        $this->assign('student_info',$student_info);

        //实例化Major对象，使用relation进行关联操作
        $major_info=D('major')->relation(true)->select();
        $this->assign('major_info',$major_info);
        
        $this->display();

    }

    //添加学生信息
    public function add(){
        //获取学生所属班级
        $class_id=I('get.class_id');
        if (IS_POST){//判断表单是否提交
            $model=M("Student");
            $model->create();
            //使用模型类的add（）完成数据添加，添加成功后跳转到学生信息列表
            if($model->add()){
                $this->success("添加学生成功，等待跳转......",U("showList?class_id={$class_id}"));
                return;
            }
            $this->error("学生信息添加失败，请重新输入！");
            return;
        }
        
        $major_info=D('major')->relation(true)->select();
        $this->assign('major_info',$major_info);
        $this->assign('class_id',$class_id);
        $this->display();
    }
    
    //修改学生信息
    public function update(){
        $model=M('Student');
        $student_id=I('get.student_id');
        $where=array('student_id'=>$student_id);

        //获取学生信息，判断学生信息是否存在，不存在返回上一页面
        $student_info=$model->where($where)->find();
        if (!isset($student_info)){
            $this->error("学生的信息不存在，请重新选择");
            return;
        }


        if (IS_POST){
            //获取表单数据
            $student_info=$model->create();
            if ($model->save()!==false){
                //提示数据更新成功，跳转
                $this->success('学生信息更新成功，等待跳转......',U("showList?class_id={$student_info['class_id']}"));
                return;
            }
            //更新失败，跳转回上一页面
            $this->error("学生信息更新失败......请重新输入");
            return;
        }



        //获取专业班级信息
        $major_info=D('major')->relation(true)->select();
        $this->assign('student_info',$student_info);
        $this->assign("major_info",$major_info);
        $this->display();
        
    }

    //删除学生信息
    public function delete(){
        $model=M('Student');
        $where=array('student_id'=>I('get.student_id'));//删除的条件
        $class_id=I('class_id');//用于删除成功后页面的跳转
        $res=$model->where($where)->delete();
        //判断删除是否成功
        if ($res===false){
            $this->error('删除失败，正在返回！');
            return;
        }elseif ($res===0){//表示删除的数据不存在
            $this->error('删除的信息不存在，请重新选择！');
            return;
        }
        $this->success("删除成功,正在跳转......",U("showList?class_id={$class_id}"));
        return;

    }
    
    
}