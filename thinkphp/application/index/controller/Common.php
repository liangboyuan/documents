<?php
namespace app\index\controller;
use think\Controller;
use think\Request;
use think\Db;
class Common extends Controller
{
    public function _initialize(){
        if(!cookie('id')|| !cookie('name')){
            $this->error('您还未登陆系统',url('login/index'));
        }
        //活动类型
        $category = Db::table('category')->select();
        $this->assign('category', $category);
        //部门
        $cate = Db::table('cates')->select();
        $this->assign('cate',$cate);
    }
    
}
