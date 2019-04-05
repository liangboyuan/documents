<?php
namespace app\index\controller;
use think\Controller;
use app\index\model\Index;
class Login extends Controller
{
    public function index()
    {
        if(request()->isPost()){
            $index = new Index();
            $num = $index->login(input('post.'));
            if($num==1){
                $this->error('用户不存在');
            }elseif ($num==2){
                $this->success('用户登陆成功','index/index');
            }else{
                $this->error('密码错误');
            }
            return;
        }
        return view();
    }
}
