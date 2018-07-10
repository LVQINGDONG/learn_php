<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/7/7
 * Time: 13:04
 */
namespace Admin\Controller;
use Think\Controller;

class MessageboardController extends Controller{
    //管理员查看用户留言信息
    public function showMessage(){
        //获取登录管理员的名字
        $admin_name=I('get.admin_name');
//        echo $admin_name;
        $this->assign('admin_name',$admin_name);

        //获取数据库留言表的信息
        $messageModel=M('message');
//        JOIN方法也是连贯操作方法之一，用于根据两个或多个表中的列之间的关系，从这些表中查询数据。
        $message_info=$messageModel->join('info_student ON info_message.student_id=info_student.student_id')->select();
//        分页实现教程地址
//        https://www.cnblogs.com/tianguook/p/4326613.html
//        https://www.cnblogs.com/lvchenfeng/p/5566080.html
        $count=$messageModel->count();
        $p=getpage($count,2);
//        $list = $messageModel->field(true)->order('m_id desc')->limit($p->firstRow, $p->listRows)->select();
//        array_reverse 以相反的顺序返回数组
        $list=array_slice(array_reverse($message_info),$p->firstRow,$p->listRows);
        $this->assign('select', $list); // 赋值数据集
        $this->assign('page', $p->show()); // 赋值分页输出


        //显示视图
        $this->assign('message_info',$message_info);
        $this->display();

    }

    //管理员删除学生留言
    public function delete(){
        $model=M('message');
        $where=array('m_id'=>I('get.m_id'));
        $res=$model->where($where)->delete();
        if ($res===false){
            $this->error('删除失败，正在返回......');
            return;
        }elseif ($res===0){
            $this->error('删除的数据不存在......');
            return;
        }else{
            $this->success("删除成功!正在返回......",U('showMessage'));
            return;
        }
    }

    //管理员修改留言数据
    public function update(){
        $model=M('message');
        $where=array('m_id'=>I('get.m_id'));
        if (IS_POST){
            $model->create();
            if ($model->save()!==false){
                $this->success('修改学生留言信息成功！',U('showMessage'));
                return;
            }else{
                $this->error('学生留言信息更新失败！');
                return;
            }
        }
        //判断留言信息是否存在
        $message_info=$model->join('info_student ON info_message.student_id=info_student.student_id')->where($where)->find();
        if (!isset($message_info)){
            $this->error('学生留言信息不存在！');
            return;
        }

        //获取留言和学生信息
        $this->assign('message_info',$message_info);
        $this->display();


    }

    //管理员回复留言
    public function replay(){
        $model=M('message');
        $where=array('m_id'=>I('get.m_id'));
        if (IS_POST){
            $model->create();
            if ($model->save()!==false){
                $this->success('回复学生留言成功！',U('showMessage'));
                return;
            }else{
                $this->error('回复学生留言更新失败！');
                return;
            }
        }

        //判断留言信息是否存在
        $message_info=$model->join('info_student ON info_message.student_id=info_student.student_id')->where($where)->find();
        if (!isset($message_info)){
            $this->error('学生留言信息不存在！');
            return;
        }
        //获取留言和学生信息
        $this->assign('message_info',$message_info);
        $this->display();
    }


}