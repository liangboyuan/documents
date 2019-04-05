<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use app\admin\controller\Common;
use app\admin\model\Activity;

class TitleList extends Common
{
    public function lst()
    {
        $activity = new Activity;
        $list = $activity->order('id', 'desc')->select();
        $this->assign('list',$list);
    	return $this->fetch();
    }
    public function filelist($activityId)
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

        $this->assign('remark',$remark[0]);
        $this->assign('activityName',$activityName[0]['title']);
        $this->assign('activityMd5Name',$activityName[0]['md5_title']);
        $this->assign('pictureList',$pictureList);
        $this->assign('audioList',$audioList);
        $this->assign('videoList',$videoList);
        $this->assign("root_path",ROOT_PATH);
        return $this->fetch();
    }
    public function add()
    {
    	return $this->fetch();
    }
    public function edit()
    {
    	return $this->fetch();
    }
    public function del(){
        $id = input('id');
        $pos = db('activity')->where('id',$id)->value('md5_title');
        $url = ROOT_PATH . 'public\static' . DS . $pos;
        if(is_dir($url))
        {
            if ($dh = opendir($url)) 
            {
                while (($file = readdir($dh)) !== false)
                {
                  unlink($url . DS . $file);
                }
                closedir($dh);
                rmdir($url);
            }
        }
    
        

        $del=db('activity')->delete($id);
        $del1 = db('file')->where('activity_id',$id)->delete();
        if($del && $del1){
            $this->success('删除档案文件成功！',url('lst'));
        }else{
            $this->error('删除档案文件失败！');
        }

    }




}