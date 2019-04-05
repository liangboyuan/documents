<?php
namespace app\index\model;
use think\Model;
class Index extends Model
{
    public function login($data){
        $admin = Index::getByName($data['name']);
        if($admin){
            if($admin['password']==md5($data['password'])){
                $res = db('index') -> where('name',$data['name'])->find();
                cookie('id',$res['id']);
                cookie('name',$admin['name']);
                return 2;
            } else{
                return 3;
            }
        }else{
            return 1;
        }
    }
}