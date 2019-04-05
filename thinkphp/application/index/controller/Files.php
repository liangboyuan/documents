<?php

namespace app\index\controller;

use think\Controller;
use think\Db;
use app\index\controller\Common;

class Files extends Common
{
    public function allPicFiles()
    {
        $activity=Db::query('SELECT id, title, md5_title FROM activity');
        $list = [];
        for ($n = 0; $n < count($activity); $n++) {
            $list[$n] =
                Db::query('SELECT * FROM file WHERE activity_id = ? AND (type = "jpg" OR type = "png")', [$activity[$n]['id']]);
        }
        $this->assign('list', $list);
        $this->assign('activity', $activity);
        $this->assign('c', '图片');
        return $this->fetch('allFiles1');
    }

    public function allAudioFiles()
    {
        $list = Db::table('file')
            ->where('type', 'mp3')
            ->select();
        $this->assign('list', $list);

        $activity = [];

        for ($n = 0; $n < count($list); $n++) {
            $activityName = Db::table('activity')
                ->where('id', $list[$n]['activity_id'])
                ->column('md5_title');
            array_push($activity, $activityName[0]);
        }
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
        $this->assign('activity', $activity);
        $this->assign('c', '音频');
        return $this->fetch('allFiles2');
    }

    public function allVideoFiles()
    {
        $list = Db::table('file')
            ->where('type', 'mp4')
            ->select();
        $this->assign('list', $list);

        $activity = [];

        for ($n = 0; $n < count($list); $n++) {
            $activityName = Db::table('activity')
                ->where('id', $list[$n]['activity_id'])
                ->column('md5_title');
            array_push($activity, $activityName[0]);
        }
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
        $this->assign('activity', $activity);
        $this->assign('c', '视频');
        return $this->fetch('allFiles2');
    }

    public function conf($id)
    {
        $data = db('index')->where('name',cookie('name'))->value('mark2');
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

    public function download()
    {

    }
}