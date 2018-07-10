<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/2
 * Time: 10:38
 */
namespace Admin\Controller;
use Think\Controller;

class IndexController extends Controller {
    //index()判断是否有用户登录，如果有显示index.html，没有跳转到index下的login（）
    public  function  index() {
        if ($admin_name=session('admin_name')){
//            assign('x',$x)中第一个参数‘x’表示在模版取值用的变量名，第二个参数是wish变量的值。
            $this->assign('admin_name',$admin_name);
            $this->display();
        }else {
//            U('LOGIN') // 生成当前访问模块的login操作的url地址
            $this->error('请先登录！',U('login'));
        }
    }

    //index()判断是否有用户登录，如果有显示index.html，没有跳转到index下的login（）
    public  function  header() {
        if ($admin_name=session('admin_name')){
//            assign('x',$x)中第一个参数‘x’表示在模版取值用的变量名，第二个参数是wish变量的值。
            $this->assign('admin_name',$admin_name);
            $this->display();
        }else {
//            U('LOGIN') // 生成当前访问模块的login操作的url地址
            $this->error('请先登录！',U('login'));
        }
    }


    //login()验证管理员登录
    public function login(){
        if (IS_POST){
            $adminModel=M('admin');
            $adminInfo=$adminModel->create();
            $where=array('aname'=>$adminInfo['aname']);
            if ($realPwd=$adminModel->where($where)->getField('apwd')){
                if ($realPwd==$adminInfo['apwd']){
                    session('admin_name',$adminInfo['aname']);
                    $this->success('登陆中......等待跳转',U('index'));
                }else{
                    $this->error("用户名或密码输入不正确，请重新输入！");
                }
            } else {
                $this->error("用户名或密码输入不正确，请重新输入！");
            }
            return;

        }
        $this->display();
    }

    //管理员注册模块
    public function register(){

        if (IS_POST){
            $model=M('admin');
            $model->create();
            $aname=I('post.aname');
            $apwd=I('post.apwd');
            $aphone=I('post.aphone');
            if ($aname==""||$apwd==""||$aphone==""){
                $this->error('注册信息输入不能为空');
                return;
            }else{
                if ($model->add()){
                    $this->success('注册成功，正在跳转回登录页面...',U('login'));
                    return;
                }else{
                    $this->error('注册失败！请重新填写...');
                    return;
                }
            }
        }
        $this->display();
    }
    
    //管理员密码修改模块
   //因此要使用 save() 方法更新数据，必须指定更新条件或者更新的数据中包含主键字段。
    public function reset(){
        $model=M("admin");
        if (IS_POST){
            $model->create();
            $where=array("aname"=>I('post.aname'),'aphone'=>I('post.aphone'));
            $admin_info=$model->where($where)->find();
            //判断数据库是否存在用户信息
            if ($admin_info){
                //修改密码操作
                $aid=(int)$admin_info['aid'];
                $data['apwd']=I('post.apwd');
                $data['aname']=I('post.aname');
                $data['aphone']=I('post.aphone');
                $result=$model->where(array('aid'=>$aid))->save($data);
                if ($result!==false){
                    $this->success('修改密码成功，跳转回登录页面',U('login'));
                    return;
                }else{
                    $this->error('修改失败');
                    return;
                }

            }
            else{
                $this->error('修改失败，用户信息不存在，请重新输入');
                return;
            }



        }
        $this->display();
    }

}

