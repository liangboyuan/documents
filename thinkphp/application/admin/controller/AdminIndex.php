<?php
/**
 * Created by PhpStorm.
 * User: liangboyuan
 * Date: 2018/4/18
 * Time: 下午1:47
 */
namespace app\admin\controller;
use app\admin\model\Admin as AdminModel;
use app\admin\controller\Common;
use think\Request;

class AdminIndex extends Common
{
    public function add()
    {
        if(request()->isPost()){
            $data=input('post.');
            if(empty($data) || !is_array($data)) {
                return false;
            }else{
                $data['password'] = md5($data['password']);
            }
            if(db('index')->insert($data)){
                $this->success('前台添加管理员成功！',url('lst'));
            }else{
                $this->error('前台添加管理员失败！');
            }
            return;
        }
        return $this->fetch();
    }

    public function lst()
    {
        $res = db('index')->paginate(10);
        $this->assign('indexres',$res);
        return $this->fetch('lst');
    }

    public function edit($id)
    {
        $admin=db('index')->find($id);
        if(request()->isPost()){
            $data = input('post.');
            $data['password'] = md5($data['password']);
            $res = db('index')->where('id',$id)->update($data);
            if($res){
                $this->success('前台密码更新成功','lst');
            }else{
                $this->error('前台密码更新失败');
            }
         }
    }
    public function logout()
    {
        cookie(null);
        $this->success('退出登录成功',url('index/login/index'));
    }

    public function del($id){
        $del = db('index')->where('id',$id)->delete();
        if($del){
            $this->success('删除管理员成功！',url('lst'));
        }else{
            $this->error('删除管理员失败！');
        }
    }
}