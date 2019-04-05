<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
use app\index\controller\Common;
use app\index\model\Activity;

class Edit extends Common
{
    public function index()
    {
        if (request()->isPost()) {
            $data = input('post.');
            $id = cookie('id');
            $res = db('index')->find($id);
            $m5pass = md5($data['password']);
            if($res['password'] == $m5pass && $data['password1'] == $data['password2']){
                $m5pass1 = md5($data['password1']);
                $up = db('index')->where('id',$id)->update(['password' => $m5pass1]);
                if($up){
                    $this->success('密码更新成功');
                }
            }

            //if ($res['password'] == md5($data['password'] && $data['password1'] == $data['password2'])) {
            //    $pass = md5($data['password1']);
            //    dump($pass);die;
            //} else {
            //    $this->error('原密码输入错误');
            //}

        }

        return $this->fetch();

    }
}
