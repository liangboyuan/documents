<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
use app\index\controller\Common;
use app\index\model\Activity;

class Vection extends Common
{
    public function index()
    {
        $activity = new Activity;
        $list = $activity->order('id', 'desc')->paginate(10);
        $this->assign('list',$list);
        return $this->fetch();
    }

    public function catesIndex($cate)
    {
        $activity = new Activity;
        $list = $activity
            ->where('category', $cate)
            ->order('id', 'desc')
            ->paginate(10);
        $this->assign('list', $list);
        return $this->fetch('index');
    }

    public function fileList($activityId)
    {
        $pictureList=Db::table('file')
            ->whereOr('type','jpg')
            ->whereOr('type','png')
            ->where('activity_id',$activityId)
            ->select();
        $audioList=Db::table('file')
            ->where('activity_id',$activityId)
            ->where('type','mp3')
            ->select();
        $videoList=Db::table('file')
            ->where('activity_id',$activityId)
            ->where('type','mp4')
            ->select();

        $activityName=Db::table('activity')
            ->where('id',$activityId)
            ->field('title,md5_title')
            ->select();
        $remark=Db::table('activity')
            ->where('id',$activityId)
            ->column('remark');
        $data = db('index')->where('name',cookie('name'))->value('mark2');
        $mark2 = explode(',',$data);
        for($i=0;$i<count($mark2);$i++)
        {
            $mark2[$i] = intval($mark2[$i]);
        }
        $data1 = db('index')->where('name',cookie('name'))->value('mark1');
        $mark1 = explode(',',$data1);
        for($i=0;$i<count($mark1);$i++)
        {
            $mark1[$i] = intval($mark1[$i]);
        }
        $mark0 = array_merge($mark1,$mark2);
        for($i=0;$i<count($mark0);$i++)
        {
            $mark0[$i] = intval($mark0[$i]);
        }
        // dump($mark0);die;
        $this->assign('mark2',$mark2);
        $this->assign('mark1',$mark1);
        $this->assign('mark0',$mark0);
        $this->assign('remark',$remark[0]['remark']);
        $this->assign('activityName',$activityName[0]['title']);
        $this->assign('activityMd5Name',$activityName[0]['md5_title']);
        $this->assign('pictureList',$pictureList);
        $this->assign('audioList',$audioList);
        $this->assign('videoList',$videoList);
        $this->assign("root_path",ROOT_PATH);
        return $this->fetch();
    }



    // public function statusInfo()
    // {
    //     $uploader_id=session('id');
    //     $list=Db::table('activity')
    //         ->where('uploader_id',$uploader_id)
    //         ->where('status',0)
    //         ->select();
    //     $this->assign('list',$list);
    //     return $this->fetch();
    // }


    public function edit()
    {
        return $this->fetch();

    }

    public function conf($id)
    {
        $data = db('index')->where('name',cookie('name'))->value('mark2');
        //$data1 = Db::table('index')->where('name',cookie('name'))->column('id','name','type','size');
        //$data1['u_id'] = $data1['id'];
        if($data == NULL){
            $data =  (string)$id;
        }else{
            $data = $data . ',' . (string)$id;
        }
        $res = db('index')->where('name',cookie('name'))->update(['mark2' => $data]);
        $res1 = db('file')->where('id',$id)->find();
        $cate['u_id'] = $res1['id'];
        $cate['name'] = $res1['name'];
        $cate['u_name'] = cookie('name');
        $cate['type'] = $res1['type'];
        $cate['size'] = $res1['size'];
        db('operation')->insert($cate);
        if($res){
            $this->success('申请下载已提交');
        }
    }

    public function logout()
    {
        session(null);
        $this->success('退出登录成功',url('login/index'));
    }

}
