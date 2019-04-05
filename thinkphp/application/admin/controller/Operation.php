<?php
namespace app\admin\controller;
use app\admin\controller\Common;
use phpDocumentor\Reflection\Types\Null_;

class Operation extends Common
{
    public function conf()
    {
        $oper = db('operation')->select();
        $this->assign('oper',$oper);
        return $this->fetch();
    }

    public function conf1($id)
    {
        $res1 = db('operation')->where('id',$id)->find();
        $res2 = db('index')->where('name',$res1['u_name'])->find();
        $res3 = strlen($res2['mark2']);
        if ($res3 == 1){
            $res2['mark2'] = NULL;
        }else{
            $replace = ',' . $res1['u_id'];
            $res2['mark2'] = str_replace($replace,'',$res2['mark2']);
        }
        $res4 = db('index')->where('name',$res1['u_name'])->update(['mark2' => $res2['mark2']]);

        $data = db('index')->where('name',$res1['u_name'])->value('mark1');
        //$data1 = Db::table('index')->where('name',cookie('name'))->column('id','name','type','size');
        //$data1['u_id'] = $data1['id'];
        if($data == NULL){
            $data =  (string)$res1['u_id'];
        }else{
            $data = $data . ',' . (string)$res1['u_id'];
        }
        $res = db('index')->where('name',$res1['u_name'])->update(['mark1' => $data]);
        if($res4){
            db('operation')->where('id',$id)->delete();
            $this->success('允许下载');
        }
    }

    public function conf2($id)
    {
        $res1 = db('operation')->where('id',$id)->find();
        $res2 = db('index')->where('name',$res1['u_name'])->find();
        $res3 = strlen($res2['mark2']);
        if ($res3 == 1){
            $res2['mark2'] = NULL;
        }else{
            $replace = ',' . $res1['u_id'];
            $res2['mark2'] = str_replace($replace,'',$res2['mark2']);
        }
        $res = db('index')->where('name',$res1['u_name'])->update(['mark2' => $res2['mark2']]);

        if($res){
            db('operation')->where('id',$id)->delete();
            $this->success('拒绝下载');
        }
    }

}
